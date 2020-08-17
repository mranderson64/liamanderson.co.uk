<?php
$top = '<div class="container">';
$middle = '<div class="home-content-wrap">';
$i = 1;
while($i <= count($xml->panel)){
	$o = $i-1;
	if($i % 2 != 0){
		$middle .= '<div class="w-layout-grid about-grid">
			<div>
				<div class="home-section-wrap">
					<h2 class="section-heading heading-2">' . $xml->panel[$o]->pTitle . '</h2>
					<p class="paragraph-light">' . $xml->panel[$o]->pDescription . '</p>
				</div>
				<a href="' . $xml->panel[$o]->pURL . '" class="button w-inline-block">
					<div>Learn More</div>
				</a>
			</div>
			<img src="./IMAGES/' . $xml->panel[$o]->pImage . '" alt="' . $xml->panel[$o]->pTitle . '">
		</div>';
	}else{
		$middle .= '<div class="w-layout-grid about-grid cc-about-2">
			<div>
				<div class="home-section-wrap">
					<h2 class="section-heading heading-2">' . $xml->panel[$o]->pTitle . '</h2>
					<p class="paragraph-light">' . $xml->panel[$o]->pDescription . '</p>
				</div>
				<a href="' . $xml->panel[$o]->pURL . '" class="button w-inline-block">
					<div>Learn More</div>
				</a>
			</div>
			<img src="./IMAGES/' . $xml->panel[$o]->pImage . '" alt="' . $xml->panel[$o]->pTitle . '">
		</div>';
	}
	$i ++;
}
$bottom = '</div></div>';

$templateOutput = $top . $middle . $bottom;

?>
