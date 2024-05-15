<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "l-k";
	const SITE_NOME = "Nascimento Joias";
	const SITE_EMAIL_ADM = "skaique5424@gmail.com";							
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '08081665';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "joias",
		  BD_PREFIX = "nj_";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "skaique5424@gmail.com";						
	const EMAIL_NOME = "Contato Loja Nascimento Joias";
	const EMAIL_SENHA = "Marrehntto*1234";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "skaique5424@gmail.com";

	//CONSTANTES PARA O PAGSEGURO
	const PS_EMAIL  = "mlucia7007@gmail.com"; // email pagseguro
	const PS_TOKEN  = "8319c66c-913d-44d6-a35a-d3caea815e3342650ae14869a6d167ad9ce4f59bb5b17f81-c142-4419-89e3-053bd4654fae"; // token produção
	const PS_TOKEN_SBX = "04B02C6BBB744AD1B2140EF3E52C814E";  // token do sandbox
	const PS_AMBIENTE = "sandbox"; // production   /  sandbox



}
 ?>

