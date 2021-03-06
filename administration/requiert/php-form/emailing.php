<?php
	if (!empty($_POST['idoffre'])) { $post_idoffre = code(30); } else { $post_idoffre = null; }
	if (!empty($_POST['nom'])) { $post_nom = htmlspecialchars(addslashes($_POST['nom'])); } else { $post_nom = null; }
	if (!empty($_POST['url'])) { $post_url = addslashes($_POST['url']); } else { $post_url = null; }
	if (!empty($_POST['description'])) { $post_description = htmlspecialchars(addslashes($_POST['description'])); } else { $post_description = null; }
	if (!empty($_POST['remuneration'])) { $post_remuneration = htmlspecialchars(addslashes($_POST['remuneration'])); } else { $post_remuneration = null; }
	if (!empty($_POST['valid'])) { $post_valid = htmlspecialchars(addslashes($_POST['valid'])); } else { $post_valid = null; }
	if (!empty($_POST['quota'])) { $post_quota = htmlspecialchars(addslashes($_POST['quota'])); } else { $post_quota = null; }
	if (!empty($_POST['premium'])) { $post_premium = htmlspecialchars(addslashes($_POST['premium'])); } else { $post_premium = null; }
		
	if (!empty($_POST['submit_add'])) {

		if (!empty($_FILES["imageMission"]["name"]) ) {
            
			$retour_total = $pdo->query("SELECT COUNT(*) AS total FROM e_offers");

			$donnees_total = $retour_total->fetch();
			$nbr = $donnees_total['total'] +1;

			$target_dir = "../images/emailing/";
			$target_file = $target_dir . basename($_FILES["imageMission"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			$target_file = $target_dir.$nbr.'.jpg' ;
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["imageMission"]["tmp_name"]);

			if($check !== false ) {
				$uploadOk = 1;
			} else {
				$reponsError = "File is not an image.";
				$uploadOk = 0;
			}
		
			// Check file size
			if ($_FILES["imageMission"]["size"] > 500000000 ) {
				$reponsError = "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				$reponsError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$reponsError = $reponsError;
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["imageMission"]["tmp_name"], $target_file) ) {

					$reponsConfirm = "Les documents ont bien été envoyés.";
					$post_image='http://cashbackreduction.com/images/emailing/'.$nbr.'.jpg';
					
				} else {
					$reponsError = "Désolé, une erreur c'est produite. Veuillez réessayer.";
					$post_image=null;
				}
			}
    }
        
        if(!isset($reponsError)){
            $pdo->exec("INSERT INTO 
            `e_offers`
            (`id`, 
            `e_idoffre`, 
            `e_nom`, 
            `e_url`, 
            `e_description`, 
            `e_remuneration`, 
            `e_valid`, 
            `e_actif`, 
            `e_date`, 
            `e_quota`, 
            `e_premium`, 
            `e_image`) 
            
            VALUES ('',
            '".$post_idoffre."', 
            '".$post_nom."', 
            '".$post_url."', 
            '".$post_description."', 
            '".$post_remuneration."', 
            '".$post_valid."', 
            '0', 
            '".date('d/m/Y à H:i:s')."', 
            '".$post_quota."', 
            '".$post_premium."', 
            '".$post_image."')");
            
            $post_idoffre = null;
            $post_nom = null;
            $post_url = null;
            $post_description = null;
            $post_remuneration = null;
            $post_montant = null;
            $post_valid = null;
            $post_quota = null;
            $post_premium = null;
			$post_image = null;
			
			$reponsConfirm = 'L\'offre a bien été ajoutée.';
			
        }
          
	}

	if (!empty($_POST['submit_upd'])) {
		
		$post_image=null;
		if (!empty($_FILES["imageMission"]["name"]) ) {
			$target_dir = "../images/emailing/";
			$target_file = $target_dir . basename($_FILES["imageMission"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			$target_file = $target_dir .$_GET['id'].'.jpg' ;

			// Check if image file is a actual image or fake image
			
			$check = getimagesize($_FILES["imageMission"]["tmp_name"]);
			if($check !== false ) {
				$uploadOk = 1;
			} else {
				$reponsError = "File is not an image.";
				$uploadOk = 0;
			}
		
			// Check file size
			if ($_FILES["imageMission"]["size"] > 500000000 ) {
				$reponsError = "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				$reponsError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$reponsError = "Désolé, les documents n'ont pas été envoyés.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["imageMission"]["tmp_name"], $target_file) ) {

					$reponsConfirm = "Les documents ont bien été envoyés.";
					$post_image='http://cashbackreduction.com/images/emailing/'.$_GET['id'].'.jpg';
					
				} else {
					$reponsError = "Désolé, une erreur c'est produite. Veuillez réessayer.";
					$post_image=null;
				}
			}
		}else{
            
            $post_image='http://cashbackreduction.com/images/emailing/'.$_GET['id'].'.jpg';
            
        }

		$sql = "UPDATE 
        e_offers
         SET 
         e_nom = '".$post_nom."', 
         e_url = '".$post_url."', 
         e_description = '".$post_description."', 
         e_remuneration = '".$post_remuneration."', 
         e_valid = '".$post_valid."', 
         e_date = '".date('d/m/Y à H:i:s')."', 
         e_quota = '".$post_quota."', 
         e_premium = '".$post_premium."'".($post_image != null ? ",
         e_image='".$post_image."'":"")." 
         
         WHERE id = '".intval($_GET['id'])."'";

		$pdo->exec($sql) or die ('Erreur : '.mysql_error());
		
		$reponsConfirm = 'L\'offre a bien été modifiée.';
	}
	
	if (!empty($_POST['active'])) {
		$pdo->exec("UPDATE e_offers SET 
        e_actif = !e_actif
         WHERE id = '".intval($_POST['active'])."'") or die ('Erreur : '.mysql_error());
		$reponsConfirm = 'L\'offre a bien été activée.';
	}
	
	if (!empty($_POST['desactive'])) {
		$pdo->exec("UPDATE e_offers SET 
        e_actif = !e_actif WHERE 
        id = '".intval($_POST['desactive'])."'") or die ('Erreur : '.mysql_error());
		$reponsConfirm = 'L\'offre a bien été mise en pause.';
    }
    
 
?>