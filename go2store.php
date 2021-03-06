<?php
/*******************************************************************\
 * CashbackEngine v3.0
 * http://www.CashbackEngine.net
 *
  * Copyright (c) 2010-2017 CashbackEngine Software. All rights reserved.
 * ------------ CashbackEngine IS NOT FREE SOFTWARE --------------
\*******************************************************************/

	session_start();
	require_once("./administration/cashback/inc/config.inc.php");
    include('./requiert/php-global.php');

	$userid	= (int)$_SESSION['id'];

	$query = "SELECT * FROM cashbackengine_retailers WHERE 
	retailer_id='".$_GET['id']."' WHERE end_date > NOW()  ";

	
$query = "SELECT * FROM cashbackengine_retailers WHERE 
retailer_id='".$_GET['id']."' AND end_date > NOW() AND status='active'";
	$req = $pdo->query($query);
	$result  = $req->fetch(PDO::FETCH_OBJ);
	$click_ip=$_SERVER['REMOTE_ADDR'];

	if($req->rowCount() > 0){

		if (strstr($result->url, "{USERID}")){

			$goto = str_replace("{USERID}", $userid, $result->url);
		}else{
			$goto =$result->url;
		}
			// update retailer visits
			smart_mysql_query("UPDATE 
			cashbackengine_retailers 
			SET 
			visits=visits+1 
			WHERE 
			retailer_id='".$_GET['id']."' 
			LIMIT 1");
			// save click info //
			$click_ref = GenerateRandString(10, "0123456789");

            if (strstr($result->cashback, '%')){
				smart_mysql_query("INSERT INTO 
				cashbackengine_clickhistory SET 
				click_ref='$click_ref', 
				user_id='$userid', 
				retailer_id='$result->retailer_id', 
				retailer='".$result->title."', 
				click_pourcentage='".$result->cashback."', 
				click_ip='$click_ip', 
				added=NOW()");
			}else if(strstr($result->cashback, '&euro;')){
				$cashback = str_replace('&euro;','',$result->cashback);
			//	$a=str_replace('€','',$cashback);
				smart_mysql_query("INSERT INTO 
				cashbackengine_cashabck SET 
				histo_retailler_id='".$result->retailer_id."', 
				histo_retailler_id_user='$userid', 
				histo_retailler_ip='$click_ip', 
				gains='".$cashback."',
				date_time=NOW()
				 ");
			}

	 ?>

            <!DOCTYPE html>
				<html lang="en-us">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1.0" />
					<link rel="stylesheet" href="assets/css/style.css">  
					<script src="script/js/sweetalert.min.js"></script>
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
					<title>Cashback</title>
					<meta http-equiv="refresh" content="3; url=<?php echo $goto; ?>" />
					<link href="./administration/cashback/css/bootstrap.min.css" rel="stylesheet" />
				</head>         

					<div class="redirect_cashback" >
                            <br/>
							<br/>
							<br/>
							<center>
									<img class="footer-logo" src="images/logo.png" alt="">
							<br/>
							<br/>
							<br/>
                            <b>Redirection en cours de traitement ...<br/>
										<?php echo str_replace("%url%",
										    $website_url,
										    '<a href="%url%">Cliquez ici </a> si vous n\'êtes pas redirigé dans 5 secondes .'); 
                                        ?>
							</b>	 
							</b>
							<br/>
							<br/>
							<br/>
								<img src="./images/open_cashback.gif" style='width:15vh' />
							</center>
					</div>
				</body>
				</html>
		<?php

		}else{

        ?>
				<!DOCTYPE html>
				<html lang="en-us">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1.0" />
					<link rel="stylesheet" href="assets/css/style.css">  
					<script src="script/js/sweetalert.min.js"></script>
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
					<title>Cashback</title>
					<link href="./administration/cashback/css/bootstrap.min.css" rel="stylesheet" />
				</head>         
					<div class="redirect_cashback">
					<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<center>
								<img src="./images/triste.png" style='width:15vh' />
								<br/>
							<br/>
							<br/>
							<b>Ce produit n'est plus disponible <br/>
							</b>
							<br/>
							<br/>
						 	<button style='border:none;padding:1vh' onClick='window.close()'>
								 Ferme la fenetre
		                    </button>
							</center>

					</div>
				</body>
				</html>
			<?php
		}
		 
	 
?>

