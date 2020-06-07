<?php

$email = $_POST['inputemail'];

//var_dump($_POST);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6Lc6PQEVAAAAACeKzoOPS4jgaW2Fnwtq5LzNKfrU",
    "response"=>$_POST['g-recaptcha-response'],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
))); // essa funcao http_build_query cria uma string do tipo
     // secret=123abc&response=

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

//var_dump($recaptcha);

if ($recaptcha['success'] === true) {
    echo "OK: ".$_POST['inputemail'];
} else {
    header("Location: exemplo-01.php");
}
?>
