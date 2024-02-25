<meta charset="UTF-8">

<h1>base</h1>

<hr>

<?php

function getMarkup($url) {
	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1');

	$res = curl_exec($curl);

	if($res === false) {
		echo curl_error($curl);
	} else {
		echo var_dump($res);
	}

	return $res;

}


//echo getMarkup('');

$words = file_get_contents('words.txt');

$arr = explode(' ', $words);

foreach ($arr as $ar) {
	echo $ar .'<br><br>';
}
	



?>





