<?php
	include('./requiert/bddConnect.php');
    include('./requiert/new-form/header.php');

        require_once("./administration/cashback/inc/config.inc.php");
        require_once("./administration/cashback/inc/functions.inc.php");

    function nbr_coupons($a){
        if($a > 0){
            echo '<div style="color:green">'.$a.'<span class="glyphicon glyphicon-tag" aria-hidden="true"></span></div>';
        }else{
            echo '<div style="color:#aaa">'.$a.'<span class="glyphicon glyphicon-tag" aria-hidden="true"></span></div>';
        }
    }

?>
 <section class="store_banner" 	style='
						background-image:url("./images/bg_u.svg");
					    background-repeat: no-repeat;
                        background-size: cover;	
                        margin:0;
                        padding:0
'>

<h2 class='title_h1'>
Resultat du recherche
</h2>
 </section>
 
 
                        <?php
                            $sql = "SELECT * FROM cashbackengine_retailers WHERE title LIKE '%".$_POST["find"]."%'";
                            $req = $pdo->query($sql);
                            $total = $req->fetchAll(PDO::FETCH_ASSOC);

                            if(count($total) > 0){
                        ?>
<div class='container'><b><?= count($total) ?></b> Resultat du recherche :" <b><?= $_POST['find'] ?></b> "</div></p>
    <div class='container'>

                            <?php foreach ($total as  $categories) : ?> 
                                <div class='view-cashback 
                                            border-radius 
                                            bg-white shadow-sm
                                           '>
                                    <a href='cashbackView.php?id=<?= urlencode($categories['retailer_id']); ?>'>
            						<img src='<?= $categories['image']; ?>'/>
                                    <div class='name' style='display:inline-table'>
                                        <b  class='title_h1'><?=  $categories['title']; ?></b>
                                    </div>
                                    <div class='cashback-view-res'  style='display:inline-table'>
                                        <ul>
                                          
                                            <?php
                                                    if($categories['old_cashback'] != ""){
                                            ?>
                                                <li style='color:dodgerblue'>
                                                 <strike>   <?=  $categories['old_cashback']; ?> </strike>
                                                </li>
                                            <?php
                                                    }
                                            ?>
                                            <?php
                                                    if($categories['cashback'] != ""){
                                            ?>
                                                <li style='color:dodgerblue'>
                                                    <?=  $categories['cashback']; ?> cashback
                                                </li>
                                            <?php
                                                    }
                                            ?>
                                            <li>
                                                    <?=  nbr_coupons(GetStoreCouponsTotal($categories['retailer_id'])); ?>
                                            </li>
                                        </ul>
                                    </div>
                            </a>
                            </div>
                            <?php endforeach; ?>
                            <?php 
                            }else{
                                echo "<h1 style='text-align:center'>aucun resultat</h1>";
                            }

                            ?>
                        </div>
                        </div>

                        </div>
                        </div>
<?php 
	include('./requiert/new-form/footer.php');
?>
