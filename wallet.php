<?php
// echo "Hi, tron-php3";
// echo "<br>";

include_once 'tron-phpx/vendor/autoload.php';

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Tron\Address;
use Tron\Api;
use Tron\TRC20;
use Tron\TRX;



const URI = 'https://api.trongrid.io'; // mainnet


function createWallet()
{
    $w_add = array();
    ///start generate wallet address
    $api = new Api(new Client(['base_uri' => URI]));
    $trxWallet = new TRX($api);
    $new_add = $trxWallet->generateAddress();
    // var_dump($new_add);
    //address // privateKey

    $array = get_object_vars($new_add);
    $pk = $array['privateKey'];
    // echo $pk;
    // echo "<br>";
    $add = $array['address'];
    // var_dump($add);
    array_push($w_add, $add);
    array_push($w_add, $pk);
    // echo "<br>";
    // var_dump($w_add);

    //// end generate wallet address


    $wallet = "createWallet";
    return $w_add;
}

var_dump(createWallet());
