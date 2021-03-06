<?php	
	$meta_title = 'Multi-Cadeaux.com : Le Chatroom';
	$meta_description = '';
    include('./requiert/new-form/header.php');
	include('./MenuUsersInfo.php');
	echo '<div>
		  <div id="Chat_room">';
		if ($mbreLevel > 1 OR $mbreEurosHisto >= '0.30') {
			?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
						$("tr").each(function() {
							var tab = $(this).attr("data-hl");
							//3ème partie == 2 car cela commence à 0
							//alert("Numéro compris dans l'ID : "+tab);
						});
						// Lorsque je soumets le formulaire
						$('#form').on('submit', function(e) {
							e.preventDefault(); 
							var message = $('#msg').val();
			
							if(message != ""){ // on vérifie que les variables ne sont pas vides
								   $.ajax({
									url : "chat-envois.php", // on donne l'URL du fichier de traitement
									type : "POST", // la requête est de type POST
									data : {message : message, submit : 'Envoyer mon message'}, // et on envoie nos données
									beforeSend:function(){
										$('#message').html('<center><img src="./images/loader.gif" style="width:10vh;height:7vh"/><center>');
									},
									success:function(data){
										$('input#msg').val('');
										if (data != 'ok') 
										{
											$('#message').addClass('alert-danger').show();
											$('#message').html('<button type="button" class="close" data-dismiss="alert">×</button>\
												<strong>Erreur !</strong> Le message n\'a pas été envoyé ... > ' + data);
											setTimeout(function() {
												$('#message').removeClass('alert-danger').hide();
											}, 6000);
										}
									} 
									});
							}
						});
					});
					</script>
					
					<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
					<script>
					<?php if ($mbreNom != '' && $mbrePrenom != '') { ?>$(function(){

						$('#refreshco').load('chat-ajax.php?a=refreshco');
			
						setInterval(function(){
							$('#refreshco').load('chat-ajax.php?a=refreshco');
						}, 10000);
					});<?php } ?>
					$(function(){
					
						setInterval(function(){
							$('#refreshchat').load('chat-ajax.php?a=refreshchat');
							
						}, 1000);
					});
					</script>
			
			<?php
					if (isset($_GET['del'])) { $del = $_GET['del']; }
			
					if (!empty($del) && $mbre_admin != '0')
					{
						$pdo->exec("DELETE FROM tchat WHERE id = '".$_GET['id']."' AND time = '".$_GET['time']."' AND idUser = '".$_GET['idUser']."'");
					}
			?>	
			
					<section>
						<div class='container'>
						<div class="row">
						<div class="col-md-8 bg-white rounded p-4 mb-4 shadow-sm">
						<h2
						 style='margin:0;padding:0'>
						 <span class="glyphicon glyphicon-comment" 
						 aria-hidden="true"></span>
						 Le Chatroom</h2>	

								<div class='chat_content'>
									<div id='refreshchat_container'>
										<div id="refreshchat">
										<br/>
										<br/>
										<br/>
										<br/>
										<br/>
										<br/>
										<br/>
										<br/>
										<center>
											<img src="./images/loader.gif" style="width:10vh;height:7vh"/>
										<center>
										</div>
									</div>
								</div>
			
									<?php if ($mbreNom != '' && $mbrePrenom != '') { ?><form id="form">
										<input type="hidden" id="idUser" value="<?php echo $mbreHashId; ?>" />
										<input type="text" id="msg" class='form-control' name="message" autocomplete="off" placeholder="Entrez votre message ici" style='width:75%;display:inline-table;'  />
										<input type="submit" name="submit" class='btn btn-primary' style='display:inline-table;width:18%;border-radius:0;padding:1vh' value="Envoyer"/> 
									<br/>
										<p style='text-align-center'>La publicité est strictement interdite sur le Chatroom.</p>
									
									</form>
									
									<?php } ?>
									<br/>
									<br/>
								</div>
								<div class='col-md-3 bg-white rounded p-4 mb-4 shadow-sm' style='margin:0vh 1vh'>
									<strong>en ligne :</strong> 
									<div id="refreshco">
										<center>
											<img src="./images/loader.gif" style="width:10vh;height:7vh"/>
										<center>
									</div>
									</div>
									</div>
							
							</div>
						</div></div>
					</section>
					
			<?php
				} else {
			?>
					<section class="bg-light-grey absolute-section-1 margin-base">
						<div class="m-auto content p-40-20 container"><div class="row">
					<script type="text/javascript">
						swal({
							text: "Oups, vous n'avez rien a faire ici !",
							button: false,
							icon: "error",
							closeOnClickOutside: false,
							closeOnEsc: false,
						})
						setTimeout("window.location='<?= url_site; ?>'",3000);
					</script>
						</div>
						</div>
					</section>
			
			<?php
				}
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		include('./requiert/new-form/footer.php');
?>