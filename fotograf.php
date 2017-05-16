<?php
$gveri= $_POST['link'];
if(empty($gveri))	
{
	echo"
	<html>
<head>
<link rel='stylesheet' type='text/css' href='assets/css/style.css' />
</head>
<script type='text/javascript'>
<!--Start Dynamic Title -->
window.onblur = function(){document.title = 'Nereye gittin.';}
window.onfocus = function(){document.title = 'hoşgeldin.';}
<!--End Dynamic Title -->
</script>
<body>
<div class='baslik'>
<label>Instagram Media Downloader</label>
</div>
<div class='bosluk'>
</div>

<div class='app'>
<!--<div class='bosluk'>
</div>-->
<div class='baslik'>
<label>
Photo link came empty. Please go to the main page and send the link again.
</label>
</div>
</div>";
}

else{echo "
<html>
<head>
<link rel='stylesheet' type='text/css' href='assets/css/style.css' />
</head>
<script type='text/javascript'>
<!--Start Dynamic Title -->
window.onblur = function(){document.title = 'InstaMedia.com | We are always here..';}
window.onfocus = function(){document.title = 'InstaMedia.com | Instagram Media Downloader.';}
<!--End Dynamic Title -->
</script>
<body>
<div class='baslik'>
<label>Instagram Media Downloader</label>
</div>
<div class='bosluk'>
</div>
<div class='app' class='margin:0 auto;'>
	<div class='form'>	
";

//$veri = file_get_contents($gveri.'?__a=1');
$veri=$gveri.'?__a=1';
$obj = json_decode((file_get_contents($veri)));
$yorumsayi = $obj->graphql->shortcode_media->edge_media_to_comment->count; 
$begeni = $obj->graphql->shortcode_media->edge_media_preview_like->count;
$resim = $obj->graphql->shortcode_media->display_url;

//$profil = $obj->media->owner->is_private;
echo "<div class='baslik'>";
echo "<label class='baslik2'>";
echo "<label class='appLabel'>".$yorumsayi." comments</label>";
/*".$yorumsayi ."*/
echo '</br>';
echo "<label class='appLabel'>".$begeni ." people liked</label>";
echo '</br>';
echo"<label><img width='400px' height='300px' src='".$resim."'><br>";
echo "<a id='download' class='appLabel' href='".$resim."' download='<".$resim."'>Download the picture!</a></div>";
echo "</div>";
/*?php echo $resim;?>*/
}?>