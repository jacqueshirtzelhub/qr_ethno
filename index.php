<?php

echo "toto XI";
/*	require("fpdf.php");
	include('./phpqrcode/qrlib.php'); 
	
	$pdo = new PDO('mysql:host=localhost;dbname=ecole', 'root', ''); 

	$query = "SELECT nom_elv,prenom_elv,classe_cla FROM t_eleves NATURAL JOIN t_elv_cla NATURAL JOIN t_classes WHERE is_principale_cla=1 ORDER BY `t_classes`.`classe_cla` ASC LIMIT 1";
	$tab_elv = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

	//print_r($tab_elv);



	function qr($eleve){

         
		// how to save PNG codes to server 
     
		$tempDir = "./"; 
		 
		$codeContents = $eleve; 
		 
		// we need to generate filename somehow,  
		// with md5 or with database ID used to obtains $codeContents... 
		$fileName = '005_file_.png'; 
		 
		$pngAbsoluteFilePath = $tempDir.$fileName; 
		$urlRelativeFilePath = $tempDir.$fileName; 
		 
		// generating 
		if (!file_exists($pngAbsoluteFilePath)) { 
			QRcode::png($codeContents, $pngAbsoluteFilePath); 
//	//		echo 'File generated!'; 
//			echo '<hr />'; 
		} else { 
//			echo 'File already generated! We can use this cached file to speed up site on common codes!'; 
//			echo '<hr />'; 
		} 
		 
//		echo 'Server PNG File: '.$pngAbsoluteFilePath; 
//		echo '<hr />'; 
		 
		// displaying 
//		echo '<img src="'.$urlRelativeFilePath.'" />'; 
return $urlRelativeFilePath;
    
	}


	

	$pdf = new FPDf();
	$pdf->SetFont('Arial','B',16);
	$pdf->SetAutoPageBreak(1,15);
	$pdf->addPage();
	$pdf->cell(190,10,"Liste des élèves de l'école de test",0,1,"C");

	$pdf->SetFont('Arial','B',12);
	$pdf->cell(100,10,"Nom, prénom",1,0,"L");	
	$pdf->cell(90,10,"Classe",1,1,"L");	
	$pdf->SetFont('Arial','',12);
	$num_page=1;
	foreach($tab_elv AS $elv){
		$view_num_page=0;
		$pdf->cell(100,10,$elv['nom_elv']." ".$elv['prenom_elv'],1,0,"L");		
		$pdf->cell(90,10,$elv['classe_cla'],1,1,"L");	
		$pdf->Image(qr($elv['nom_elv']." ".$elv['prenom_elv']));
		if($pdf->GetY()>270){
			$pdf->cell(190,10,"Page : ".$pdf->PageNo(),0,1,"R");	
			//$pdf->addPage();
			$pdf->SetFont('Arial','B',12);
			$pdf->cell(100,10,"Nom, prénom",1,0,"L");	
			$pdf->cell(90,10,"Classe",1,1,"L");	
			$pdf->SetFont('Arial','',12);
			$view_num_page=1;
		}
	}
	if(!$view_num_page){
		$pdf->setY(270);
		$pdf->cell(190,10,"Page : ".$pdf->PageNo(),0,1,"R");	
	}
	$pdf->output();

*/
		
?>