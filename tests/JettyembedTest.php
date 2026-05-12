<?php
/**
 * Tests for JettyEmbed
 */

use PHPUnit\Framework\TestCase;
use Jettyembed\Jettyembed;

class JettyembedTest extends TestCase {
    private Jettyembed $instance;

    protected function setUp(): void {
        $this->instance = new Jettyembed(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Jettyembed::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
