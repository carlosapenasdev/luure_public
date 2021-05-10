<?php

return [
	'user'			=> 'Usuário SESP',
	'password'		=> 'Senha SESP',
	'error' 		=> 'Erro na interface com a SESP',
	
	'error_code' 		=> [
		'100' => 'user_pass',
		'101' => 'bou_not_found',
	],
	
	'error_code.user_pass' 		=> '100',
	'error_code.bou_not_found' 	=> '101',
	
	'error_message.100' 	=> 'SESP Respondeu: Usuário ou senha incorretos',
	'error_message.101' 	=> 'O BOU :bou não existe ou não foi digitado',
	'error_message.102' 	=> 'SESP Respondeu: Você não possui permissão de acesso para essa Rotina!',
	'error_message.103' 	=> 'Selenium está Offline. Contate o administrador do sistema',

];
