<?php
namespace Madewithlove\IlluminatePsrCacheBridge\Tests\Unit\Exceptions;

use Exception;
use Madewithlove\IlluminatePsrCacheBridge\Exceptions\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class InvalidArgumentExceptionTest extends TestCase
{
    /** @test */
    public function it_can_be_constructed()
    {
        // Arrange
        $exception = new InvalidArgumentException();

        // Act

        // Assert
        $this->assertInstanceOf(Exception::class, $exception);
        $this->assertInstanceOf(\Psr\Cache\InvalidArgumentException::class, $exception);
        $this->assertInstanceOf(InvalidArgumentException::class, $exception);
    }
}
