<?
$db = mysqli_connect('');

if($ofer=$_POST['ofer']){
    $sql = $db->query("SELECT `ofer` FROM `counters` WHERE `ofer`=$ofer");
    if(!$sql->num_rows){
        echo 'no';
    }else{
        $sql = $db->query("SELECT * FROM `val` WHERE `ofer`='$ofer' ORDER BY `date` DESC ");
        $res = $sql->fetch_all(MYSQLI_ASSOC);
        echo(json_encode($res));
    }
}
?>
