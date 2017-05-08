<?php

namespace Nodeping\Tests\Resource;

use Nodeping\Tests\TestCase;
use Nodeping\Resource\ContactsResource;

/**
 * Contacts resource tests
 */
class ContactsTest extends TestCase {

    public function setUp() {
        parent::setUp();
        $this->class = $this->api->getContactsResource();
    }

    public function methodsThatShouldExist() {
        return [
            ['getContacts'],
            ['updateContact'],
            ['createContact'],
            ['deleteContact'],
        ];
    }
}
