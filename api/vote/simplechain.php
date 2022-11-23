<?php
set_time_limit(0);
require_once('blockchain.php');

/*
Set up a simple chain and mine two blocks.
*/

$testCoin = new BlockChain();

echo "<br>mining block 1...\n";
//$myhmac="d55bddf8d62910879ed9f605522149a8";
$testCoin->push(new Block(1, strtotime("now"),"$myhmac"));

echo "<br>mining block 2...\n";
$testCoin->push(new Block(2, strtotime("now")," $myhmac"));

//$rr=json_encode($testCoin, JSON_PRETTY_PRINT);
