<?php
session_start();

class sendData{

    public $data ='gd';
    public $nbr_data='gd';
    public $somme='gd';

    public function __construct($data,$nbr_data,$somme,$nom_virement){
        $this->data = $data;
        $this->nbr_data = $nbr_data;
        $this->somme = $somme;
        $this->nom_virement = $nom_virement;
    }

}

include('./requiert/bddConnect.php');
function displayMontant($montant, $chiffres_apres_virgule = 2, $symbole = "?") {
	return number_format($montant, $chiffres_apres_virgule, ',', ' ') . "" . $symbole;
}

if($_SESSION['id']){
	
    $sql = $pdo->query("SELECT * FROM users WHERE id = '" . addslashes($_SESSION['id']) . "'");
	$resultat = $sql->fetch(PDO::FETCH_ASSOC);
	$mbreId = addslashes(htmlentities($resultat['id']));
	$mbreHashId = addslashes(htmlentities($resultat['hashId']));
	$mbreEmail = addslashes(htmlentities($resultat['email']));
	$mbreMdp = addslashes(htmlentities($resultat['mdp']));
	$mbreNom = addslashes(html_entity_decode($resultat['nom']));
	$mbrePrenom = addslashes(html_entity_decode($resultat['prenom']));
	$mbreAdresse = addslashes(html_entity_decode($resultat['adresse']));
	$mbreVille = addslashes(html_entity_decode($resultat['ville']));
	$mbreCodePostal = addslashes(htmlentities($resultat['codePostal']));
	$mbrePays = addslashes(html_entity_decode($resultat['pays']));
	$country_code = addslashes(html_entity_decode($resultat['pays']));
	$mbreEuros = addslashes(html_entity_decode($resultat['euros']));
	$mbreEurosHisto = addslashes(html_entity_decode($resultat['euros_histo']));
	$mbreIdParrain = addslashes(htmlentities($resultat['idParrain']));
	$mbreLevel = addslashes(htmlentities($resultat['level']));
	$mbreBarrePrcnt = addslashes(htmlentities($resultat['barrePrcnt']));
	$mbreBanni = addslashes(htmlentities($resultat['banni']));
	$mbreBanniChat = addslashes(htmlentities($resultat['banni_chat']));
	$mbreIban = addslashes(htmlentities($resultat['iban']));
	$mbreSwift = addslashes(htmlentities($resultat['swift']));
	$mbrePaypal = addslashes(htmlentities($resultat['paypal']));
	$mbreSkrill = addslashes(htmlentities($resultat['skrill']));
	$mbreCodeVerif = addslashes(htmlentities($resultat['code_verif']));
	$mbrePremium = addslashes(htmlentities($resultat['premium']));
	$mbreDateLastCo = addslashes(htmlentities($resultat['datelastco']));
	$mbreTicketTombola = addslashes(htmlentities($resultat['ticketTombola']));
	$mbreIdentRecto = addslashes(htmlentities($resultat['ident_recto']));
	$mbreIdentVerso = addslashes(htmlentities($resultat['ident_verso']));
	$mbreIdentVerif = addslashes(htmlentities($resultat['ident_verif']));
	$mbreNewsletter = addslashes(htmlentities($resultat['news']));

	$histoOw = $pdo->query("SELECT * FROM gagnants WHERE idUser = '".$_SESSION['id']."' AND etat='Valid&eacute;' AND view_gagnant = 0 ");
	$all_histoOw = $histoOw->fetchAll(PDO::FETCH_OBJ);

        if(!empty($all_histoOw)){

		 	$p = $pdo->query("SELECT SUM(montant) AS somme FROM gagnants WHERE idUser = '".$_SESSION['id']."' AND etat='Valid&eacute;' AND view_gagnant=0 ");
		 	$h = $p->fetchAll(PDO::FETCH_OBJ)[0];
		 	$h->somme;

            echo json_encode(new sendData('1',$mbrePrenom,displayMontant($h->somme, 2, ' €'),$all_histoOw[0]->type));
        	 $pdo->exec("UPDATE gagnants SET view_gagnant = 1 WHERE idUser = '".$_SESSION['id']."' AND etat='Valid&eacute;'");
		
		}else{
            echo "null";
        }

}
                
                   
?>