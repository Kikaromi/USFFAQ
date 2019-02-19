<!DOCTYPE HTML>
<html lang="en">
<head>
<title>USF FAQ</title>
<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!--<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">-->


</head>

<body class="colorBackgroundDark_Gray">

<div class="center"><br/>
<img id="top" src="images/USF_arch1_REV.png" alt="USF Logo"/>
</div>

<br/>

<div id="responses">

<?php
//error_reporting(E_ERROR | E_PARSE); //hide errors from screen if needed

//load input.json formated as "Q":"A","Q":"A" and establish iterator
$jsonIterator = new RecursiveIteratorIterator(
	new RecursiveArrayIterator(json_decode(file_get_contents("input.json"), TRUE)),
	RecursiveIteratorIterator::SELF_FIRST);

//iterate through json iterator and keyword search the key ("Q") with search param (query string)
$count=0;
foreach ($jsonIterator as $key => $val) {
	echo '
	<div class="q-frame" data-toggle="collapse" data-target="#FRAME'.$count.'">'.$key.'</div>
	<div id="FRAME'.$count.'" class="collapse a-frame">
		'.$val.'
	</div>
	';
	$count=$count+1;
}

?>

</div>

<br/>
<footer>

<div class="toTop">
<a href="#top">Top</a>
</div>

<div class="colorBackgroundDark_GrayDarker" style="height:15%; width:100%; margin-bottom:0;">
<p class="center">
<!--<a href=#top">Back to Top</a><span style="padding:2%">&nbsp;</span>-->
<br/>
<a href="https://myusf.stfrancis.edu/portal/secure/content/15841" style="margin-top: 8px;">View Full Policy Manual</a>

</p>

&nbsp;<br/>&nbsp;<br/>
</div>

</footer>
</body>

</html>
