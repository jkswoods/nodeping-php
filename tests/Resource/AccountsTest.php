<?php

namespace Nodeping\Tests\Resource;

use Nodeping\Tests\TestCase;
use Nodeping\Resource\AccountsResource;

/**
 * Accounts resource tests
 */
class AccountsTest extends TestCase {

    public function setUp() {
        parent::setUp();
        $this->class = $this->api->getAccountsResource();
    }

    public function methodsThatShouldExist() {
        return [
            ['getAccounts'],
            ['updateAccount'],
            ['createAccount'],
            ['deleteAccount'],
        ];
    }
}
