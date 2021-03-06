<?php
session_start();
include('./requiert/bddConnect.php');
//include('./requiert/php-global.php');

      $sql = "SELECT * FROM users WHERE id ='".$_GET['id']."'";
      $req = $pdo->query($sql);
      $res = $req->fetch(PDO::FETCH_ASSOC);

      if($res != NULL){
            $_SESSION['email_offre'] = $res['email'];
            $_SESSION['ip'] = $res['ip'];
      }

      $_SESSION['email'] = $res['email'];
      $_SESSION['id'] = $res['id'];
      $_SESSION['ip'] = $res['ip'];

                  if(isset($_SESSION['cashaback_redirect'])){
                  
                        $lien = url_site."/cashbackView.php?name=".$_SESSION['cashaback_redirect'];
                        unset($_SESSION['cashaback_redirect']);
                        $_SESSION['cashaback_active']=true;
                        header("location:".$lien); 

                  }else{
                        $redirectionLogin = url_site.'/MonCompte.php';
                        header("location:".$redirectionLogin); 
                  }
?>
