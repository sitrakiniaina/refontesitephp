<?php
session_start();

include('./requiert/php-global.php');

if($_SESSION['id']){
        $histoOw = $pdo->query("SELECT * FROM histo_offers WHERE idUser = '".$mbreHashId."' AND etat='Valid&eacute;'  ORDER BY STR_TO_DATE(date,'%d/%m/%Y à %H:%i:%s') DESC LIMIT 6");
    //    $pdo->exec("UPDATE histo_offers SET vu_header = 1 WHERE idUser = '".$mbreHashId."'");
        $all_histoOw = $histoOw->fetchAll(PDO::FETCH_ASSOC);
        if(count($all_histoOw) > 0){
                
        $i=0;

        foreach ($all_histoOw as $dones_histoOw)
        {
            $idtOw = htmlentities($dones_histoOw['idt']);
            $remunerationOw = htmlentities($dones_histoOw['remuneration']);
            $dateOw = htmlentities($dones_histoOw['date']);
?>
                <div class='row' style='padding:1vh'>
                        <div class='col-md-2'>
                        <span class="glyphicon glyphicon-thumbs-up" style='width:100%;color:green;font-size:5vh;margin:2vh 1vh' aria-hidden="true"></span>
                        </div>
                        <div class='col-md-6'>
                                <p style='font-size:1.5vh'><?= html_entity_decode(utf8_decode($idtOw)); ?></p> 
                                <h7 class='text-center'>  Le <?= $dateOw; ?> : </h7>

                        </div>
                        <div class='col-md-4'>
                                <h3 class='text-primary text-center' style='margin:2vh 1vh'><?= displayMontant($remunerationOw, 6, ' €'); ?>)</h3>
                        </div>
                        <br/>   
                </div>
<?php
        }                
?>

<?php
        }else{
                echo "<h1 style='text-align:center;font-size:2vh;color:#aaa;padding:5vh'>Aucune notification pour le moment</h1>";
        } 
        }                
?>