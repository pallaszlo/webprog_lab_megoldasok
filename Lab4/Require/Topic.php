<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Topic
 *
 * @author pali
 */



class Topic implements Persistable {
  
  private $subject;
  private $author;
  private $createdTime;
  
  public function __construct( $subject, $author ) {
    $this->subject = $subject;
    $this->author = $author;
    $this->createdTime = time();
  }
    
  public function showHeader() {
    $createdTimeString = date( 'l jS M Y h:i:s A', $this->createdTime );
    $authorName = $this->author->getUsername();
    echo "$this->subject (created on $createdTimeString by $authorName)<br>";
  }
 
  public function save() {
    echo "Saving topic to database<br>";
  }
 
  public function load() {
    echo "Loading topic from database<br>";
  }
 
  public function delete () {
    echo "Deleting topic from database<br>";
  }
 
}
