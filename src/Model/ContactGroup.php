<?php

namespace Nodeping\Model;

class ContactGroup {
  
  private $id;
  private $type;
  private $customerId;
  private $name;
  private $members;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getType() {
    return $this->type;
  }

  public function setType($type) {
    $this->type = $type;
  }

  public function getCustomerId() {
    return $this->customerId;
  }

  public function setCustomerId($customerId) {
    $this->customerId = $customerId;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getMembers() {
    return $this->members;
  }

  public function setMembers(array $members) {
    $this->members = $members;
  }
}
