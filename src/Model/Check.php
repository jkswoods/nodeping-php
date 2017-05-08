<?php

namespace Nodeping\Model;

class Check {

  private $id;
  private $rev;
  private $customerId;
  private $label;
  private $interval;
  private $notifications;
  private $type;
  private $status;
  private $modified;
  private $enable;
  private $public;
  private $parameters;
  private $created;
  private $queue;
  private $uuid;
  private $state;
  private $firstdown;
  private $runLocations;
  private $dep;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getRev() {
    return $this->rev;
  }

  public function setRev($rev) {
    $this->rev = $rev;
  }

  public function getCustomerId() {
    return $this->customerId;
  }

  public function setCustomerId($customerId) {
    $this->customerId = $customerId;
  }

  public function getLabel() {
    return $this->label;
  }

  public function setLabel($label) {
    $this->label = $label;
  }

  public function getInterval() {
    return $this->interval;
  }

  public function setInterval($interval) {
    $this->interval = $interval;
  }

  public function getNotifications() {
    return $this->notifications;
  }

  public function setNotifications($notifications) {
    $this->notifications = $notifications;
  }

  public function getType() {
    return $this->type;
  }

  public function setType($type) {
    $this->type = $type;
  }

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getModified() {
    return $this->modified;
  }

  public function setModified($modified) {
    $this->modified = $modified;
  }

  public function getEnable() {
    return $this->enable;
  }

  public function setEnable($enable) {
    $this->enable = $enable;
  }

  public function isPublic() {
    return $this->public;
  }

  public function setPublic($public) {
    $this->public = $public;
  }

  public function getParameters() {
    return $this->parameters;
  }

  public function setParameters($parameters) {
    $this->parameters = $parameters;
  }

  public function getCreated() {
    return $this->created;
  }

  public function setCreated($created) {
    $this->created = $created;
  }

  public function getQueue() {
    return $this->queue;
  }

  public function setQueue($queue) {
    $this->queue = $queue;
  }

  public function getUuid() {
    return $this->uuid;
  }

  public function setUuid($uuid) {
    $this->uuid = $uuid;
  }

  public function getState() {
    return $this->state;
  }

  public function setState($state) {
    $this->state = $state;
  }

  public function getFirstdown() {
    return $this->firstdown;
  }

  public function setFirstdown($firstdown) {
    $this->firstdown = $firstdown;
  }

  public function getRunLocations() {
    return $this->runLocations;
  }

  public function setRunLocations($runLocations) {
    $this->runLocations = $runLocations;
  }

  public function getDep() {
    return $this->dep;
  }

  public function setDep($dep) {
    $this->dep = $dep;
  }
}
