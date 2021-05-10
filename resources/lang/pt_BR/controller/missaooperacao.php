<?php

return [

	'name' => 'Missões da Operação'
	,'name_singular' => 'Missão da Operação'
	
	/*FORM CRIAR PROTOCOLO*/
	,'field_assunto_principal' 				=> 'Assunto Principal'
	
	,'field_elabora_ob' 					=> 'Elaborar O.B.'
	,'field_elabora_ob_0' 					=> 'Não'
	,'field_elabora_ob_1' 					=> 'Sim'
	
	,'field_user_elo_id' 					=> 'Elo Responsável'
	,'field_dias_prazo_elo' 				=> 'Prazo Elo'
	,'field_data_recebeu_elo' 				=> 'Data Recebeu Elo'
	,'field_data_elo_encerrou' 				=> 'Data Encerramento Elo'
	,'field_user_cadastro_id' 				=> 'Usuário cadastro'
	,'field_user_analista_id' 				=> 'Analista'
	,'field_data_atribuiu_elo' 				=> 'Data Atribuiu Elo'
	,'field_prazo_final' 					=> 'Prazo Final'
	
	,'field_conclusao_elo' 					=> 'Conclusão Elo'
	,'field_conclusao_elo_0' 				=> 'Não'
	,'field_conclusao_elo_1' 				=> 'Sim'
	
	,'field_conclusao_analista' 			=> 'Conclusão Analista'
	,'field_conclusao_analista_0' 			=> 'Não'
	,'field_conclusao_analista_1' 			=> 'Sim'


	,'field_documento_tipo_id' 				=> 'Espécie de documento'
	,'field_numero' 						=> 'Nº do documento'
	,'field_arquivo' 						=> 'Arquivo'
	,'field_estagio_id' 					=> 'Estágio'

	/*FORM DESPACHO*/
	,'field_numero_relatorio_busca' 		=> 'Número Relatórito de Busca'
	,'field_conclusao_adm' 					=> 'Conclusão'
	,'field_comentario' 					=> 'Comentário'
	,'devolucao' 							=> 'Estava em :estagio_atual e foi para :estagio_destino por: :comentario'
	,'devolver_sucess' 						=> 'Devolvido com sucesso!'
	,'direto_naopossivel'					=> 'Não é possível movimentar esta missão desta forma!'    
	
	/*SHOW MISSAO*/
	,'operacao_id' 							=> 'Operação #:operacao '
	,'missao_id' 							=> 'Missão #:missao - '
	,'criado_em_por' 						=> 'Criado por :usuario em :data'
	,'local' 								=> 'Local'
	,'documentos' 							=> 'Documentos'
	,'field_dias_prazo_protocolo' 			=> 'Prazo'
	,'btn_despachar' 						=> 'Despachar'
	,'btn_devolver' 						=> 'Devolver'
	,'despacho_sucess' 						=> 'Despachado com sucesso!'
	,'field_data_adm_encerrou' 				=> 'Finalizado em'
	

	#'field_name'    						=> 'Nome',
	#'paramim'       						=> 'Missões para mim',
	#'paramim_elo'       					=> 'Missões para mim que estão com Elo',
	#'missao'       							=> 'Missão',

	/*FORM CRIAR PROTOCOLO*/


	#'field_arquivo' 						=> 'Arquivo',

	/*FORM DESPACHO CHEFIA*/
	#'field_necessidades_especificas' 		=> 'Necessidades específicas',

	/*BROWSE*/
	#'inAdministrativo' 						=> 'Administrativo',
	#'inChefia' 								=> 'Chefia',
	#'inAnalista' 							=> 'Analista',
	#'inElo' 								=> 'Elo',
	#'inFinalizado'							=> 'Finalizado',

	/*BROWSE PROTOCOLO*/
	#'protocolo_id' 							=> 'Missão # :protocolo - ',
	#'criado_em_por' 						=> 'Criado por :usuario em :data',
	#'local' 								=> 'Local',
	#'documentos' 							=> 'Documentos',
	#'btn_despachar' 						=> 'Despachar',
	#'btn_devolver' 							=> 'Devolver'

	#,'field_data_atribuiu_analista' 		=> 'Data Atribuiu Analista'
	#,'field_data_recebeu_analista' 			=> 'Data Recebeu Analista'


	#,'field_conclusao_chefe' 				=> 'Conclusão Chefe'

	#,'field_conclusao_chefe_0' 				=> 'Não'
	#,'field_conclusao_chefe_1' 				=> 'Sim'

	#,'field_conclusao_adm_0' 				=> 'Não'
	#,'field_conclusao_adm_1' 				=> 'Sim'



	/*DESPACHO*/
	#,'despachou_protocolo' 					=> 'Despachou protocolo'
	#,'despachou_editou' 					=> 'Editou despacho'
	#,'criou_protocolo' 						=> 'Criou protocolo'
	#,'editou_protocolo' 					=> 'Editou protocolo'

	/*COMENTARIOS*/
	#,'historico'       						=> 'Histórico'
	#,'comentarios'       					=> 'Comentários'
	#,'comentado_em_por' 					=> ':usuario em :data'
	#,'field_conclusao_chefia' 				=> 'Conclusão chefia'
	#,'estagio_atual'						=> 'Estava em :estagio_atual :'
	#,'estagio_atual_estagio_destino'		=> 'Estava em :estagio_atual enviou para :estagio_destino'

	/*GERAÇÃO NUMERACAO*/
	#,'numero_titulo'						=> 'Confirmar geração documento?'
	#,'numero_msg'							=> 'Ao gerar o documento com este número não será mais possível alterá-lo!'
	#,'numero_btn-confirm' 					=> 'Sim, gerar!'

	/*SWEETALERT DESPACHO ANALISTA*/
	#,'swal_analista_titulo'					=> 'Para quem você irá despachar este protocolo?'
	#,'swal_analista_msg'					=> 'Você pode despachar para o Elo, solicitando que ele realize uma busca (Ordem de Busca)<br /> ou despachar diretamente para a chefia, anexando a documentação a ser produzida pelo protocolo'    
	#,'comment_diretochefe'					=> 'Marcou que este protocolo vai direto para a chefia'    
	#,'comment_diretoelo'					=> 'Marcou que este protocolo vai para o Elo'    

];
