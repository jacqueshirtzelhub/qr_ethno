<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=ecole', 'root', ''); 

	$query = "SELECT nom_elv,prenom_elv,classe_cla FROM t_eleves NATURAL JOIN t_elv_cla NATURAL JOIN t_classes WHERE is_principale_cla=1 ORDER BY t_classes.classe_cla,nom_elv,prenom_elv ASC LIMIT 30";
	$tab_elv = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

	//print_r($tab_elv);


	require("fpdf.php");

	$pdf = new FPDf();
	$pdf->SetFont('Arial','B',16);
	
	// Marge du bas 15mm 
//	$pdf->SetAutoPageBreak(1,15);
	
	$pdf->addPage();

	$pdf->cell(190,10,"Liste des élèves de l'école de test",0,1,"C");

	// Entête
/*	$pdf->SetFont('Arial','B',12);
	$pdf->cell(100,10,"Nom, prénom",1,0,"L");	
	$pdf->cell(90,10,"Classe",1,1,"L");	
	$pdf->SetFont('Arial','',12);
*/	
//	$num_page=1;
	
	$classe = "";
	foreach($tab_elv AS $elv){
		if($elv['classe_cla'] != $classe){
			$pdf->SetFont('Arial','B',14);
			$pdf->cell(100,10,$elv['classe_cla'],0,1,"L");		
//			$pdf->cell(100,10,"Nom, prénom",0,1,"L");	
			$pdf->SetFont('Arial','',12);
			$classe=$elv['classe_cla'];
		}
		$view_num_page=0;

		$pdf->cell(100,6,$elv['nom_elv']." ".$elv['prenom_elv'],0,1,"L");		

		
/*		if($pdf->GetY()>270){
			$pdf->cell(190,10,"Page : ".$pdf->PageNo(),0,1,"R");	
			//$pdf->addPage();
			$pdf->SetFont('Arial','B',12);
			$pdf->cell(100,10,"Nom, prénom",1,0,"L");	
			$pdf->cell(90,10,"Classe",1,1,"L");	
			$pdf->SetFont('Arial','',12);
			$view_num_page=1;
		}*/
	}
/*	if(!$view_num_page){
		$pdf->setY(270);
		$pdf->cell(190,10,"Page : ".$pdf->PageNo(),0,1,"R");	
	}*/
	$pdf->output();


		
?>