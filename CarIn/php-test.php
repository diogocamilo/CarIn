<?php
	session_start();
	$_SESSION['usuario'] = serialize($usuario);
	$_SESSION['empresa'] = serialize($empresa);
	//$url = "carin.ml/class/domain/cadastro-usuario.php";
	//$url = "carin.ml/class/domain/solicitar-orcamento/cadastrar-orcamento.php";	
	//$url = "carin.ml/class/domain/solicitar-orcamento/avaliar-orcamento-empresa.php";
	$url = "carin.ml/class/domain/cadastro-usuario.php";
	
	class Empresa{
		public $Codigo = null;
	}

	class Usuario{
		public $Codigo = null;
	}

	$empresa = new Empresa;
	$empresa->Codigo = 1;

	$usuario = new Usuario;
	$usuario->Codigo = 100;	
	



	//Cadastro usuario
	$fields = array(
	    //'ds_orcamento' => 'Farol quebrado',
		'nm_usuario' => 'Diogo Camilo',
		'nr_cpf_usuario' => '46910856880',
		//'dt_inicio_orcamento' => '2017-05-03',
		'ds_login_usuario' => 'diogo',
		//'cd_empresa' => $empresa->Codigo,
		//'cd_usuario' => $usuario->Codigo = 100
		'ds_senha_usuario' => 'camilo'
	);


	//Cadastro de orçamento pelo usuário
	/*
	$fields = array(
	    'ds_orcamento' => 'Farol quebrado',
		//'ds_valor_maodeobra_orcamento' => 70.10,
		//'ds_valor_total_pecas_orcamento' => 150.35,
		'dt_inicio_orcamento' => '2017-05-03',
		//'dt_termino_orcamento' => '2017-05-20',
		'cd_empresa' => $empresa->Codigo,
		'cd_usuario' => $usuario->Codigo = 100
	);
	*/
	

// what post fields?

	//Cadastro empresa
	/*$fields = array(
	    'razao_social' => 'Mecânica SA',
	    'cnpj' => 13453312324,
		'ramo_atividade' => 'mecânica',
		'telefone' => '1334698767',
		'email' => 'empresa@empresa.com',
		'cep' => '11050251',
		'endereco' => 'Rua Barão de Paranapiacaba',
		'bairro' => 'Encruzilhada',
		'cidade' => 'Santos',
		'estado' => 'SP',
		'avaliacao' => 3,
		'senha' => 'empresa',
		'login' => 'empresa'
	);*/

	// build the urlencoded data
	$postvars = http_build_query($fields);

	// open connection
	$ch = curl_init();

	// set the url, number of POST vars, POST data
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, count($fields));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

	// execute post
	$result = curl_exec($ch);

	// close connection
	curl_close($ch);

?>