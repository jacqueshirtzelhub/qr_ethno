<!DOCTYPE>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Test ecole</title>
</head>
<body>
<?php 

	$pdo = new PDO('mysql:host=localhost;dbname=ecole', 'root', ''); 

	$query = "SELECT nom_elv,prenom_elv,classe_cla FROM t_eleves NATURAL JOIN t_elv_cla NATURAL JOIN t_classes WHERE is_principale_cla=1 ORDER BY t_classes.classe_cla,nom_elv,prenom_elv ASC";
	$tab_elv = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

	echo "<h1>Liste des élèves de l'école de test</h1>";

	$classe = "";
	foreach($tab_elv AS $elv){
		if($elv['classe_cla'] != $classe){
			echo "<h2>".$elv['classe_cla']."</h2>";		
			$classe=$elv['classe_cla'];
		}

		echo $elv['nom_elv']." ".$elv['prenom_elv']."<br>";		

		
	}

		
?>
</body>
</html>