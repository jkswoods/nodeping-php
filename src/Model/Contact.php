<?php

namespace Nodeping\Model;

class Contact {

  private $id;
  private $type;
  private $customerId;
  private $name;
  private $custrole;
  private $addresses;
  private $sDomain;
  private $newAddresses;

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

  public function getCustrole() {
    return $this->custrole;
  }

  public function setCustrole($custrole) {
    $this->custrole = $custrole;
  }

  public function getAddresses() {
    return $this->addresses;
  }

  public function setAddresses($addresses) {
    $this->addresses = $addresses;
  }

  public function getSDomain() {
    return $this->sDomain;
  }

  public function setSDomain($sDomain) {
    $this->sDomain = $sDomain;
  }

  public function getNewAddresses() {
    return $this->newAddresses;
  }

  public function setNewAddresses($newAddresses) {
    $this->newAddresses = $newAddresses;
  }
}
