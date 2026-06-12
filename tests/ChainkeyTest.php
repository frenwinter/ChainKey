<?php
/**
 * Tests for ChainKey
 */

use PHPUnit\Framework\TestCase;
use Chainkey\Chainkey;

class ChainkeyTest extends TestCase {
    private Chainkey $instance;

    protected function setUp(): void {
        $this->instance = new Chainkey(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainkey::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
