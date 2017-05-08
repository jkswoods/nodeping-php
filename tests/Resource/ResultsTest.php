<?php

namespace Nodeping\Tests\Resource;

use Nodeping\Tests\TestCase;
use Nodeping\Resource\ResultsResource;

/**
 * Results resource tests
 */
class ResultsTest extends TestCase {

    public function setUp() {
        parent::setUp();
        $this->class = $this->api->getResultsResource();
    }

    public function methodsThatShouldExist() {
        return [
            ['getResults'],
        ];
    }
}
