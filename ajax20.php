<?php 
	
	sleep(1);
	$ad=$_POST["kadi"];
	$sifre=$_POST["sifre"];

	if (!$ad || !$sifre) 
	{
		$array["hata"]='Bos alan bırakmayınız';
	}
	else
	{
		$array["succes"]=$ad.'<br>'.$sifre;
	}
		

	echo json_encode($array);


 ?>