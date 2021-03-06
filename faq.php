<?php
include('./requiert/new-form/header.php');
$meta_title = 'cashbackreduction.com : Questions fréquentes';
$meta_description = '';
$sqlPage = $pdo->query("SELECT * FROM pages WHERE id = 1");
$resultatPage = $sqlPage->fetch(PDO::FETCH_ASSOC);
$namePage = addslashes(htmlentities($resultatPage['nom']));
$descriptionPage = nl2br(htmlentities($resultatPage['contenu']));
?>
 
 <div class='cashback_view'>
    <div class='height-30-wave'>
    <h1 class="text-center text-white  title_h1">
      Questions Frequente
    </h1>
    </div>
</div>
            <div class="row container-top">
    
         <div class="container">
             
            <div class="row">
               <!-- Main Content -->
                     <!-- Basics Accordion -->
                     <div id="basicsAccordion" style='width:100%'>
                        <!-- Card -->
                        <?php
                            $x = "SELECT * FROM faq ";
                            $y = $pdo->query($x);
                            $z = $y->fetchAll(PDO::FETCH_OBJ);
                        ?>

                        <?php foreach ($z as  $a) : ?> 
                            <div 
                            style='width:100%' 
                            id="basicsHeadingOne"
                            class="box border rounded bg-white mb-2">
                                <h5 class="mb-0">
                                    <button 
                                         class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed" 
                                         data-toggle="collapse" data-target="#basics<?= $a->id ?>" 
                                         aria-expanded="false" 
                                         aria-controls="basicsCollapseOne">
                                         <?= $a->question ?> 
                                        <span class="card-btn-arrow"><span class="icofont-rounded-down"></span></span>
                                    </button>
                                </h5>
                                                </div>

                                                <div id="basics<?= $a->id ?>"
                                                 class="collapse box border rounded bg-white mb-2" 
                                                 aria-labelledby="basicsHeadingOne" 
                                                 data-parent="#basics<?= $a->id ?>">
                                                    <div class="card-body border-top p-3 text-muted">
                                                        <?= htmlspecialchars_decode($a->reponse); ?>
                                                    </div>
                                                    </div>
                        <?php endforeach; ?>

                        </div>
                     
                        <!-- End Card -->
                     </div>
                     <!-- End Basics Accordion -->
                  </div>
            </div>
         </div>
      </div>
<?php 
    include('./requiert/new-form/footer.php');
?>
 