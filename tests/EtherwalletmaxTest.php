<?php
/**
 * Tests for EtherWalletMax
 */

use PHPUnit\Framework\TestCase;
use Etherwalletmax\Etherwalletmax;

class EtherwalletmaxTest extends TestCase {
    private Etherwalletmax $instance;

    protected function setUp(): void {
        $this->instance = new Etherwalletmax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherwalletmax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
