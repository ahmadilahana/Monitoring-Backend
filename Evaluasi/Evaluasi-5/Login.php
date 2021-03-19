<?php

require_once __DIR__ . "/vendor/autoload.php";

use GuzzleHttp\Client;


class Login 
{
    public function cekLogin($email, $pass)
    {
            
        $client = new Client([
            'base_uri' => 'https://api.pondokprogrammer.com/api/',
        ]);

        try {
            if (empty($email) || empty($pass)) {
                return false;
            } else {
                $response = $client->request('POST','student_login', $email, $pass);
                return json_decode($response);
            }
        } catch (Exception $e) {
            // echo $e->getMessage();
            // foreach ($response->getHeaders() as $name => $values) {
            //     echo $name . ': ' . implode(', ', $values) . "<br>";
            // }
        }
    }
}
