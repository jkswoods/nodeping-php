<?php

namespace Nodeping\Model;

class Result {

  private $id;
  private $customerId;
  private $type;
  private $target;
  private $threshold;
  private $interval;
  private $scheduled; // RA
  private $queue;
  private $startTime;
  private $result; // SC
  private $message;
  private $pass;
  private $runTime; // RT
  private $finishTime;
  private $locations;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getCustomerId() {
    return $this->customerId;
  }

  public function setCustomerId($customerId) {
    $this->customerId = $customerId;
  }

  public function getType() {
    return $this->type;
  }

  public function setType($type) {
    $this->type = $type;
  }

  public function getTarget() {
    return $this->target;
  }

  public function setTarget($target) {
    $this->target = $target;
  }

  public function getThreshold() {
    return $this->threshold;
  }

  public function setThreshold($threshold) {
    $this->threshold = $threshold;
  }

  public function getInterval() {
    return $this->interval;
  }

  public function setInterval($interval) {
    $this->interval = $interval;
  }

  public function getScheduled() {
    return $this->scheduled;
  }

  public function setScheduled($scheduled) {
    $this->scheduled = $scheduled;
  }

  public function getQueue() {
    return $this->queue;
  }

  public function setQueue($queue) {
    $this->queue = $queue;
  }

  public function getStartTime() {
    return $this->startTime;
  }

  public function setStartTime($startTime) {
    $this->startTime = $startTime;
  }

  public function getResult() {
    return $this->result;
  }

  public function setResult($result) {
    $this->result = $result;
  }

  public function getMessage() {
    return $this->message;
  }

  public function setMessage($message) {
    $this->message = $message;
  }

  public function isPass() {
    return $this->pass;
  }

  public function setPass($pass) {
    $this->pass = $pass;
  }

  public function getRunTime() {
    return $this->runTime;
  }

  public function setRunTime($runTime) {
    $this->runTime = $runTime;
  }

  public function getFinishTime() {
    return $this->finishTime;
  }

  public function setFinishTime($finishTime) {
    $this->finishTime = $finishTime;
  }

  public function getLocations() {
    return $this->locations;
  }

  public function setLocations($locations) {
    $this->locations = $locations;
  }
}
