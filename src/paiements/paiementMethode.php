<?php 


require 'vendor/autoload.php';
include_once('privateKeys.php');
use Kkiapay\Kkiapay as Kkiapay;


$kkiapay = new Kkiapay(
    $public_key,
    $private_key,
    $secret,
    $sandbox = true, // ou 'production' si c'est plus en sandbox c'est à dire en mode test tu suprime cette partie et tu laisse les tois
);

function verifyTransaction($transaction_id) {
    global  $kkiapay;
    $transaction = $kkiapay->verifyTransaction(
        $transaction_id, // l'id de la  transaction
    );
    return $transaction;
}

?>
