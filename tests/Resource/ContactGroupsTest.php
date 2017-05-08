<?php

namespace Nodeping\Tests\Resource;

use Nodeping\Tests\TestCase;
use Nodeping\Resource\ContactGroupsResource;

/**
 * Contact groups resource tests
 */
class ContactGroupsTest extends TestCase {

    public function setUp() {
        parent::setUp();
        $this->class = $this->api->getContactGroupsResource();
    }

    public function methodsThatShouldExist() {
        return [
            ['getContactGroups'],
            ['updateContactGroup'],
            ['createContactGroup'],
            ['deleteContactGroup'],
        ];
    }
}
