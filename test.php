<?php

	include 'xml.php';
	
	copy("http://osservatoriometeoliguria.arpal.gov.it//~omirl/WEB/omirl.xml", __DIR__ . "/dati_stazioni_meteo.xml");
	$xml= new xml( __DIR__ . "/dati_stazioni_meteo.xml");
	print_r($xml);


?>