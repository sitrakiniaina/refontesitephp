<?php
include('./requiert/php-global.php');
include('./administration/cashback/inc/functions.inc.php');

define('COUNT_NOTMEMBERS', 0);

if(!isset($_SESSION['id'])){
    header("Location: connexion.php");
    exit();
}

$userid = (int)$_SESSION['id'];

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
    $retailer_id = (int)$_GET['id'];
} else {
    header ("Location: cashback.php");
    exit();
}

$query = "SELECT * FROM cashbackengine_retailers WHERE retailer_id='$retailer_id' AND end_date > NOW() AND status='active'";
$req = $pdo->query($query);
$result  = $req->fetch();

if ($result)
{
    $row			= $result;
    $store_name		= $row['title'];
    $cashback		= DisplayCashback($row['cashback']);
    $website_url	= str_replace("{USERID}", $userid, $row['url']);
    
    $sql = 'UPDATE cashbackengine_retailers SET visits = visits + 1 WHERE ( retailer_id = :retailer_id )';
    $stm = $pdo->prepare( $sql );
    $stm->execute(array(':retailer_id' => $retailer_id));
}
else
{
    header ("Location: cashback.php");
    exit();
}


if (isset($_GET['c']) && is_numeric($_GET['c']) && $_GET['c'] > 0)
{
    $coupon_id = (int)$_GET['c'];

    $coupon_query = "SELECT * FROM cashbackengine_coupons WHERE coupon_id='$coupon_id'";
    $coupon_result = $pdo->query($coupon_query)->fetch();

    if ($coupon_result)
    {
        $coupon_row = $coupon_result;
        $coupon_link = $coupon_row['link'];

        if ($coupon_link != "")
        {
            $website_url = str_replace("{USERID}", $userid, $coupon_link);
        }
        
        $stm = $pdo->prepare( 'UPDATE cashbackengine_coupons SET visits = visits + 1, last_visit=NOW()  WHERE ( coupon_id = :coupon_id )' );
        $stm->execute(array(':coupon_id' => $coupon_id));

        $stm = $pdo->prepare( 'UPDATE cashbackengine_coupons SET visits_today = visits_today + 1 WHERE ( coupon_id = :coupon_id AND DATE(last_visit)=DATE(NOW()) )' );
        $stm->execute(array(':coupon_id' => $coupon_id));
        
    }
}

?>