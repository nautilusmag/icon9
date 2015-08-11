<?php


$mod = filemtime(__DIR__ . "/store.json");
$now = strtotime("now");
print $now - $mod;


if(!isset($_GET["q"])) {
    if (($now - $mod) < (2 * 3600)) {//2 hrs
        die();
    }
}


$old = json_decode(file_get_contents(__DIR__ . "/store.json"));



$dataFile = file_get_contents("https://instagram.com/iconconference/");
$start_position = strpos( $dataFile ,'{"static_root"' ); // start position
$trimmed_before = trim( substr($dataFile, $start_position) ); // trim preceding content
$end_position = strpos( $trimmed_before, '</script>'); // end position
$trimmed = trim( substr( $trimmed_before, 0, $end_position) ); // trim content
$jsondata = substr( $trimmed, 0, -1); // remove extra trailing ";"

$x = (json_decode($jsondata));


$firstentry = $x->entry_data->ProfilePage[0]->user->media->nodes[0]->code;
$old->inst->url = (isset($firstentry->code))?"https://instagram.com/p/".$firstentry->code:$old->inst->url;
$old->inst->cap = (isset($firstentry->caption))?$firstentry->caption:$old->inst->cap;
$old->inst->imgsrc = (isset($firstentry->display_src))?$firstentry->display_src:$old->inst->imgsrc;


$xml = simplexml_load_file("http://theillustrationconference.tumblr.com/rss");

$test="";$test = (string)$xml->channel->item[0]->title;
$old->tmblr->title = (strlen($test) > 0)?$test:$old->tmblr->title;

$test="";$test = (string) $xml->channel->item[0]->link;
$old->tmblr->link = (strlen($test) > 0)?$test:$old->tmblr->link;





$con = file_get_contents("https://twitter.com/iconconference");
preg_match_all('/js-tweet-text tweet-text(.*?)>(.*?)<\/p>/',$con,$out);
$test="";$test = $out[2][0];
$old->twttr->text = (strlen($test) > 0)?$test:$old->twttr->text;

$content = json_encode($old);
$fp = fopen(__DIR__ . "/store.json","wb");
fwrite($fp,$content);
fclose($fp);

print "<pre>";
print_r($old);
print "</pre>";



?>