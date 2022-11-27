<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestTopic
 *
 * @author pali
 */

require "Persistable.php";
require "Member.php";
require "Topicc.php";

$aMember = new Member( "fred", "Chicago", "http://example.com/" );
echo $aMember->getUsername() . " lives in " . $aMember->getLocation() ."<br>";
$aMember->save();


$aTopic = new Topic( "Teddy Bears are Great", $aMember );
$aTopic->showHeader();
$aTopic->save();

