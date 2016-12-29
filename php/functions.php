<?php
include 'connexion.php';

		$query = $bd->prepare("SELECT email, mdp FROM users WHERE email = :email AND mdp = :mdp");
		$query->bindValue(':email', $_POST['email']);
		$query->bindValue(':mdp', $_POST['mdp']);
		$query->execute();

		while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $r;
        }
        if(!$result){
        	$is_connected=false;
        }
        else{
        	$is_connected=true;
        }

?>