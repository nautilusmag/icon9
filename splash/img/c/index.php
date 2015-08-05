<?php
$onc=$_SERVER['REDIRECT_URL'];
$nc = str_replace("/","_",$onc);
$piece=explode('_',$nc);
$w = null;
$h = null;
$compression = 80;//compression



foreach($piece as $pc){
    if(substr($pc,-1,1) == "w" && is_numeric(substr($pc,-2,1)) ){
        $w = str_replace("w","",$pc);
    }
    if(substr($pc,-1,1) == "h" && is_numeric(substr($pc,-2,1)) ){
        $h = str_replace("h","",$pc);
    }
    $file = null;

    $art = explode($w."w_",$pc);
    foreach($art as $ar){if(preg_match('(gif|jpg|jpeg|png)',$ar)){$file = $ar;}}

    $art = explode($h."h_",$pc);
    foreach($art as $ar){if(preg_match('(gif|jpg|jpeg|png)',$ar)){$file = $ar;}}
}

$ext=substr($file,-3,1000);
$target = realpath(__DIR__."/../".$file);
$dest = realpath(__DIR__."/../..").$onc;
list($w_orig, $h_orig) = getimagesize($target);

if(!$w){$w = $w_orig * ($h/$h_orig);}
if(!$h){$h = $h_orig * ($w/$w_orig);}

switch ($ext) {
    case "gif":
        $img = imagecreatefromgif($target);
        break;
    case "png":
        $img = imagecreatefrompng($target);
        break;
    default:
        $img = imagecreatefromjpeg($target);
        break;
}

$tci = imagecreatetruecolor($w, $h);
imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);

switch ($ext) {
    case "gif":
        imagegif($tci,$dest);
        break;
    case "png":
        imagepng($tci,$dest);
        break;
    default:
        imagejpeg($tci,$dest, $compression);
        break;
}
header( 'Location: '.$onc ) ;
?>