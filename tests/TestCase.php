<?php

namespace Nodeping\Tests;

abstract class TestCase extends \PHPUnit_Framework_TestCase {

    abstract function methodsThatShouldExist();

    /**
     * @var API
     */
    protected $api;

    /**
     * @var Class
     */
    protected $class;

    public function setUp() {
      $this->api = new \Nodeping\Client('test');
    }
    
    /**
     * @dataProvider methodsThatShouldExist
     */
    public function testMethodsExist($method) {
        $this->assertMethodExists($method);
    }

    protected function assertMethodExists($method) {
        $this->assertTrue(
            method_exists($this->class, $method)
        );
    }

    protected function assertEndpoint($expected, $id = null) {
        $actual = $this->invokeMethod('endpoint', [$id]);
        $this->assertEquals($expected, $actual);
    }

    protected function invokeMethod($method, array $params) {
        $reflection = new \ReflectionClass(get_class($this->class));
        $method = $reflection->getMethod($method);
        $method->setAccessible(true);
        return $method->invokeArgs($this->class, $params);
    }
}
