<?php
	require 'config.php';

	try {
	    $bdd = new PDO(
        "mysql:host=".$config['db_host'].";dbname=".$config['db_name'].";charset=utf8",
         $config['db_user'],
          $config['db_pass']);
	    // set the PDO error mode to exception
	    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
	    echo "Connection failed: " . $e->getMessage();
	}

	function protection( $input ){
	// htmlspecialchars : transforme les caractères spéciaux en html, trim supprime les espaces, strip_tags supprime les baslises htem et PHP
	// htmlentities : transforme les balise en caractère spéciaux
	return htmlspecialchars(strip_tags(trim(htmlentities($input))));
	}
?>
