<?php
namespace Fel4;
use Fel5\SavingAcount;

include "SavingAcount.php";

$sa = new SavingAcount(2, "Kiss", 5);
$sa->setBalance(1000);
echo $sa;
$sa->deposit(100);
echo $sa;
$sa->addInterest();
echo $sa;

