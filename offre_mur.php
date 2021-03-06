<?php
if (headers_sent()) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    var_dump($_SESSION);
    exit;
} else{
    
    include('./requiert/new-form/header.php');
    $meta_title = 'cashbackreduction.com : Les offerwalls';
    $meta_description = '';
    
    include('./MenuUsersInfo.php');
    
    ?>
        <!-- SECTION HEADLINE -->
    <?php if (isset($_GET['ow'])) : ?> 
    
    <?php 
    
        $nameOfferwall = htmlentities($_GET['ow']);
        $hashId = $mbreHashId . '-' . date('YmdH');
    
    ?>
    
    <div class='offerwall_container'>
    
        <div class='row'>
    
        <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("offerdaddy")'>
    
            <center>
    
                <img src='./images/offerwall/11.png'/>
    
            </center>
    
            </div>
    
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("adgem")'>
    
            <center>
        
                <img src='./images/offerwall/2.png'/>
    
            </center>
    
            </div>
    
                <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("adworkmedia")'>
    
            <center>
    
                <img src='./images/offerwall/3.png'/>
    
            </center>
    
            </div>
    
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("ayetstudios")'>
                <center>
                    <img src='./images/offerwall/4.png'/>
                </center>
            </div>
                
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("cpxresearch")'>
                <center>
                    <img src='./images/offerwall/9.png'/>
                </center>
            </div>
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("kiwiwall")'>
                <center>
                    <img src='./images/offerwall/6.png'/>
                </center>
            </div>
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("theoremreach")'>
                <center>
                    <img src='./images/offerwall/13.png'/>
                </center>
            </div>
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("offertoro")'>
                <center>
                    <img src='./images/offerwall/7.png'/>
                </center>
            </div>
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("wannads")'>
                <center>
                    <img src='./images/offerwall/8.png'/>
                </center>
            </div>
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("enlignesurvey")'>
                <center>
                    <img src='./images/offerwall/10.png'/>
                </center>
            </div>
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("mediumpath")'>
                <center>
                    <img src='./images/offerwall/12.png'/>
                </center>
            </div>
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("adscendmedia")'>
                <center>
                    <img src='./images/offerwall/1.png'/>
                </center>
            </div>
            <div class='offerwall-view-all offerwall'  onClick='redirectOfferwall("cpnetwork")'>
                <center>
                    <img src='./images/offerwall/1.png'/>
                </center>
            </div>
            

            
                    <?php if ($_POST['ow'] == 'offertoro'): ?>
                        <iframe src="https://www.offertoro.com/ifr/show/19324/<?= $hashId; ?>/7155" frameborder="0" width="100%" height="700px"></iframe>
                    <?php elseif ($_GET['ow'] == 'adscendmedia'): ?>
                        <iframe src="https://adscendmedia.com/adwall/publisher/115290/new/profile/13208?subid1=<?= $hashId; ?>" frameborder="0" width="100%" height="700px"></iframe>
                    <?php elseif ($_GET['ow'] == 'kiwiwall'): ?>
                        <iframe src="https://www.kiwiwall.com/wall/3nuPw2iDtKrv9jNhGTWyAqRC48F2GBkc/<?= $hashId; ?>" frameborder="0" width="100%" height="700px"></iframe>
                    <?php elseif ($_GET['ow'] == 'wannads'): ?>
                        <iframe src="https://wall.wannads.com/wall?apiKey=5eadcb6d54edb415445735&userId=<?= $hashId; ?>" frameborder="0" width="100%" height="700px"></iframe>
                    <?php elseif ($_GET['ow'] == 'adworkmedia') : ?>
                        <iframe src="http://lockwall.xyz/wall/5lH/<?= $hashId; ?>" frameborder="0" width="100%" height="700px"></iframe>
                    <?php elseif ($_GET['ow'] == 'enlignesurvey'): ?>
                        <iframe src="https://enlignesurvey.com/public/surveys/index/wesg96bop2/<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                    <?php elseif ($_GET['ow'] == 'personaly'): ?>
                        <iframe src="https://persona.ly/widget/?appid=b33a9b49ac0c1c46d985c6f610831713&userid=<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                    <?php elseif ($_GET['ow'] == 'offerdaddy'): ?>
                        <iframe src="https://www.offerdaddy.com/survey_widget/w/86395/<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                    <?php elseif ($_GET['ow'] == 'theoremreach'): ?>
                        <iframe src="https://theoremreach.com/respondent_entry/direct?api_key=a59f679580cb7452b3497028f8a2&user_id=<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                    <?php elseif ($_GET['ow'] == 'cpxresearch'): ?>
                        <iframe src="https://wall.cpx-research.com/index.php?app_id=6176&ext_user_id=<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                    <?php elseif ($_GET['ow'] == 'ayetstudios'): ?>
                        <iframe src="https://www.ayetstudios.com/offers/web_offerwall/2365/default_adslot?external_identifier=<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                    <?php elseif ($_GET['ow'] == 'adgem'): ?>
                        <iframe src="https://api.adgem.com/v1/wall?appid=3083&playerid=<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                    <?php elseif ($_GET['ow'] == 'mediumpath'): ?>
                        <iframe src="https://api.adgem.com/v1/wall?appid=3083&playerid=<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                   
                    <?php elseif ($_GET['ow'] == 'adscendmedia'): ?>
                        <iframe src="https://asmwall.com/adwall/publisher/115290/profile/17652?subid1=<?= $hashId; ?>" width="100%" height="700px" frameborder="0" scrolling="auto"></iframe>
                    <?php elseif ($_GET['ow'] == 'cpnetwork'): ?>
                        <iframe src="http://localhost/regie/offerwall_content.php?uid=6&iduser=<?= $hashId; ?>" frameborder="0" width="100%" height="700px"></iframe>
                    <?php endif; ?>  
            </div>
            </div>
            </div>
            </div>
            </div>
                    <?php else: ?> 
    
                                <div class='hero_paraignage '>
    
                                        <div class="bg-white rounded p-4 mb-4 shadow-sm boder_left" >

                                                        <h1>
                                                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                                            OFFRIR DES MURS
                                                        </h1> 
                                                        <p>
                                                        Parcourez nos offres en ligne et soyez payé pour effectuer des tâches afin de gagner des points GPT. Essayez autant de types d'offres différents que possible pour voir ce que vous pouvez accomplir chaque jour pendant votre temps libre.
                                                        </p>
                                        </div>
    
                                </div>
                                <div class="row">

    
    
                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("Theoremreach")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/13.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">Theoremreach</h4>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("Adgem")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/2.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">Adgem</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("Adworkmedia")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/3.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">Adworkmedia</h4>
                                                </div>
                                            </div>
                                        </div>

    
                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("ayetstudios")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/4.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">ayetstudios</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("offerdaddy")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/11.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">offerdaddy</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("kiwiwall")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/6.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">kiwiwall</h4>
                                                </div>
                                            </div>
                                        </div>
                         
                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("offertoro")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/7.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">offertoro</h4>
                                                </div>
                                            </div>
                                        </div>

    
                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("wannads")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/8.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">wannads</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("mediumpath")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/12.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">mediumpath</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("enlignesurvey")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/10.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">enlignesurvey</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("adscendmedia")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/1.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">adscendmedia</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" onClick='redirectOfferwall("cpnetwork")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/9.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">cpnetwork</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12 mb-4">
                                            <div class="offerwall bg-white p-4 shadow-sm text-center h-100 border-radius" 
                                            onClick='redirectOfferwall("cpxresearch")'>
                                                <div class="all-coupon">
                                                <img   
                                                src='./images/offerwall/9.png'
                                                alt="Generic placeholder image">
                                                <h4 class="mt-1">cpxresearch</h4>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
    
                                </div>
    
                             </div>

                            
    
                            <?php endif; ?>
    
            </div>
    
        </section>
    
    <?php
    
    include('./requiert/new-form/footer.php'); 
    
    ?>
    
    <script type="text/javascript">
    
        $( window ).on( "load", function() {
    
            $('.dashboard-nav ul li').removeClass('active');
    
            $('.dashboard-nav ul li.li-offerwall').addClass('active');
    
            $('.dashboard-nav-inner').scrollTop(500);
    
        });
    
    </script>
<?php
}
?>