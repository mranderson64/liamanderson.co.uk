<?php 
$top = '<div class="container"><h1 class="tc grey">' . $contentTitle . '</h1>' . $xml->intro . '</div><div class="row">';
$middle = '';
$i = 1;
while($i <= count($xml->panel)){
	$o = $i-1;
	if($i == count($xml->panel) && $i % 2 != 0){
		$middle .= '<div class="row">
						<a href="' . $xml->panel[$o]->pURL . '">
							<div class="project lighttealbg">
								<div class="pimg darktealbg">
									<svg preserveAspectRatio="none" viewBox="0 0 400 39" style="transform: rotate(180deg);position: absolute;width: 99%;">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
									<img src="' . $host . '/IMAGES/' . $xml->panel[$o]->pImage . '" class="coverimg">
									<svg preserveAspectRatio="none" viewBox="0 0 400 39" style="position: relative;left: 0;bottom: 9.5vw;">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
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
									<svg preserveAspectRatio="none" viewBox="0 0 400 39" style="transform: rotate(180deg);position: absolute;width: 99%;">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
									<img src="' . $host . '/IMAGES/' . $xml->panel[$o]->pImage . '" class="coverimg">
									<svg preserveAspectRatio="none" viewBox="0 0 400 39" style="position: relative;left: 0;bottom: 9.5vw;">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
								</div>
								<h3 class="navy">' . $xml->panel[$o]->pTitle . '</h3>
								<p class="navy">' . $xml->panel[$o]->pDescription . '</p>
							</div>
						</a>';
	}else{
		$middle .= '<a href="' . $xml->panel[$o]->pURL . '">
						<div class="project lighttealbg">
							<div class="pimg darktealbg">
								<svg preserveAspectRatio="none" viewBox="0 0 400 39" style="transform: rotate(180deg);position: absolute;width: 99%;">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
								<img src="' . $host . '/IMAGES/' . $xml->panel[$o]->pImage . '" class="coverimg">
								<svg preserveAspectRatio="none" viewBox="0 0 400 39" style="position: relative;left: 0;bottom: 9.5vw;">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
							</div>
							<h3 class="navy">' . $xml->panel[$o]->pTitle . '</h3>
							<p class="navy">' . $xml->panel[$o]->pDescription . '</p>
						</div>
					</a>
				</div>';
	} 
	$i ++;			
}
$bottom = '</div></div>';

$templateOutput = $top . $middle . $bottom;
	
?>
