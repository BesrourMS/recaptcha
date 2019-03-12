<?php
$data = array(
            'secret' => "6LcIY5YUAAAAAC15B2sLiV81YAPBbas-Gpbu8Uq-",
            'response' => $_GET['token']
        );

$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($verify);

echo $response;
?>
