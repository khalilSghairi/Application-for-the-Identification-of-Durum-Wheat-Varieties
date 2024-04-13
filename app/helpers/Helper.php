<?php
function sendPush($tokens, $data)
{
    $fields = array(
        'to' => $tokens,
        'data'  => $data
    );
    $headers = array(
        'Authorization: key=AAAAq1AHfM4:APA91bG0NhQy2dQmS7p4oKmV2j1ATzo5HVhxJWwoJU7kdglCRswMp6QHgscir-lgixoiHwAShG7kjQthQYWb4xc_sqDauSiw2ISfrRrZ16WKyiHF4LhHAADYx1NF6D3rWdhMX4DQ4Gug',
        'Content-Type: application/json'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
}
