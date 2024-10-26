<?php

    function traduz_data_banco($data){
		if ($data == "") {
			return "";
		}
		$dados = explode("-", $data);
		$data_mysql = $dados[0] . str_pad($dados[1],2,'0') . str_pad($dados[2],2,'0');
		return $data_mysql;
	}
	function traduz_banco_data($data){
		if($data == ""){
			return "";
		}
		$retorno = substr($data,6,2) . "/" . substr($data,4,2) . "/" . substr($data,0,4);
		return $retorno;
	}