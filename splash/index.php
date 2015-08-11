<?php
$d = json_decode(file_get_contents("store.json"));
//print_r($d);
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>ICON The Illustration Conference</title>
  <meta name="description" content="Website for the Illustration Conference, ICON 9 taking place in Austin, Texas July 6-9, 2016">
  <meta name="keywords" content="ICON, Illustration, Design, Conference, Austin">
  <meta name="author" content="The Illustration Conference">
  <meta name="viewport" content="width=960, minimal-ui">
<!--<script src="//use.typekit.net/zyr2cee.js"></script>-->
<!--<script>try{Typekit.load({ async: true });}catch(e){}</script>-->

 <link rel="stylesheet" href="/css/main.css">
 </head>
<body>

<!--
<span class="icon_head_a">1</span>
<span class="icon_head_a">2</span>
<i class="fa fa-twitter"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-tumblr"></i>
 -->
<div id="texas" class="fpanel">

    <img id="icon_head_a" src="/img/logo_900.png" alt="ICON9" title="ICON9"/>



<div id="savedate">Save the date</div>
<div id="date">July 6-9, 2016<br/>Austin, TX</div>
<div id="hotel">Austin Hilton Hotel</div>
<a style="text-decoration:none;" href=""><div id="emailme">Email Me Updates</div></a>
<div id="pan-one-space"></div>
<div id="tickreg">Ticket registration for ICON9 opens in the Fall. Stay tuned for announcements.</div>



<ul class="social">
<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
</ul>

</div>


<div id="watercolor" class="fpanel">

    <div class="box-header">Contact</div>

    <div class="emreg">
    <div id="join-email" style="float: none;">Join our email list to receive updates on the conference.</div>

    <div class="con-inpts">
        <label>First Name</label>
        <input type="text" name="asd">
    </div>
    <div class="con-inpts">
        <label>Last Lame</label>
        <input type="text" name="asd">
    </div>
    <div class="con-inpts">
        <label>Email</label>
        <input type="text" name="asd">
    </div>

        <a style="text-decoration:none;" href=""><div id="subcon">Submit</div></a>
<div class="conmsg">
For sponsorship and general inquiries,<br/>
Contact Mark Heflin: <a href="mailto:office@illustrationconference.org?subject=Website%20Contact">office@illustrationconference.org</a>
</div>
</div>

</div>


<div id="news" class="fpanel">
    <div class="box-header">News</div>

    <div class="cntrclmn">
        <div id="igrm" class="fl socboxes">
            <i class="fa fa-instagram"></i> @ICONconference<br/>

            <img width="424" src="<?= $d->inst->imgsrc?>" />

        </div>
        <div id="twt" class="fl socboxes">
            <i class="fa fa-twitter"></i> @ICONconference<br/>


<?= $d->twttr->text?>

        </div>


        <div id="tmb" class="fl socboxes">
            <i class="fa fa-tumblr"></i> ICON Tumblr<br/>

            <?= $d->tmblr->title?>


        </div>


    </div>

</div>


<div id="what" class="fpanel">
What
</div>


<div id="footer" class="fpanel">
Footer
</div>

<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/main.js"></script>


</body>