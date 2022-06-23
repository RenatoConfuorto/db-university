<?php

class Department {
  public $name;
  public $address;
  public $phone;
  public $id;

  function __construct($_name, $_address, $_phone)
  {
    $this->name = $_name;
    $this->address = $_address;
    $this->phone = $_phone;
  }
}