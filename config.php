<?php

	$db_host='us-cdbr-east-03.cleardb.com';
	$db_user='b8aa88ad6a27d3';
	$db_pass='8e2ec6ec';
	$db_name='mmb';

	try {
		$db_conn= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>
