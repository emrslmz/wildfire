<?php
include '../../connect/baglan.php';


$settingsor=$db->prepare("SELECT * from setting where setting_id=?");
$settingsor->execute(array(0));
$settingcek=$settingsor->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['generalsettingsave'])) {
	
    $generalsave=$db->prepare("UPDATE setting SET
    setting_title=:title,
    setting_facebook=:facebook,
    setting_twitter=:twitter,
    setting_linkedin=:linkedin,
    setting_youtube=:youtube
    WHERE setting_id=0");
    
    
    $update=$generalsave->execute(array(
    'title' => $_POST['setting_title'],
    'facebook' => $_POST['setting_facebook'],
    'twitter' => $_POST['setting_twitter'],
    'linkedin' => $_POST['setting_linkedin'],
    'youtube' => $_POST['setting_youtube']
    ));
    
    if ($update) {
        header("Location:../production/general-setting.php?status=ok");
    
    } else {
        header("Location:../production/general-setting.php?status=no");
    }
    
    }


?>