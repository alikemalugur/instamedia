
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<script type="text/javascript">
window.onblur = function(){document.title = "Nereye gittin.";}
window.onfocus = function(){document.title = "hoşgeldin.";}
<!--End Change Title -->
</script>
<body>

<div class="baslik">
<label>Instagram Media Downloader</label>
</div>
<div class="bosluk">
</div>
<div class="app" >
	<div class="form">
		<form action="fotograf.php" method="POST" >
		<label class="appLabel" >Photo link:</label>
		<input type="text" name="link"/>
		<input type="submit" value="Bring!">
		</form>

	</div>

<div class="bosluk">
</div>
<!--Video-->
	<div class="form">
		<form action="video.php" method="POST" >
		<label class="appLabel">Video link:</label>
		<input type="text" name="link"/>
		<input type="submit" value="Bring!">
		</form>
	</div>
	<!--Video-->
</div>