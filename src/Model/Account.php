<?php

namespace Nodeping\Model;

class Account {

  private $id;
  private $parent;
  private $status;
  private $name;
  private $count;
  private $type;
  private $customerName;
  private $creationDate;
  private $timezone;
  private $nextBillingDate;
  private $defaultLocations;

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getParent() {
    return $this->parent;
  }

  public function setParent($parent) {
    $this->parent = $parent;
  }

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getCount() {
    return $this->count;
  }

  public function setCount($count) {
    $this->count = $count;
  }

  public function getType() {
    return $this->type;
  }

  public function setType($type) {
    $this->type = $type;
  }

  public function getCustomerName() {
    return $this->customerName;
  }

  public function setCustomerName($customerName) {
    $this->customerName = $customerName;
  }

  public function getCreationDate() {
    return $this->creationDate;
  }

  public function setCreationDate($creationDate) {
    $this->creationDate = $creationDate;
  }

  public function getTimezone() {
    return $this->timezone;
  }

  public function setTimezone($timezone) {
    $this->timezone = $timezone;
  }

  public function getNextBillingDate() {
    return $this->nextBillingDate;
  }

  public function setNextBillingDate($nextBillingDate) {
    $this->nextBillingDate = $nextBillingDate;
  }

  public function getDefaultLocations() {
    return $this->defaultLocations;
  }

  public function setDefaultLocations($defaultLocations) {
    $this->defaultLocations = $defaultLocations;
  }
}