<?php include('./inc/config.php'); ?>
<?php
if (!empty($_GET['off_id']))
{
	$off_id = intval(addslashes($_GET['off_id']));


	if (empty($off_id))
	{
		header("Location:http://www.gtpn1.com/offres.html");
		exit;
	}
	$offres = $pdo->query("SELECT * FROM offres WHERE id = '".$off_id."'");
	$donnees_off = $offres->fetch();
	$off_nom = $donnees_off['nom'];
	$off_url = $donnees_off['url'];
	$off_remu = $donnees_off['toks'];
	$off_image300 = $donnees_off['image300'];
	$off_description = $donnees_off['description'];
	$off_conditions = $donnees_off['conditions'];
	$off_script = $donnees_off['script'];
	$off_actif = $donnees_off['actif'];
	$ladate = date('dmYHis');
	$off_script = str_replace('PSEUDO',''.$mbre_premium.'',$off_script);
	$off_script = str_replace('alt="" title=""','alt="" title="" class="image"',$off_script);
	$off_url = str_replace('PSEUDO',''.$mbre_pseudo.'_'.$ladate.'',$off_url);

	// Meta Facebook
	$fb_url = 'http://www.borealeo.com/offres.html?off_id='.$off_id.'';
	$fb_image = $off_image300;
	$fb_description = $off_description;
	$fb_nom = $off_nom;
}

	if (isset($_SESSION['off_cat'])) {
		$off_cat = $_SESSION['off_cat'];
		//if ($off_cat != 'Auto') { $off_catSQL = 'AND categorie = "'.$off_cat.'"'; } else { $off_catSQL = ''; }
		if ($off_cat == 'name')
		{
			$off_catSQL = 'nom';
		}
else	if ($off_cat == 'date')
		{
			$off_catSQL = 'id DESC';
		}
else	if ($off_cat == 'gains')
		{
			$off_catSQL = 'toks DESC';
		}
else	if ($off_cat == 'Auto')
		{
			$off_catSQL = 'nom';
		}
	} else {
		$off_cat = 'Auto'; $off_catSQL = 'nom';
	}
	
	if (isset($_SESSION['off_pg'])) {
		$off_pg = $_SESSION['off_pg'];
	} else {
		$off_pg = '15';
	}
	
	if (!empty($_POST['trier']))
	{
		if ($_POST['off_cat'] == 'name')
		{
			$_SESSION['off_cat'] = $_POST['off_cat'];
			$off_cat = $_SESSION['off_cat'];
			$off_catSQL = 'nom';
		}
else	if ($_POST['off_cat'] == 'date')
		{
			$_SESSION['off_cat'] = $_POST['off_cat'];
			$off_cat = $_SESSION['off_cat'];
			$off_catSQL = 'id DESC';
		}
else	if ($_POST['off_cat'] == 'gains')
		{
			$_SESSION['off_cat'] = $_POST['off_cat'];
			$off_cat = $_SESSION['off_cat'];
			$off_catSQL = 'toks DESC';
		}
else	if ($_POST['off_cat'] == 'Auto')
		{
			$_SESSION['off_cat'] = $_POST['off_cat'];
			$off_cat = $_SESSION['off_cat'];
			$off_catSQL = 'nom';
		}

		$_SESSION['off_pg'] = $_POST['off_pg'];
		$off_pg = $_SESSION['off_pg'];
	}
?>
<?php include('./inc/top_global.php'); ?>

	<div id="c-offers">
		<div id="chart">
