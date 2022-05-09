<?php

namespace Exo\Models;

/**
 * Model grouping together all the properties common to all the models
 */
class CoreModel {

  protected $id;
  protected $lastname;
  protected $firstname;
  protected $email;

  /**
   * Get the value of the ID
   *
   * @return int 
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of lastname
   */ 
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   *
   * @return  self
   */ 
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
   * Get the value of firstname
   */ 
  public function getFirstname()
  {
    return $this->firstname;
  }

  /**
   * Set the value of firstname
   *
   * @return  self
   */ 
  public function setFirstname($firstname)
  {
    $this->firstname = $firstname;

    return $this;
  }

  /**
   * Get the value of the email
   *
   * @return int 
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of the email
   *
   * @return int 
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }
}