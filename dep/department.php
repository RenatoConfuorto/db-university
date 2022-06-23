<?php

class Department {
  public $name;
  public $address;
  public $phone;
  public $email;
  public $id;

  function __construct($_name, $_address, $_phone, $_email)
  {
    $this->name = $_name;
    $this->address = $_address;
    $this->phone = $_phone;
    $this->email = $_email;
  }
}