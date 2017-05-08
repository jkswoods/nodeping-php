<?php

namespace Nodeping\Tests\Resource;

use Nodeping\Tests\TestCase;
use Nodeping\Resource\NotificationsResource;

/**
 * Notifications resource tests
 */
class NotificationsTest extends TestCase {

    public function setUp() {
        parent::setUp();
        $this->class = $this->api->getNotificationsResource();
    }

    public function methodsThatShouldExist() {
        return [
            ['getNotifications'],
        ];
    }
}