<?php
			if (empty($_GET['off_id']))
			{
					$ip = $_SERVER["REMOTE_ADDR"];
					$date = date('dmY');

					$counter = $pdo->query("SELECT COUNT(*) as 'nbr_entrees' FROM offres WHERE actif = 1 AND type = 1");
					$row = $counter->fetch(PDO::FETCH_OBJ);
					$nombreid2 = $pdo->query("SELECT COUNT(*) as 'nbr_entrees' FROM histo_ow WHERE pseudo = '".$mbre_pseudo."' AND ip = '".$ip."' AND etat != 'Refusé'");
					$resultatid2 = $nombreid2->fetchColumn();
					$nombreban = $pdo->query("SELECT COUNT(*) as 'nbr_entrees' FROM offres WHERE actif = 1 AND type = 1");
					$resultatban = $nombreban->fetchColumn();

					$messagesParPage = $off_pg;

					$retour_total = $pdo->query("SELECT COUNT(*) AS total FROM offres WHERE actif = 1 AND type = 1");
					$donnees_total = $retour_total->fetch();
					$total = $donnees_total['total'];
					$total = ($total - $resultatid2);
					$nombreDePages = ceil($total / $messagesParPage);

					if(isset($_GET['p'])) { $pageActuelle = intval($_GET['p']); if ($pageActuelle > $nombreDePages) { $pageActuelle = $nombreDePages; } } else { $pageActuelle = 1; }

					$premiereEntree = ($pageActuelle - 1) * $messagesParPage;
?>				
				<div class="title" style="float : none; margin-left : 0;">Mur des offres</div>
<?php if ($pageActuelle == 1) { ?>

				<div class="notice">
					<div class="notice_title">Notice importante</div>
					Il est important de remplir les formulaires avec des données correctes & cohérentes et de ne pas en abuser. Dans le cas de refus importants sur vos offres faites, votre compte sera restreint ! Certaines offres sont proposées sur d'autres sites, concurrents, les annonceurs ne prennent bien évidement qu'une seule offre faites par IP et par informations relatives au formulaire.
				</div>

<?php } ?>

					<form method="POST" style="margin-bottom : 10px;"><span class="custom-dropdown">
						<select name="off_cat" class="custom-dropdown__select" style="background-color : #1a9cd7; color : #FFF; min-width : 200px;" onchange="loadPage(this.value);">
							<option value="Auto"<?php if ($off_cat == 'Auto') { echo ' selected'; } ?>>Tri automatique</option>
							<option value="name"<?php if ($off_cat == 'name') { echo ' selected'; } ?>>Trier par Nom</option>
							<option value="gains"<?php if ($off_cat == 'gains') { echo ' selected'; } ?>>Trier par Gains</option>
							<option value="date"<?php if ($off_cat == 'date') { echo ' selected'; } ?>>Trier par Date d'ajout</option>
						</select>
					</span>
					<span class="custom-dropdown" style="margin-left : 5px;">
						<select name="off_pg" class="custom-dropdown__select" style="background-color : #1a9cd7; color : #FFF; min-width : 200px;" onchange="loadPage(this.value);">
							<option value="15"<?php if ($off_pg == 15) { echo ' selected'; } ?>>15 offres par pages</option>
							<option value="25"<?php if ($off_pg == 25) { echo ' selected'; } ?>>25 offres par pages</option>
							<option value="50"<?php if ($off_pg == 50) { echo ' selected'; } ?>>50 offres par pages</option>
						</select>
					</span>
					<input type="submit" name="trier" value="Actualiser" style="border : 0; cursor : pointer; margin-left : 5px; font-size : 12px; padding : 5px 6px 7px 6px; border-radius: 3px; background-color : #1a9cd7; color : #FFF;" /></form>

				<table width="100%" cellpadding="0" cellspacing="0" class="table_offers" style="margin-bottom : 10px;">
					<tr>
						<th align="left" valign="middle" <?php if (isset($_SESSION['pseudo'])) { ?>width="50%"<?php } else { ?>width="80%"<?php } ?>>Campagnes</th>
					<?php if (isset($_SESSION['pseudo'])) { ?>
						<th align="center" valign="middle" width="10%">Inscription</th>
						<th align="center" valign="middle" width="10%">% Coupe</th>
						<th align="center" valign="middle" width="10%">V. Directes</th>
					<?php } ?>
						<th align="center" valign="middle" width="10%">Pays</th>
						<th align="right" valign="middle" width="10%"></th>
					</tr>
<?php
					if ($row->nbr_entrees == 0)
					{
?>

<?php
					}
			else	if ($resultatban == $resultatid2)
					{
?>

<?php
					}
			else	if ($resultatban != $resultatid2)
					{
						$reponse = $pdo->query("SELECT * FROM offres WHERE actif = 1 AND type = 1 ORDER BY $off_catSQL LIMIT ".$premiereEntree.", ".$messagesParPage."");
						$i = 1;
						$all_offres = $reponse->fetchAll();
						foreach ($all_offres as $offre)
						{
							$id = $offre['idir'];
							$nombreid = $pdo->query("SELECT COUNT(*) as 'nbr_entrees' FROM histo_ow WHERE pseudo = '".$mbre_pseudo."' AND idt = '".addslashes($offre['nom'])."' AND ip = '".$ip."' AND etat != 'Refusé' AND date LIKE '".date('d/m/Y')."%%'");
							$resultatid = $nombreid->fetchColumn();
							
							$nombreidP = $pdo->query("SELECT COUNT(*) as 'nbr_entrees' FROM histo_ow WHERE pseudo = '".$mbre_pseudo."' AND idt = '".addslashes($offre['nom'])."' AND etat != 'Refusé' AND date LIKE '".date('d/m/Y')."%%'");
							$resultatidP = $nombreidP->fetchColumn();

							if ($resultatid == 1)
							{
								echo "";
							}
					else	if ($resultatidP >= 3)
							{
								echo "";
							}
							else
							{
								$remu = $offre['toks'];
								$pays = str_replace('FR','<img src="http://www.borealeo.com/images/01/FR.png" align="absmiddle" style="margin-right : 5px;" />',$offre['pays']);
								$pays = str_replace('BE','<img src="http://www.borealeo.com/images/01/BE.png" align="absmiddle" style="margin-right : 5px;" />',$pays);
								$pays = str_replace('CH','<img src="http://www.borealeo.com/images/01/CH.png" align="absmiddle" style="margin-right : 5px;" />',$pays);
								$pays = str_replace('NL','<img src="http://www.borealeo.com/images/01/NL.png" align="absmiddle" style="margin-right : 5px;" />',$pays);
								
								$offre_valid = $offre['valid'];
								$pourcent_coupe = ($remu * 10.50);
								$remu_clic = $offre['rev_clics'];
?>

								<tr>
									<td align="left" valign="middle"><?php echo $offre['nom']; ?></td>
								<?php if (isset($_SESSION['pseudo'])) { ?>
									<td align="center" valign="middle"><?php if ($remu != '0.00') { ?><?php echo displayMontant($remu,2,''); ?>€<?php } ?></td>
									<td align="center" valign="middle"><?php if ($remu != '0.00') { ?><?php echo displayMontant($pourcent_coupe,2,''); ?>%<?php } ?></td>
									<td align="center" valign="middle"><?php if ($offre_valid == 1) { ?><img src="./images/ico-divers/offres_on.png" style="height : 20px;" align="absmiddle" title="Validation sans délais d'attente" /><?php } else { ?><img src="./images/ico-divers/offres_no.png" style="height : 20px;" align="absmiddle" title="Validation avec délais d'attente" /><?php } ?></td>
								<?php } ?>
									<td align="center" valign="middle"><?php echo $pays; ?></td>
									<td align="right" valign="middle"><a href="?off_id=<?php echo $offre['id']; ?>"><div class="details">Voir l'offre</div></a></td>
								</tr>

								<?php
							}
							$i++;
						}
					}
					?>
				</table>


				<div class="page">Page :</div>
				<?php
				for($i = 1; $i <= $nombreDePages; $i++)
				{
					if($i == $pageActuelle)
					{
						echo '<div class="page_nb" style="background-color : #ebebeb; color : #444;">'.$i.'</div> ';
					}
					else
					{
						echo '<a href="?p='.$i.'"><div class="page_nb">'.$i.'</div></a> ';
					}
				}
			}
			else
			{
?>

			<div class="title" style="float : left; margin-left : 0;"><a href="offres.html">Mur des offres</a> > <?php echo $off_nom; ?></div>
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.borealeo.com/offres.html?off_id=<?php echo $off_id; ?>" target="_blank"><div class="facebook">Partager</div></a><div class="clear"></div>

<?php
			if ($off_actif == 1)
			{
?>
			<div class="gray">
				<?php
				if ($off_script == NULL)
				{
?>
					<a href="cpc.html?off_id=<?php echo $off_id; ?>" target="_blank"><img src="<?php echo $off_image300; ?>" class="image" /></a>

<?php
				} else {
?>
					<?php echo $off_script; ?>

<?php
				}
				?>
				<div class="description">
					<?php echo $off_description; ?>
				</div><div class="clear"></div>
			</div>
<?php	
			}
			else
			{
?>
			<div class="gray">
				Cette campagne n'est plus active !
			</div>
<?php
			}
?>
		</div>

		<div id="chart">
			<div class="title" style="float : none; margin-left : 0;">Offres aléatoires</div>

			<table width="100%" cellpadding="0" cellspacing="0" class="table_offers">
				<tr>
					<th align="left" valign="middle" <?php if (isset($_SESSION['pseudo'])) { ?>width="50%"<?php } else { ?>width="80%"<?php } ?>>Campagnes</th>
				<?php if (isset($_SESSION['pseudo'])) { ?>
					<th align="center" valign="middle" width="10%">Inscription</th>
					<th align="center" valign="middle" width="10%">% Coupe</th>
					<th align="center" valign="middle" width="10%">V. Directes</th>
					
				<?php } ?>
					<th align="center" valign="middle" width="10%">Pays</th>
					<th align="right" valign="middle" width="10%"></th>
				</tr>
				<?php
				$reponse = $pdo->query("SELECT * FROM offres WHERE actif = 1 AND type = 1 ORDER BY rand() LIMIT 0, 5");
				$i = 1;
				$reponse_all = $reponse->fetchAll(PDO::FETCH_ASSOC);
				foreach ($reponse_all as $donnees)
				{
					$remu = $donnees['toks'];
					$pays = str_replace('FR','<img src="http://www.gtpn1.com/images/01/FR.png" align="absmiddle" style="margin-right : 5px;" />',$donnees['pays']);
					$pays = str_replace('BE','<img src="http://www.gtpn1.com/images/01/BE.png" align="absmiddle" style="margin-right : 5px;" />',$pays);
					$pays = str_replace('CH','<img src="http://www.gtpn1.com/images/01/CH.png" align="absmiddle" style="margin-right : 5px;" />',$pays);
					$pays = str_replace('NL','<img src="http://www.gtpn1.com/images/01/NL.png" align="absmiddle" style="margin-right : 5px;" />',$pays);
					$offre_valid = $donnees['valid'];
					$pourcent_coupe = ($remu * 10.50);
					$remu_clic = $donnees['rev_clics'];
?>

					<tr>
						<td align="left" valign="middle"><?php echo $donnees['nom']; ?></td>
				<?php if (isset($_SESSION['pseudo'])) { ?>
						<td align="center" valign="middle"><?php if ($remu != '0.00') { ?><?php echo displayMontant($remu,2,''); ?>€<?php } ?></td>
						<td align="center" valign="middle"><?php if ($remu != '0.00') { ?><?php echo displayMontant($pourcent_coupe,2,''); ?>%<?php } ?></td>
						<td align="center" valign="middle"><?php if ($offre_valid == 1) { ?><img src="./images/ico-divers/offres_on.png" style="height : 20px;" align="absmiddle" title="Validation sans délais d'attente" /><?php } else { ?><img src="./images/ico-divers/offres_no.png" style="height : 20px;" align="absmiddle" title="Validation avec délais d'attente" /><?php } ?></td>
				<?php } ?>
						<td align="center" valign="middle"><?php echo $pays; ?></td>
						<td align="right" valign="middle"><a href="?off_id=<?php echo $donnees['id']; ?>"><div class="details">Voir l'offre</div></a></td>
					</tr>

					<?php
					$i++;
				}
				?>
			</table>

			<?php
			}
			?>

		</div>
	</div>

<?php include('./inc/footer.php'); ?>