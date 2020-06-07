<?php 
$top = '<div class="container"><h1 class="tc grey">' . $contentTitle . '</h1><div class="container"><div class="row">';
$middle = '';
$i = 1;
while($i <= count($xml->panel)){
	$o = $i-1;
	if($i == count($xml->panel) && $i % 2 != 0){
		$middle .= '<div class="row">
						<a href="' . $xml->panel[$o]->pURL . '">
							<div class="project lighttealbg">
								<div class="pimg darktealbg">
									<img src="./IMAGES/' . $xml->panel[$o]->pImage . '" class="coverimg">
								</div>
								<h3 class="navy">' . $xml->panel[$o]->pTitle . '</h3>
								<p class="navy">' . $xml->panel[$o]->pDescription . '</p>
							</div>
						</a>
					</div>';
	}else if($i % 2 != 0){
		$middle .= '<div class="row">
						<a href="' . $xml->panel[$o]->pURL . '">
							<div class="project lighttealbg">
								<div class="pimg darktealbg">
									<img src="./IMAGES/' . $xml->panel[$o]->pImage . '" class="coverimg">
								</div>
								<h3 class="navy">' . $xml->panel[$o]->pTitle . '</h3>
								<p class="navy">' . $xml->panel[$o]->pDescription . '</p>
							</div>
						</a>';
	}else{
		$middle .= '<a href="' . $xml->panel[$o]->pURL . '">
						<div class="project lighttealbg">
							<div class="pimg darktealbg">
								<img src="./IMAGES/' . $xml->panel[$o]->pImage . '" class="coverimg">
							</div>
							<h3 class="navy">' . $xml->panel[$o]->pTitle . '</h3>
							<p class="navy">' . $xml->panel[$o]->pDescription . '</p>
						</div>
					</a>
				</div>';
	} 
	$i ++;			
}
$bottom = '</div></div></div>';

$templateOutput = $top . $middle . $bottom;
	
?>