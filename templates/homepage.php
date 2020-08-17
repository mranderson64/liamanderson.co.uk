<?php
$top = '<div class="container"><h1 class="tc grey">' . $contentTitle . '</h1>' . $xml->intro . '';
$middle = '';
$i = 1;
while($i <= count($xml->panel)){
	$o = $i-1;
	if($i == count($xml->panel) && $i % 2 != 0){
		$middle .= '<div class="row">
						<a href="' . $xml->panel[$o]->pURL . '">
							<div class="project lighttealbg">
								<div class="pimg lighttealbg">
									<svg preserveAspectRatio="none" viewBox="0 0 400 39" class="slopet">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
									<iframe desk-src="' . $xml->panel[$o]->pURL . '" style="height:60vw;border: none;width: calc(80vw - 45px);" scrolling="no" class="lazy-load-me"></iframe>
									<svg preserveAspectRatio="none" viewBox="0 0 400 39" class="slopeb">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
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
								<div class="pimg lighttealbg">
									<svg preserveAspectRatio="none" viewBox="0 0 400 39" class="slopet">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
									<iframe desk-src="' . $xml->panel[$o]->pURL . '" style="height:60vw;border: none;width: calc(80vw - 45px);" scrolling="no" class="lazy-load-me"></iframe>
									<svg preserveAspectRatio="none" viewBox="0 0 400 39" class="slopeb">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
								</div>
								<h3 class="navy">' . $xml->panel[$o]->pTitle . '</h3>
								<p class="navy">' . $xml->panel[$o]->pDescription . '</p>
							</div>
						</a>';
	}else{
		$middle .= '<a href="' . $xml->panel[$o]->pURL . '">
						<div class="project lighttealbg">
							<div class="pimg lighttealbg">
								<svg preserveAspectRatio="none" viewBox="0 0 400 39" class="slopet">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
								<iframe desk-src="' . $xml->panel[$o]->pURL . '" style="height:60vw;border: none;width: calc(80vw - 45px);" scrolling="no" class="lazy-load-me"></iframe>
								<svg preserveAspectRatio="none" viewBox="0 0 400 39" class="slopeb">  <path fill="#bee3de" class="cls-1" d="M400,39H0V38.3L400,0V39Z"></path></svg>
							</div>
							<h3 class="navy">' . $xml->panel[$o]->pTitle . '</h3>
							<p class="navy">' . $xml->panel[$o]->pDescription . '</p>
						</div>
					</a>
				</div>';
	}
	$i ++;
}
$bottom = '</div>';

$templateOutput = $top . $middle . $bottom;

?>
