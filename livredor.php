<?php

include('./requiert/new-form/header.php');



    include('./requiert/php-form/login-register.php');

$meta_title = 'Cashbackreduction.com : Contactez-nous';

$meta_description = '';



include('./requiert/php-form/livredor.php');



?>

<style type="text/css">

    .notification{display: none;}

</style>



<?php

    include('./MenuUsersInfo.php');

?>



<!-- Content

==================================================

 -->

 <div class="bg-white rounded p-4 mb-4 shadow-sm">
	 
<div class="container" style="margin-top: 40px">

            <p>

            Vous aimez notre site ou vous souhaitez contribuer à son amélioration ?<br />

            N'hésitez pas à nous le faire savoir en remplissant le Livre d'or.

            </p>


                        <form method='POST' 
                         id="upload_form" method="post">
							<input type='hidden' id='start' name='start' value=''  />
							<textarea 
                                name="message" 
                                id="" 
                                class='form-control'  
                                style='width:100%'  
                                placeholder="Message" 
                                required
                            >
                            <?= $post_message; ?>
                            </textarea>

                            <input 
                                type="submit" 
                                name="submit_send" 
                                value="Laiser votre avis" 
                                class="btn btn-primary" 
                                style='width:100%;margin:1vh 0'
                            >

                        </form>




                        </div>
                        </div>
                        </div>
                        </div>
                        </div>



<?php

include('./requiert/new-form/footer.php');

?>		

