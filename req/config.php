<?php
//Fit to your need variables // These should be the only variables you need to edit
$mysqlUsername	= "miningfarm";
$mysqlPassword	= "tNu2KBQXhWw5Qffq";
$mysqlDatabase	= "miningfarm";
$mysqlHost		= "localhost";

//Linkage
$header		= $req."header.php";
$menu		= $req."menu.php";
$footer		= $req."footer.php";
$bitcoind	= $req."/bitcoinWallet/bitcoin.inc.php";

//Cookies!
$cookieName = "miningfarm#2";
$cookiePath = "/";
$cookieDomain = "";

//Email
$fromAddress = "Localhost@Localhost.com";

//Bitcoind RPC information
$rpcType	= "http";
$rpcUsername	= "bitcoins";
$rpcPassword 	= "lolsalad";
$rpcHost	= "127.0.0.1:8332";


//This will show up on your stats.php page
$ip = "127.0.0.1";
$port = "8332";
?>
