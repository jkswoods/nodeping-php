<?php

namespace Nodeping\Tests\Resource;

use Nodeping\Tests\TestCase;
use Nodeping\Resource\ChecksResource;

/**
 * Checks resource tests
 */
class ChecksTest extends TestCase {

    public function setUp() {
        parent::setUp();
        $this->class = $this->api->getChecksResource();
    }

    public function methodsThatShouldExist() {
        return [
            ['getChecks'],
            ['updateCheck'],
            ['createCheck'],
            ['deleteCheck'],
        ];
    }
}
