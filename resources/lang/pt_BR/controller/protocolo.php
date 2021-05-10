<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'name'          						=> 'Protocolo',
    'name_singular' 						=> 'Protocolo',
    'field_name'    						=> 'Nome',
    'paramim'       						=> 'Missões para mim',
    'paramim_elo'       					=> 'Missões para mim que estão com Elo',
    'missao'       							=> 'Missão',
    'finalizados' 							=> 'Protocolos Finalizados',
    'protocolos' 							=> 'Protocolos',

    /*FORM CRIAR PROTOCOLO*/

    'field_canal_id' 						=> 'Canal',
    'field_origin_id' 						=> 'Origem',
    'field_thematic_id' 					=> 'Temática',
    'field_user_cadastro_id' 				=> 'Usuário cadastro',
    'field_assunto_principal' 				=> 'Assunto Principal',

    'field_arquivo' 						=> 'Arquivo',
    'field_status' 							=> 'Status',

    /*FORM DESPACHO CHEFIA*/
    'field_user_analista_id' 				=> 'Responsável',
    'field_necessidades_especificas' 		=> 'Necessidades específicas',
    'field_dias_prazo_protocolo' 			=> 'Prazo',
    'field_documento_tipo_origem_id'        => 'Documento de origem',    
    'field_documento_tipo_ser_produzido_id' => 'Documento a ser produzido',    

    /*BROWSE*/
    'inAdministrativo' 						=> 'Administrativo',
    'inChefia' 								=> 'Chefia',
    'inAnalista' 							=> 'Analista',
    'inElo' 								=> 'Elo',
    'inFinalizado'							=> 'Finalizado',

    /*BROWSE PROTOCOLO*/
    'protocolo_id' 							=> 'Protocolo # :protocolo - ',
    'criado_em_por' 						=> 'Criado por :usuario em :data',
    'local' 								=> 'Local',
    
    'btn_despachar' 						=> 'Despachar',
    'btn_devolver' 							=> 'Devolver'

    ,'field_data_atribuiu_analista' 		=> 'Data Atribuiu Analista'
    ,'field_data_recebeu_analista' 			=> 'Data Recebeu Analista'
    ,'field_user_elo_id' 					=> 'Elo Responsável'
    ,'field_data_atribuiu_elo' 				=> 'Data Atribuiu Elo'
    ,'field_elabora_ob' 					=> 'Elaborar O.B.'
    ,'field_elabora_ob_0' 					=> 'Não'
    ,'field_elabora_ob_1' 					=> 'Sim'
    ,'field_dias_prazo_elo' 				=> 'Prazo Elo'
    ,'field_data_recebeu_elo' 				=> 'Data Recebeu Elo'
    ,'field_numero_relatorio_busca' 		=> 'Número Relatórito de Busca'
    ,'field_data_elo_encerrou' 				=> 'Data Encerramento Elo'
    ,'field_conclusao_elo' 					=> 'Conclusão Elo'
    
    ,'field_conclusao_elo_0' 				=> 'Não'
    ,'field_conclusao_elo_1' 				=> 'Sim'

    ,'field_conclusao_analista' 			=> 'Conclusão Analista'
    
    ,'field_conclusao_analista_0' 			=> 'Não'
    ,'field_conclusao_analista_1' 			=> 'Sim'

    ,'field_conclusao_chefe' 				=> 'Conclusão Chefe'
    
    ,'field_conclusao_chefe_0' 				=> 'Não'
    ,'field_conclusao_chefe_1' 				=> 'Sim'
    
    ,'field_conclusao_adm_0' 				=> 'Não'
    ,'field_conclusao_adm_1' 				=> 'Sim'

    ,'field_prazo_final' 					=> 'Prazo Final'
    ,'field_data_adm_encerrou' 				=> 'Finalizado em'
    

    /*DESPACHO*/
    ,'despacho_sucess' 						=> 'Despachado com sucesso!'
    ,'despachou_protocolo' 					=> 'Despachou protocolo'
    ,'difundiu_protocolo' 					=> 'Difundiu protocolo para outras agências'
    ,'despachou_editou' 					=> 'Editou despacho'
    ,'criou_protocolo' 						=> 'Criou protocolo'
    ,'editou_protocolo' 					=> 'Editou protocolo'

    /*COMENTARIOS*/
    ,'devolver_sucess' 						=> 'Devolvido com sucesso!'
    ,'comentarios'       					=> 'Comentários'
    ,'comentado_em_por' 					=> ':usuario em :data'
    ,'field_comentario' 					=> 'Comentário'
    ,'field_conclusao_chefia' 				=> 'Conclusão chefia'
    ,'field_conclusao_adm' 					=> 'Conclusão Administrativo'
    ,'estagio_atual'						=> 'Estava em :estagio_atual :'
    ,'estagio_atual_estagio_destino'		=> 'Estava em :estagio_atual enviou para :estagio_destino'

    /*SWEETALERT DESPACHO CHEFE*/
    ,'swal_chefe_titulo'					=> 'Qual a difusão deste protocolo?'
    ,'swal_chefe_msg'						=> 'Você pode demandar ações para outras ARIs/ALIs ou para despachar para o Administrativo desta'    
    ,'swal_chefe_sub'						=> 'ARI/ALI'    
    ,'swal_chefe_int'						=> 'Administrativo'    

    /*SWEETALERT DESPACHO ANALISTA*/
    ,'swal_analista_titulo'					=> 'Para quem você irá despachar este protocolo?'
    ,'swal_analista_msg'					=> 'Você pode despachar para o Elo, solicitando que ele realize uma busca (Ordem de Busca)<br /> ou despachar diretamente para a chefia, anexando a documentação a ser produzida pelo protocolo'    
    ,'direto_naopossivel'					=> 'Não é possível movimentar este protocolo desta forma!'    
    ,'naopossivel_ver'						=> 'Você não possui autorização para ver este protocolo!'    
    ,'comment_diretochefe'					=> 'Marcou que este protocolo vai direto para a chefia'    
    ,'comment_diretoelo'					=> 'Marcou que este protocolo vai para o Elo'

    /*BUSCA*/
    ,'busca_title'							=> 'Buscar protocolos'
    ,'locais_pesquisa'						=> 'Pesquisar em:'
    ,'incluir_finalizados'					=> 'Finalizados'
    ,'incluir_ocultos'						=> 'Ocultos'
    ,'field_keyword'						=> 'Buscar por'
    ,'empty'								=> 'Nenhum resultado localizado'
    ,'field_periodo_de'						=> 'Data: de'
    ,'field_periodo_ate'					=> 'Data: até'
    ,'busca_resultado'						=> '{1} Localizado :qtde resultado |[2,*] Localizado :qtde resultados'


    /*GRAFICOS*/
    ,'chart_msg'							=> 'Total :total'
    ,'vecimento_emdia'						=> 'Em dia'
    ,'vecimento_terminando'					=> 'Terminando'
    ,'vecimento_atrasado'					=> 'Atrasado'
    ,'visivel'								=> 'Visível'
    ,'oculto'								=> 'Oculto'
    ,'visibilidade'							=> 'Visibilidade alterada!'
    ,'txt_visibilidade'						=> 'Você está alterando a visibilidade do protocolo!'
    ,'confirm_visibilidade'					=> 'Sim!'

    ,'pessoas'								=> 'Pessoas'
    ,'add_pessoa'							=> 'Alterar pessoas no protocolo'
    ,'pessoas_sucess' 						=> 'Lista de pessoas alterada!'
    
    ,'numero_origem'                        => 'Nº documento origem'
    ,'numero_produzido'                     => 'Nº documento produzido'
    ,'id_protocolo'                         => 'Nº protocolo'
    
    ,'documento_enviado'        			=> 'Enviou o documento :documento nº :numero'
    ,'documento_editar'        				=> 'Editar o documento :documento nº :numero'
    ,'documento_editou'        				=> 'Editou o documento :documento nº :numero'
    
    ,'enviar_agencias'        				=> 'Enviar para agências'
    ,'aris'        							=> 'ARI\'s'
    ,'alis'        							=> 'ALI\'s'
    ,'difusao'        						=> 'Difusão'
    ,'difusao_sem_interacao'        		=> 'Sem interação'
    ,'difusao_com_interacao'        		=> 'Movimentado, mas não concluido'
    ,'difusao_aguardando_contra'        	=> 'Respondido pela Agência, aguardando Contrainteligência'
    ,'difusao_contra_validou'        		=> 'Respondido pela Agência e validado pela Contrainteligência'

    
    ,'retorno_difusao'        				=> 'Enviar protocolo à :local'
    ,'retorno_difusao_documento'			=> 'Enviou o :documento nº :numero à :local como conclusão do protocolo '
    ,'fim_protocolo'						=> 'Encerramento do protocolo #:protocolo '
    ,'arquivar'								=> 'Arquivar'
    ,'finalizar_direto'						=> 'Arquivar Protocolo'
    ,'field_conclusao_arquivese'			=> 'Justificativa arquivamento'
    ,'add_anexos'							=> 'Adicionar Anexos'
];
