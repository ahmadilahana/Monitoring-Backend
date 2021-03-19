<?php

require __DIR__ . "/vendor/autoload.php";

use GuzzleHttp\Client;

if (isset($_POST['login'])) {

    $client = new Client(['base_uri' => 'https://api.pondokprogrammer.com/api/']);
    //https://api.pondokprogrammer.com/api/studen_login
    //request(method,alamat,data)
    //data harus array [ ]
    $response = $client->request('post', 'student_login', [
        'form_params' => [
            'email' => $_POST['email'],
            'password' => $_POST['pass']
        ]
    ]);
    // var_dump($response);
    $data = json_decode($response->getBody());
    // var_dump($data);
    $token = $data->token;
    $header = $client->request('post', 'class/qr?class_id=117', [
        'headers' => [
            "Authorization" => "bearer $token",
        ]
    ]);

    echo $header->getBody();

}
