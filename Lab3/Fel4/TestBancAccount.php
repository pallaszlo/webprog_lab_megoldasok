<?php
namespace Fel4;
include "BancAccount.php";

$account = new BancAccount(100, "Kiss Balazs");
$account->setBalance(1000);
echo $account;
