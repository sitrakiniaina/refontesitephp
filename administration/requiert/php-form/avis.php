<?php
  
	if (!empty($_POST['accepte'])) {
		if(!empty($_POST['foo'])){
                for($i= 0 ;$i < count($_POST['foo']);$i++){
					$pdo->exec("UPDATE livredor SET statut = 1 WHERE id = ".$_POST['foo'][$i]."") or die ('Erreur : '.mysql_error());
				}
				$reponsConfirm = 'Les avis a bien été ajouter a l\'acceuil.';
        }
        unset($_POST);
    }

	if (!empty($_POST['refuse'])) {

		if(!empty($_POST['foo'])){
            for($i= 0 ;$i < count($_POST['foo']);$i++){
                $pdo->exec("DELETE FROM livredor WHERE id =".$_POST['foo'][$i]."");
            }
		}
		
		unset($_POST);
        $reponsConfirm = 'Les avis a bien été supprimer.';
	
	}
 
	if (isset($reponsConfirm)) {
?>
		<script type="text/javascript">
			swal({
				text: "<?= $reponsConfirm; ?>",
				button: "Fermer",
				icon: "success",
				closeOnClickOutside: false,
				closeOnEsc: false,
			});
		</script>
<?php
	}
	
	if (isset($reponsError)) {
?>
		<script type="text/javascript">
			swal({
				text: "<?= $reponsError; ?>",
				button: "Fermer",
				icon: "error",
				closeOnClickOutside: false,
				closeOnEsc: false,
			});
		</script>
<?php
	}
?>