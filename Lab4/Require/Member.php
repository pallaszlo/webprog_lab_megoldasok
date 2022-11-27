<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewMember
 *
 * @author pali
 */



class Member implements Persistable {
  
  private $username;
  private $location;
  private $homepage;
  
  public function __construct( $username, $location, $homepage ) {
    $this->username = $username;
    $this->location = $location;
    $this->homepage = $homepage;
  }
    
  public function getUsername() {
    return $this->username;
  }
 
  public function getLocation() {
    return $this->location;
  }
 
  public function getHomepage() {
    return $this->homepage;
  }
 
  public function save() {
    echo "Saving member to database<br>";
  }
 
  public function load() {
    echo "Loading member from database<br>";
  }
 
  public function delete () {
    echo "Deleting member from database<br>";
  }
 
}
