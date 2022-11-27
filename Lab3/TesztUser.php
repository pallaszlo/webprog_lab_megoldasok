<?php
include 'MyUser.php';
//require 'User.php';

/*
$user = new MyUser('Kiss', 'Lajos', 1999);

echo $user;

//$user->szulEv = 1990;

$user->koszont();

echo $user->elegIdos();

MyUser::setMinKor(22);

echo $user->elegIdos() == 0 ? 'false' : 'true';

echo $user->vezNev;
*/

$user1 = new MyUser('Kiss', 'Lajos', 1999);
$user2 = new MyUser('Nagy', 'Imre', 2005);
$user3 = new MyUser('Eros', 'Anna', 2001);
$user4 = new MyUser('Gyenge', 'Ibolya', 1995);

$users = [$user1, $user2,$user3,$user4];
//print_r($users);

$limit = 2001;
$youngUsers = array_filter($users, function ($user) use ($limit){
    return $user->getSzulEv() < $limit;
});

print_r($youngUsers);





