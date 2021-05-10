<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity as LogAtividades;
use Illuminate\Support\Str;
use Lang;
use Illuminate\Support\Collection;
use App\Models\Operacao\Operacao;
use App\Models\Ocorrencia\Ocorrencia;
use App\Models\Gestao\Estatistica\Estatistica;
use App\Models\Protocolo\Protocolo;

class Historico extends LogAtividades
{
	protected $appends = ['criado_em'];

	public function getCriadoEmAttribute()
	{
		return $this->created_at->format('d/m/Y H:i:s');
	}

	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);
	}

	public function isCreated()
	{
		return $this->description == 'created';
	}

	public function isUpdated()
	{
		return $this->description == 'updated';
	}

	public function isDeleted()
	{
		return $this->description == 'deleted';
	}

	public function isComment()
	{
		return $this->description == 'comment';
	}

	public function isRelationship()
	{
		return isset($this->properties['relationship_change']) && $this->properties['relationship_change'] == true;
	}

	public function getLangToFields()
	{
		$subject = explode('\\', $this->subject_type);
		$subject = end($subject);
		return 'controller/'.strtolower($subject).'.';
	}

	public function getFieldValue($changes, $area, $field, $value)
	{
		$subject = new $this->subject_type($changes[$area]);

		if($field == 'password')
			$value = '******';		

		if(Str::contains($field, '_id'))
		{
			$field = str_replace('_id', '', $field);

			if(method_exists($subject, $field))
			{
				if(isset($subject->$field->nome))
					return $subject->$field->nome;

				elseif(isset($subject->$field->name))
					return $subject->$field->name;
			}
		}
		elseif(Str::contains($field, 'conclusao_'))
		{
			return Lang::get($this->getLangToFields().'field_'.$field.'_'.$value);
		}
		elseif(isDate($value))
		{
			return stringIsDate($value, true);
		}
		elseif(Lang::has($this->getLangToFields().'field_'.$field.'_'.$value))
		{
			return Lang::get($this->getLangToFields().'field_'.$field.'_'.$value);
		}

		return $value;
	}

	public static function trataHistoricoIndividuo($historico)
	{
		$atividades = new Collection();

		foreach ($historico as $elemento)
		{
			if($elemento instanceof Comentario)
			{
				$atividade = self::trataComentarioIndividuo($elemento);
			}
			elseif($elemento instanceof Historico)
			{
				$atividade = self::trataHistoriaIndividuo($elemento);
			}

			$atividades->push($atividade);
		}

		return $atividades;
	}

	public static function trataComentarioIndividuo($elemento)
	{
		$atividade 				= new \stdClass();
		$usuario 				= $elemento->user;

		$descricao 				= '';

		$em_por 	= Lang::get('historico.em_por', [
			'acao' 		=> '',
			'usuario' 	=> $elemento->user->name,
			'data' 		=> $elemento->criado_em
		]);

		$descricaoJson 			= json_decode($elemento->descricao);

		if(property_exists($descricaoJson, 'operacao_id'))
		{
			$operacao 			= Operacao::find($descricaoJson->operacao_id);
			$link 				= '<a href="'.route('operacao.show', $operacao).'" class="link-pmpr">'.'#'.$operacao->id.' '.$operacao->nome.'</a>';
			$descricao 			= Lang::get($descricaoJson->lang, ['operacao' => $link]);
		}

		if(property_exists($descricaoJson, 'estatistica_id'))
		{
			$estatistica 		= Estatistica::withoutGlobalScopes()->find($descricaoJson->estatistica_id);
			$operacao 			= $estatistica->operacao;
			$descricao = '('.$estatistica->agencia->nome.') / ';

			if($estatistica->isOwner())
				$link 				= '<a href="'.route('estatistica.show', $estatistica).'" class="link-pmpr">'.'#'.$estatistica->numero_boletim.'</a>';
			else
				$link 				= '#'.$estatistica->numero_boletim;
			
			$descricao 			.= Lang::get($descricaoJson->lang, ['acao' => $estatistica->acao_estatistica->name, 'bou' => $link]);

			if(!empty($operacao))
			{
				$link 				= '<a href="'.route('operacao.show', $operacao).'" class="link-pmpr">'.$operacao->id_nome.'</a>';

				$descricao .= Lang::get($descricaoJson->lang.'_operacao', ['operacao' => $link]);
			}

		}

		if(property_exists($descricaoJson, 'ocorrencia_id'))
		{
			$ocorrencia 		= Ocorrencia::withTrashed()->where('id', $descricaoJson->ocorrencia_id)->first();
			
			if(!$ocorrencia->trashed())
				$link 				= '<a href="'.route('ocorrencias.show', $ocorrencia).'" class="link-pmpr">'.'#'.$ocorrencia->bou.'</a>';
			else
				$link 				= '#'.$ocorrencia->bou;

			$descricao 			= Lang::get($descricaoJson->lang, ['bou' => $link]);
		}

		if(property_exists($descricaoJson, 'protocolo_id'))
		{
			$protocolo 		= Protocolo::withoutGlobalScopes()->withTrashed()->where('id', $descricaoJson->protocolo_id)->first();
			$descricao = '('.$protocolo->agencia->nome.') / ';
			
			$link 			= '';
			
			if(!is_null($protocolo))
			{
				if(!$protocolo->trashed() && $protocolo->isOwner())
					$link 				= '<a href="'.route('protocolo.show', $protocolo).'" class="link-pmpr">'.'#'.$protocolo->id.'</a> <br /><br />'.$protocolo->assunto_principal;
				else
					$link 				= '#'.$protocolo->id;
			}

			$descricao 			.= Lang::get($descricaoJson->lang, ['protocolo' => $link]);
		}


		$atividade->em_por 		= $em_por;
		$atividade->descricao 	= $descricao;

		return $atividade;
	}

	public static function trataHistoriaIndividuo($elemento)
	{
		$atividade 	= new \stdClass();
		$usuario 	= $elemento->user;

		$em_por = Lang::get('historico.em_por', [
			'acao' 		=> Lang::get('historico.acao_'.$elemento->description),
			'usuario' 	=> !is_null($elemento->causer) ? $elemento->causer->name : Lang::get('historico.user_vazio'),
			'data' 		=> $elemento->criado_em]);

		$descricao = '';

		$descricao = view('layouts/partials/historico-atividade-descricao', ['atividade' => $elemento])->render();
		$descricao = str_replace("<div class=\"historico-atividade\">\n\t</div>", '', $descricao);

		$atividade->em_por 		= $em_por;
		$atividade->descricao 	= $descricao;

		return $atividade;
	}
}