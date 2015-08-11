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
<a style="text-decoration:none;" href="#email"><div id="emailme">Email Me Updates</div></a>
<div id="pan-one-space"></div>
<div id="tickreg">Ticket registration for ICON9 opens in the Fall. Stay tuned for announcements.</div>



<ul class="social">
<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
</ul>

</div>


<div id="watercolor" class="fpanel">
<a name="email"></a>
    <div class="box-header">Contact</div>




    <form action="//theillustrationconference.us2.list-manage.com/subscribe/post?u=0b16baada1446bf2d5ecf0f10&amp;id=dc1e77d31b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>



    <div class="emreg">
    <div id="join-email" style="float: none;">Join our email list to receive updates on the conference.</div>

    <div class="con-inpts">
        <label for="mce-FNAME">First Name</label>
        <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
    </div>
    <div class="con-inpts">
        <label for="mce-LNAME">Last Name</label>
        <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
    </div>
    <div class="con-inpts">
        <label for="mce-EMAIL">Email</label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    </div>

        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_0b16baada1446bf2d5ecf0f10_dc1e77d31b" tabindex="-1" value=""></div>

        <input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe" class="button subcon">


    </form>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>




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

            <img width="424" src="<?= $d->inst->imgsrc?>" /><br>
            <a class="instagram" href="<?= $d->inst->url?>">
            <?= $d->inst->cap?>
          </a>
        </div>
        <div id="twt" class="fl socboxes">
            <i class="fa fa-twitter"></i> @ICONconference<br/>

<div class="twtext">
<?php
$twtext = str_replace('href="/','href="http://twitter.com/',$d->twttr->text);
echo $twtext;
?>



</div>
        </div>


        <div id="tmb" class="fl socboxes">
            <i class="fa fa-tumblr"></i> ICON Tumblr<br/>
<div class="tmbltext">


            <?= '<a class="tumbler" href="'.$d->tmblr->link.'">'.$d->tmblr->title.'</a>'?>
</div>

        </div>


    </div>

</div>


<div id="what" class="fpanel">
    <div class="box-header">What Is Icon?</div>

<div class="vimeo">
    <iframe src="https://player.vimeo.com/video/120619209?color=ffce44&title=0&byline=0&portrait=0"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

    <div class="whattext">
        The national Illustration Conference, ICON, is committed to providing a forum for an ongoing dialogue that serves the illustration, design, publishing, advertising, and academic communities. Its purpose is to provide a platform for the most influential illustrators and industry leaders to address, in a timely manner, the most pervasive issues facing the profession. Illustration Conference (ICON) is a 501 C-6 nonprofit organization of illustrators and is an entity in itself. ICON remains the only national conference specifically for illustrators and the graphic arts community providing an unprecedented forum for the creativity, inspiration and drive that captivates the profession.
    </div>

</div>


<div id="footer" class="fpanel">
<div class="copy">
    &copy;2015
</div>

</div>

<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/main.js"></script>


</body>