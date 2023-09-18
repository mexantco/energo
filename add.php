<?
$db = mysqli_connect('localhost', 'z9831609_sn', '6*BJsR72', 'z9831609_sn');

$time = time();
if($val = $_POST['val']){
    $ofer = $_POST['ofer'];
    $sql1= $db->query("SELECT `val` FROM `val` WHERE `ofer`='$ofer' AND `date`=(SELECT MAX(`date`) FROM `val` WHERE `ofer`='$ofer')");
    $res=$sql1->fetch_assoc();
    $val_last = $res['val'];
    if($val_last*1>$val*1){echo 'no';}else{
    $sql = $db->query("INSERT INTO `val` (`ofer`, `val`, `date`) VALUES ('$ofer', '$val', '$time')");
    echo 'ok';}
}

?>