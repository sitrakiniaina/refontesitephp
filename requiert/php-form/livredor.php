<?php
	// Début : Inscription
	if (!empty($_POST["submit_send"])) {
		if (!empty($_POST["message"])) {

			$pdo->exec("INSERT INTO `livredor` 
			(
				`id`, 
				`nbr_start`, 
				`nom_user`, 
				`message`, 
				`date`, 
				`statut`
			) 
			VALUES 
			(
				'', 
				'".addslashes(htmlentities($_POST['start']))."', 
				'".addslashes(htmlentities($mbrePrenom))."', 
				'".addslashes(htmlentities($_POST['message']))."', 
				NOW(), 
				0
			)");
                            
			$reponsConfirm = 'Votre message nous a bien été envoyé. Il sera soumis à validation avant d\'être publié.';
			$button = '"Fermer"';

			$post_email = null;
			$post_message = null;
			 
		}
		else {
			$reponsError = 'Tout les champs sont requis pour envoyer votre message.';
			$button = '"Fermer"';
		}
	}
	// Fin : Inscription

	if (isset($reponsConfirm)) {
?>
		<script type="text/javascript">
			swal({
				text: "<?= $reponsConfirm; ?>",
				button: <?= $button; ?>,
				icon: "success",
				closeOnClickOutside: false,
				closeOnEsc: false,
			})<?php if (isset($redirectionLogin)){ ?>,
			setTimeout("window.location='<?= $redirectionLogin; ?>'",3000);<?php } ?>
		</script>
<?php
	}
	
	if (isset($reponsError)) {
?>
		<script type="text/javascript">
			swal({
				text: "<?= $reponsError; ?>",
				button: <?= $button; ?>,
				icon: "error",
				closeOnClickOutside: false,
				closeOnEsc: false,
			});
		</script>
<?php
	}
?>