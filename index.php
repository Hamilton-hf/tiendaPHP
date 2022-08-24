<?php 

	require_once("config/config.php");
	require_once("helpers/helpers.php");

	$url = !empty($_GET['url']) ? $_GET['url'] :'home/home';
	$arrUrl = explode("/",$url);
	$controller = $arrUrl[0];
	$method = $arrUrl[0];
	$params = "";

	if(!empty($arrUrl[1]))
	{
		if($arrUrl[1] != "")
		{
			$method = $arrUrl[1];
		}
	}

	if(!empty($arrUrl[2]))
	{
		for ($i=2; $i< count($arrUrl); $i++)
		{
			$params .= $arrUrl[$i].',';
		}
		$params = trim($params,',');
		//echo $params;
	}
//coratdo autoload
	require_once("libraries/Core/autoload.php");

	//Load
	require_once("libraries/Core/Load.php");

	//echo "<br>";
	//echo "controlador".$controller;
	//echo "<br>";
	//echo "metodo".$method;
	//echo "<br>";
	//echo "parametros: ".$params;
	//echo "controlador: ".$controller.' - metodo: '.$method;

	//print_r($arrUrl);
	//echo $url;

 ?>