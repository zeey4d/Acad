<?php

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use core\Routers;

class RouterTest extends TestCase
{
    private $router;
    private $testControllerPath;

    protected function setUp(): void
    {
        parent::setUp();
        $this->router = new Routers();
        
        // Create test controller file
        $this->testControllerPath = __DIR__ . '/test-controller.php';
        file_put_contents($this->testControllerPath, '<?php echo "Test Controller"; ?>');
    }

    public function testAddRoute()
    {
        $this->router->add('GET', '/test', $this->testControllerPath);
        $routes = $this->router->getRoutes();
        
        $this->assertCount(1, $routes);
        $this->assertEquals('/test', $routes[0]['uri']);
        $this->assertEquals($this->testControllerPath, $routes[0]['controller']);
        $this->assertEquals('GET', $routes[0]['method']);
    }

    public function testAddRouteWithParameters()
    {
        $this->router->add('GET', '/users/:id', $this->testControllerPath);
        $routes = $this->router->getRoutes();
        
        $this->assertCount(1, $routes);
        $this->assertEquals('/users/:id', $routes[0]['uri']);
    }

    public function testMatchRoute()
    {
        $this->router->add('GET', '/test', $this->testControllerPath);
        ob_start();
        $this->router->route('/test', 'GET');
        $output = ob_get_clean();
        
        $this->assertEquals('Test Controller', $output);
    }

    public function testMatchRouteWithParameters()
    {
        $this->router->add('GET', '/users/:id', $this->testControllerPath);
        ob_start();
        $this->router->route('/users/1', 'GET');
        $output = ob_get_clean();
        
        $this->assertEquals('Test Controller', $output);
    }

    public function testNoMatchRoute()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Route not found');
        $this->router->route('/nonexistent', 'GET');
    }

    public function testMethodNotAllowed()
    {
        $this->router->add('GET', '/test', $this->testControllerPath);
        
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Route not found');
        $this->router->route('/test', 'POST');
    }

    protected function tearDown(): void
    {
        if (file_exists($this->testControllerPath)) {
            unlink($this->testControllerPath);
        }
        parent::tearDown();
    }
} 