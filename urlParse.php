<?php 
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); //uncomment before deployment dipshit
#$urip = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
#$uri = str_replace("liam", "", $urip); // liams stupid dev enviroment
if($uri == "" || $uri == "/"){
	$uri = "home";
}
$xml = simplexml_load_file("./XML/" . $uri . ".xml") or die("Error: Cannot create object");
$title = $xml->title;
$description = $xml->description;
$useTemplate = $xml->useTemplate;
$template = $xml->template;
$usehtml = $xml->usehtml;
$contentTitle = $xml->contentTitle;
$content = $xml->content;
include "./templates/" . $template . ".php";
if($useTemplate == true){
	$parseOutput = $templateOutput;
}else if($usehtml == true){
	$parseOutput = "<div class="container">" . $content . "</div>";
}
?>