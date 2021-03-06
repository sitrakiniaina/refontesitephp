<?php
	// Début : Inscription
	if (!empty($_POST['email'])): $post_email = ucfirst(addslashes(htmlentities($_POST['email']))); else: $post_email = null; endif;
	if (!empty($_POST['sujet'])): $post_sujet = ucfirst($_POST['sujet']); else: $post_sujet = null; endif;
	if (!empty($_POST['message'])): $post_message = strtolower(addslashes(htmlentities($_POST['message']))); else: $post_message = null; endif;
	
	if (!empty($_POST["submit_send"])) {
	 
		if (!empty($_POST["email"]) && 
			!empty($_POST["sujet"]) && 
			!empty($_POST["message"])) {
			if (preg_match("!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!", $post_email)) {

					$reponsConfirm = 'Votre message nous a bien été envoyé. Nous vous répondrons dans les 24H maximum.';
					$button = '"Fermer"';
 
					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					$headers .= "From: Message <webmaster@cashbackreduction.com>\n";
					$headers .= "Reply-To: No Reply <webmaster@cashbackreduction.com>\n";
				
					$messageM = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
								<html xmlns="http://www.w3.org/1999/xhtml">
									<head>
											<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
											<style type="text/css" media="screen">
												body { margin: 0; margin: 10px; color : #444; padding: 0; font-size: 13px; font-family: helvetica, arial, sans-serif; background-color: #f5f5f5; }
												a { color : #444; text-decoration : none; }
												a:hover { text-decoration : underline; }
											</style>
										</head>
									<body> 
										<div style="font-family:arial;font-size:12px;">
											'.nl2br(stripslashes($post_message)).'
										</div>
									</body>
									
								</html>';
										
					mail('webmaster@cashbackreduction.com', ''.utf8_encode(nom_site).' : '.$post_sujet.'', $messageM, $headers);
									
					$post_email = null;
					$post_sujet = null;
					$post_message = null;
			}
			else {
				$reponsError = 'L\'adresse e-mail entrée est incorrecte.';
				$button = '"Fermer"';
			}
		}
		else {
			$reponsError = 'Tout les champs sont requis .';
			$button = '"Fermer"';
		}
	}
	// Fin : Inscription

	 
?>