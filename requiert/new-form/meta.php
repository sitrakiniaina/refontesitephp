<?php
      if(explode('/',$_SERVER['PHP_SELF'])[1] == 'index.php'){
      $b= urlencode('http://cashbackreduction.com/images/banner.svg');
?>

      <title> Cashbackreduction.com </title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="Cashbackreduction.com" />
      <meta property="og:description"   content="Simple et 100% gratuit, Cashbackreduction vous rembourse une partie de vos achats dans + de 1800 boutiques partenaires. C'est ça le cashback ! " />
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />

<?php
}else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'categorie.php'){
    $b= urlencode('http://cashbackreduction.com/images/banner.svg');

?>
    <title> Cashbackreduction.com </title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="Cashbackreduction.com" />
      <meta property="og:description"   content="Retrouver toute les marchands par categorie" />
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />

<?php
}else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'cashbackCategorie.php'){

    $tags = $pdo->query("SELECT * FROM cashbackengine_categories WHERE parent_id = 0 AND name = '".urldecode($_GET['c'])."'");
    $meta = $tags->fetch();
    $b= urlencode('http://cashbackreduction.com/images/banner.svg');

?>
    <title> <?=  $meta['meta_keywords'] ?> </title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content=" <?=  $meta['meta_keywords'] ?>" />
      <meta property="og:description"   content=" <?=  $meta['meta_description'] ?>" />
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />

<?php
}else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'cashbackView.php'){
        
    $sqlMissions = $pdo->query('SELECT * FROM cashbackengine_retailers WHERE retailer_id = "'.urldecode($_GET['id']).'"');
    $resultatMissions = $sqlMissions->fetch();
	$a = str_replace('./','',$resultatMissions['image']);
    $b= urlencode('http://cashbackreduction.com/'.$a);
    
?>
 <title><?= $resultatMissions['title'] ?></title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="<?= html_entity_decode($resultatMissions['seo_title']);  ?>" />
      <meta property="og:description"   content="<?= html_entity_decode($resultatMissions['meta_description']);  ?> " />
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
}else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'gagnants.php'){
    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
    
?>
 <title>gagnants</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="gagnants" />
      <meta property="og:description"   content="gagnants" />
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php

}else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'Connexion.php'){
    
    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
    
?>

      <title>cashbackreduction.com : Connexion</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : Connexion" />
      <meta property="og:description"   content="cashbackreduction.com : Connexion" />
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php

}else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'inscription.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com : inscription</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : inscription" />
      <meta property="og:description"   content="cashbackreduction.com : inscription" />
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
} else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'aide.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com : aide</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : aide" />
      <meta property="og:description"   content="Le cashback est un système simple et gratuit qui vous permet de cumuler de l'argent toute l'année grâce aux achats que vous effectuez sur l'une de nos 1800 boutiques partenaires. Le principe est simple : à chaque fois que vous faites un achat en passant par Poulpeo, nous recevons une commission. Ensuite, nous vous reversons jusqu'à 100% de cette commission. Dans la plupart des cas, le cashback se calcule sur le montant hors taxes et hors frais de port des commandes. " />
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
} else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'aide.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com : faq</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : faq" />
      <meta property="og:description"   content="faq"/>
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
}  else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'extension.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com : extension</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : extension" />
      <meta property="og:description"   content="Une extension Google est un petit plugin installé sur votre navigateur qui peut servir à divers usages comme prendre des captures d’écran ou télécharger des vidéos par exemple. "/>
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
}  else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'contact.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com : contact</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : contact" />
      <meta property="og:description"   content="contact. "/>
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
}  else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'cgu.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com : cgu</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : cgu" />
      <meta property="og:description"   content="cgu. "/>
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
}  else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'mentions-legales.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com : mentions legales</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : mention legales" />
      <meta property="og:description"   content="mentions legales. "/>
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
} else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'Charte-de-confidentialite.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com : Charte-de-confidentialite</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : Charte de confidentialite" />
      <meta property="og:description"   content=" Nous nous engageons à protéger vos informations personnelles, à être transparent sur les données que nous détenons et à vous donner le contrôle sur la façon dont nous les utilisons. L’objectif de notre politique de confidentialité    . "/>
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
}else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'politique-de-cookies.php'){

   $b= urlencode('http://cashbackreduction.com/images/banner.svg');
     
?>
      <title>cashbackreduction.com :  politique de cookies</title>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="cashbackreduction.com : politique-de-cookies" />
      <meta property="og:description"   content="  Les cookies ne permettent pas de vous identifier personnellement mais ils enregistrent des informations relativent à votre navigation et à votre comportement sur iGraal. Nous pouvons ensuite y accéder lors de vos navigations ultérieures . "/>
      <meta property="og:image"         content="<?= $b ?>" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
      <meta property="og:image:width"	content="1200" />
      <meta property="og:image:height"	content="630" />
	
<?php
} else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'MonCompte.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
      
 ?>
       <title>cashbackreduction.com :  MonCompte</title>
       <meta property="og:type"          content="website" />
       <meta property="og:title"         content="cashbackreduction.com : MonCompte" />
       <meta property="og:description"   content="MonCompte"/>
       <meta property="og:image"         content="<?= $b ?>" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
     
 <?php
 } else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'messagerie.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
      
 ?>
       <title>cashbackreduction.com :  messagerie</title>
       <meta property="og:type"          content="website" />
       <meta property="og:title"         content="cashbackreduction.com : messagerie" />
       <meta property="og:description"   content="messagerie"/>
       <meta property="og:image"         content="<?= $b ?>" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
     
 <?php
 } else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'chatroom.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
      
 ?>
       <title>cashbackreduction.com :  chatroom</title>
       <meta property="og:type"          content="website" />
       <meta property="og:title"         content="cashbackreduction.com : chatroom" />
       <meta property="og:description"   content="chatroom"/>
       <meta property="og:image"         content="<?= $b ?>" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
     
 <?php
 } else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'infos.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
      
 ?>
       <title>cashbackreduction.com :  infos</title>
       <meta property="og:type"          content="website" />
       <meta property="og:title"         content="cashbackreduction.com : infos" />
       <meta property="og:description"   content="infos"/>
       <meta property="og:image"         content="<?= $b ?>" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
     
 <?php
 } else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'parrainage.php'){

    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
      
 ?>
       <title>cashbackreduction.com :  parrainage</title>
       <meta property="og:type"          content="website" />
       <meta property="og:title"         content=" Vous souhaitez inviter vos ami(e)s sur Multi-cadeaux et gagner plus d'argent ? Récupérez votre lien de parrainage ci-dessous et partagez-le un maximum. Chaque personne qui s'inscrit via votre lien devient automatiquement votre filleul et vous devenez son parrain. A chaque commande effectuée, vous toucherez 15% du montant de leur commande. " />
       <meta property="og:description"   content="parrainage"/>
       <meta property="og:image"         content="<?= $b ?>" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
     
 <?php
 } else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'mes-commandes.php'){
   $b= urlencode('http://cashbackreduction.com/images/banner.svg');
 ?>
       <title>cashbackreduction.com : mes commandes</title>
       <meta property="og:type"          content="website" />
       <meta property="og:title"         content="mes commandes" />
       <meta property="og:description"   content="mes commandes"/>
       <meta property="og:image"         content="<?= $b ?>" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
       <meta property="og:image:width"	content="1200" />
       <meta property="og:image:height"	content="630" />
     
 <?php
 }  else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'mes-participations.php'){
    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
  ?>
        <title>cashbackreduction.com : mes participations</title>
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="mes participations" />
        <meta property="og:description"   content="mes participations"/>
        <meta property="og:image"         content="<?= $b ?>" />
        <meta property="og:image:width"	content="1200" />
        <meta property="og:image:height"	content="630" />
        <meta property="og:image:width"	content="1200" />
        <meta property="og:image:height"	content="630" />
      
  <?php
  }   else if(explode('/',$_SERVER['PHP_SELF'])[1] == 'livredor.php'){
    $b= urlencode('http://cashbackreduction.com/images/banner.svg');
  ?>
        <title>cashbackreduction.com : livredor</title>
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="livredor" />
        <meta property="og:description"   content="livredor"/>
        <meta property="og:image"         content="<?= $b ?>" />
        <meta property="og:image:width"	content="1200" />
        <meta property="og:image:height"	content="630" />
        <meta property="og:image:width"	content="1200" />
        <meta property="og:image:height"	content="630" />
      
  <?php
  } 
?>