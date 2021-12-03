<?php

function conectar()									# Função para conecção ao banco de dados com PDO
{
	$HOST = "localhost" ;
	$USER = "root" ;
	$PASSWORD = "" ;
	$DB_NAME = "pizzaria" ;
	$SGBD = "mysql";

	try
	{
	    $PDO = new PDO( $SGBD.':host=' . $HOST . ';dbname=' . $DB_NAME, $USER, $PASSWORD );
	    $PDO -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	    return $PDO;
	}
	catch ( PDOException $e )
	{
	    echo 'Erro ao conectar com o MySQL: '. $e->getMessage();
	    return NULL;
	}

}

?>