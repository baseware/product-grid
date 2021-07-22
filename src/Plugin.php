<?php
declare(strict_types=1);

namespace CakeCart;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;
use Cake\Http\MiddlewareQueue;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Route\DashedRoute;

/**
 * Plugin for CakeCart
 */
class Plugin extends BasePlugin
{
    /**
     * Load all the plugin configuration and bootstrap logic.
     *
     * The host application is provided as an argument. This allows you to load
     * additional plugin dependencies, or attach events.
     *
     * @param \Cake\Core\PluginApplicationInterface $app The host application
     * @return void
     */
    public function bootstrap(PluginApplicationInterface $app): void
    {
    }

    /**
     * Add routes for the plugin.
     *
     * If your plugin has many routes and you would like to isolate them into a separate file,
     * you can create `$plugin/config/routes.php` and delete this method.
     *
     * @param \Cake\Routing\RouteBuilder $routes The route builder to update.
     * @return void
     */
    public function routes(RouteBuilder $routes): void
    {
        $routes->plugin(
            'CakeCart',
            ['path' => '/shop'],
            function (RouteBuilder $builder) {
                // Add custom routes here
             $builder->prefix('Admin',['_namePrefix' => 'admin:'], function (RouteBuilder $builder) {
                    $builder->prefix('Api',['_namePrefix' => 'api:'], function (RouteBuilder $builder) {
                       $builder->connect('/', ['controller' => 'Users', 'action' => 'login']);
                       $builder->fallbacks(DashedRoute::class);
                    });
                    $builder->fallbacks(DashedRoute::class);
                });
                $builder->prefix('Api',['_namePrefix' => 'api:'], function (RouteBuilder $builder) {
                       $builder->connect('/', ['controller' => 'Users', 'action' => 'login']);
                       $builder->fallbacks(DashedRoute::class);
                    });
                $builder->fallbacks(DashedRoute::class);
            }
        );
        parent::routes($routes);
    }

    /**
     * Add middleware for the plugin.
     *
     * @param \Cake\Http\MiddlewareQueue $middleware The middleware queue to update.
     * @return \Cake\Http\MiddlewareQueue
     */
    public function middleware(MiddlewareQueue $middlewareQueue): MiddlewareQueue
    {
        // Add your middlewares here

        return $middlewareQueue;
    }
}
