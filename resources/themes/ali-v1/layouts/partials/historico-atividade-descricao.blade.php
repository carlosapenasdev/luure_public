<div class="historico-atividade">
	@if($atividade->isUpdated() && !$atividade->isRelationship())
	<div class="row mt-1 mb-1">
		<div class="col s6 strong uppercase"><b>{{Lang::get('historico.antes')}}</b></div>
		<div class="col s6 strong uppercase">{{Lang::get('historico.depois')}}</div>
	</div>
	<div class="row pb-1">

		<div class="col s6">
			@foreach($atividade->changes['old'] as $field => $change)
			<div class="row">
				<div class="col s6">{{Lang::get($atividade->getLangToFields().'field_'.$field)}}</div>
				<div class="col s6 truncate">
					@if(!empty($change))
					{{$atividade->getFieldValue($atividade->changes, 'old', $field, $change)}}
					@else
					{{Lang::get('historico.vazio')}}
					@endif
				</div>
			</div>
			@endforeach
		</div>

		<div class="col s6">
			@foreach($atividade->changes['attributes'] as $field => $change)
			<div class="row">
				<div class="col s6">{{Lang::get($atividade->getLangToFields().'field_'.$field)}}</div>
				<div class="col s6 truncate">
					@if(!empty($change))
					{{$atividade->getFieldValue($atividade->changes, 'attributes', $field, $change)}}
					@else
					{{Lang::get('historico.vazio')}}
					@endif
				</div>
			</div>
			@endforeach
		</div>
	</div>
	@elseif($atividade->isRelationship())
	{{ Lang::get('historico.relationship_change', ['model_title' => $atividade->properties['model_title'], 'model_subject' => $atividade->properties['model_subject']])}} 
	@elseif($atividade->isComment())
	{!! nl2br(e($atividade->properties['comentario']))!!}
	@endif
</div>