<?php
$userkey = 'k26l5q';
$passkey = '8cf83c6169367d99387f341f';
$telepon = $nomor_telepon;
$message = "Kami Dari Dinas Kecamatan Telaga Bauntung. Dengan data atas nama ".$nama_pemohon.", data anda sudah di proses dengan status Harus Di Revisi. Segera lakukan revisi untuk di proses selanjutnya. Sekian infromasi dari kami terimakasih.";
$url = 'https://gsm.zenziva.net/api/sendsms/';
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
    'userkey' => $userkey,
    'passkey' => $passkey,
    'nohp' => $telepon,
    'pesan' => $message
));
$results = json_decode(curl_exec($curlHandle), true);
curl_close($curlHandle);
?>