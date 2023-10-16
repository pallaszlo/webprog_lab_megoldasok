<?php
declare(strict_types=1); // strict requirement

include "User.php";


//$user1 = new User("Kiss", "Lajos", "2000"); // Fatal error: Uncaught TypeError: User::__construct(): Argument #3 ($szulEv) must be of type int, string given
$user1 = new User("Kiss", "Lajos", 2000);
echo $user1;
//$user1->vezNev = "Valaki";
User::setMinKor(16);
echo "<br>" . User::getMinKor();

$user2 = new User("Egy", "Elek", 2005);
$user3 = new User("Ket", "Elek", 2000);
$user4 = new User("Harom", "Elek", 2010);
$user5 = new User("Negy", "Elek", 2007);
$user6 = new User("Ot", "Elek", 2002);

$userList = [$user2, $user3, $user4, $user5, $user6];
//print_r($userList);
foreach ($userList as $user){
   echo $user . "<br>";
}

$limitAge = 2007;
$newUsers = array_filter($userList, function ($user) use ($limitAge){
   return  $user->getSzulEv() < $limitAge;
});

print_r($newUsers);
