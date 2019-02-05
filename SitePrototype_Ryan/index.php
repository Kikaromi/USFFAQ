<!DOCTYPE HTML>
<html lang="en">
<head>
<title>USF FAQ</title>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/main.css">

<!--<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">-->


</head>

<body>

<div class="center">
<img id="top" src="images/USF_arch1_CMYK.png" alt="USF Logo"/>
</div>

<br/><br/>

<form class="center">
<input name="search" id="search" placeholder="Search" type="textbox" class="inputbox" size="40" value="<?php if (isset($_REQUEST['search'])){echo $_GET['search'];} ?>"/><!--onchange="runSearch()"-->

</form>
<br/>


<div id="responses">
<br/><br/>

<?php
//error_reporting(E_ERROR | E_PARSE); //hide errors from screen if needed

//Check if a search has been initiated
if (isset($_GET['search'])){
	
	$search = $_GET['search'];//access search query string param
	$foundAnswer=false;//tracking if any positive matches are found

	//load input.json formated as "Q":"A","Q":"A" and establish iterator
	$jsonIterator = new RecursiveIteratorIterator(
			new RecursiveArrayIterator(json_decode(file_get_contents("input.json"), TRUE)),
			RecursiveIteratorIterator::SELF_FIRST);

	//iterate through json iterator and keyword search the key ("Q") with search param (query string)
	foreach ($jsonIterator as $key => $val) {
		$keyUsed=false;//keep from duplicating results
	   $title=explode(" ",$key);
	   $srch=explode(" ",$search);
	   foreach ($title as $eTitle){
		   if ($keyUsed==false){
			   foreach ($srch as $eSearch){
				   if (strtolower($eSearch)==strtolower($eTitle)){
					   echo '
						<div class="response">
						<h3>'.$key.'</h3>
						<p>'.$val.'</p>
						</div>
						';
						$foundAnswer=true;
						$keyUsed=true;
				   }
			   }
		   }
	   }
	}

	//If no answer is found, display no results
	if ($foundAnswer==false && $search){
		echo '
		<div class="response">
		<h3 class="center">No results</h3>
		</div>
		';
	}
}

/*
$faqArray=array(
    array("Hello World is world's most popular statement","Hello World has spread across the world as the most popular statement, especially in coding experiences"),
    array("University of St. Francis Weather Policy","Sometimes falling water may impact university activities and possibly effect open hours."),
    array("this is question 7","this is the answer for the 7 question")
);
foreach ($faqArray as $QA) {
   $title=explode(" ",$QA[0]);
   $srch=explode(" ",$search);
   foreach ($title as $eTitle){
	   foreach ($srch as $eSearch){
		   if (strtolower($eSearch)==strtolower($eTitle)){
			   echo '
				<div class="response">
				<h3>'.$QA[0].'</h3>
				<p>'.$QA[1].'</p>
				</div>
				';
				$foundAnswer=true;
		   }
	   }
   }
}
if ($foundAnswer==false && $search){
	echo '
	<div class="response">
	<h3 class="center">No results</h3>
	</div>
	';
}
*/
?>

</div>


<footer>

<div class="toTop">
<a href="#top" style="color:white; font-weight:normal">Top</a>
</div>

<div class="colorBackgroundBright" style="height:5%; width:100%; margin-bottom:0;">
<p class="center">
<!--<a href=#top">Back to Top</a><span style="padding:2%">&nbsp;</span>-->
<br/>
<a href="http://www.stfrancis.edu" style="margin-top: 8px;">University of St. Francis</a>

</p>
</div>
<div class="colorBackgroundDark" style="height:20%; width:100%; margin-bottom:0;">
&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>
</div>

</footer>
</body>

</html>
