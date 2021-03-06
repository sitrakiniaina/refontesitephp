<?php
session_start();

class sendData{

    public $data ='gd';
    public $nbr_data='gd';

    public function __construct($data,$nbr_data){
        $this->data = $data;
        $this->nbr_data = $nbr_data;
    }

}

include('./requiert/bddConnect.php');


if($_COOKIE['id_user']){
        $sql = $pdo->query("SELECT * FROM users WHERE id = '" . addslashes($_COOKIE['id_user']) . "'");
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
        
        $histoOw = $pdo->query("SELECT * FROM histo_offers WHERE idUser = '".$mbreHashId."' AND offerwall != 'Mission' AND etat='Valid&eacute;' AND vu = 0 ORDER BY STR_TO_DATE(date,'%d/%m/%Y à %H:%i:%s')");
        $all_histoOw = $histoOw->fetchAll(PDO::FETCH_ASSOC);
        if(count($all_histoOw) > 0){
                echo json_encode(new sendData('1',count($all_histoOw)));
                $pdo->exec("UPDATE histo_offers SET vu = 1 WHERE idUser = '".$mbreHashId."' AND etat='Valid&eacute;' ");
        }else{
                echo json_encode(new sendData('2',$_COOKIE['id_user']));
        }
}
                
                   
?>