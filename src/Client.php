<?php
/**
 * Nodeping PHP
 */

namespace Nodeping;

class Client {

  public $token;

  /**
   * The class constructor.
   *
   * @param string $token - The token required to authenticate with the NodePing API.
   */
  public function __construct($token) {
    $this->token = $token;
    $this->client = new \GuzzleHttp\Client([
      'base_url' => 'https://api.nodeping.com/api/1/'
    ]);
  }

  /**
   * Create and return a new AccountsResource.
   *
   * @return \Nodeping\Resource\AccountsResource
   */
  public function getAccountsResource() {
    return new \Nodeping\Resource\AccountsResource($this);
  }

  /**
   * Create and return a new ContactsResource.
   *
   * @return \Nodeping\Resource\ContactsResource
   */
  public function getContactsResource() {
    return new \Nodeping\Resource\ContactsResource($this);
  }

  /**
   * Create and return a new ContactGroupsResource.
   *
   * @return \Nodeping\Resource\ContactGroupsResource
   */
  public function getContactGroupsResource() {
    return new \Nodeping\Resource\ContactGroupsResource($this);
  }

  /**
   * Create and return a new SchedulesResource.
   *
   * @return \Nodeping\Resource\SchedulesResource
   */
  public function getSchedulesResource() {
    return new \Nodeping\Resource\SchedulesResource($this);
  }

  /**
   * Create and return a new ChecksResource.
   *
   * @return \Nodeping\Resource\ChecksResource
   */
  public function getChecksResource() {
    return new \Nodeping\Resource\ChecksResource($this);
  }

  /**
   * Create and return a new ResultsResource.
   *
   * @return \Nodeping\Resource\ResultsResource
   */
  public function getResultsResource() {
    return new \Nodeping\Resource\ResultsResource($this);
  }

  /**
   * Create and return a new NotificationsResource.
   *
   * @return \Nodeping\Resource\NotificationsResource
   */
  public function getNotificationsResource() {
    return new \Nodeping\Resource\NotificationsResource($this);
  }
}