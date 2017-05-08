<?php

namespace Nodeping\Resource;

class NotificationsResource extends Resource {

  private $notifications;

  /**
   * Get check notifications.
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *   - span
   *   - limit
   *   - subaccounts
   *
   * @see https://nodeping.com/docs-api-notifications.html#get
   */
  public function getNotifications($options = []) {
    $notifications = json_decode($this->get('notifications', $options)->getBody());

    if (!empty($notifications)) {
      foreach ($notifications as $notification) {
        $this->notifications[] = $this->serializer->deserialize(json_encode($notification), 'Nodeping\\Model\\Notification', 'json');
      }
      return $this->notifications;
    }
    return false;
  }
}
