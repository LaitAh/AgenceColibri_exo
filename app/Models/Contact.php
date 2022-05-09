<?php

namespace Exo\Models;

use Exo\Utils\Database;
use PDO;

/**
 * The Contact class is a Model. That means that it represents the table `contact` of the database
 */
class Contact extends CoreModel {

  private $subject;
  private $message;

  /**
   * Get the value of subject
   */ 
  public function getSubject()
  {
    return $this->subject;
  }

  /**
   * Set the value of subject
   *
   * @return  self
   */ 
  public function setSubject($subject)
  {
    $this->subject = $subject;

    return $this;
  }

  /**
   * Get the value of message
   */ 
  public function getMessage()
  {
    return $this->message;
  }

  /**
   * Set the value of message
   *
   * @return  self
   */ 
  public function setMessage($message)
  {
    $this->message = $message;

    return $this;
  }
}