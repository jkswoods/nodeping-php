<?php

namespace Nodeping\Model;

class Notification {

  private $id;
  private $jobId;
  private $to;
  private $from;
  private $subject;
  private $body;
  private $network;
  private $type;
  private $at;
  private $rhp;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getJobId() {
    return $this->jobId;
  }

  public function setJobId($jobId) {
    $this->jobId = $jobId;
  }

  public function getTo() {
    return $this->to;
  }

  public function setTo($to) {
    $this->to = $to;
  }

  public function getFrom() {
    return $this->from;
  }

  public function setFrom($from) {
    $this->from = $from;
  }

  public function getSubject() {
    return $this->subject;
  }

  public function setSubject($subject) {
    $this->subject = $subject;
  }

  public function getBody() {
    return $this->body;
  }

  public function setBody($body) {
    $this->body = $body;
  }

  public function getNetwork() {
    return $this->network;
  }

  public function setNetwork($network) {
    $this->network = $network;
  }

  public function getType() {
    return $this->type;
  }

  public function setType($type) {
    $this->type = $type;
  }

  public function getAt() {
    return $this->at;
  }

  public function setAt($at) {
    $this->at = $at;
  }

  public function getRhp() {
    return $this->rhp;
  }

  public function setRhp($rhp) {
    $this->rhp = $rhp;
  }
}
