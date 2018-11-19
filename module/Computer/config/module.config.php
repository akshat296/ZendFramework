<?php
namespace Computer;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Db\Adapter\AdapterInterface;

return [
    /**
     * Service manager
     */
    'service_manager' => [
        'aliases' => [
            Model\PostRepositoryInterface::class => Model\ZendDbSqlRepository::class,
            Model\PostCommandInterface::class => Model\ZendDbSqlCommand::class,
            Model\LoginCommandInterface::class => Model\ZendDbLoginSqlRepository::class
        ],
        'factories' => [
            Model\PostRepository::class => InvokableFactory::class,
            Model\ZendDbSqlRepository::class => Factory\ZendDbSqlRepositoryFactory::class,
            Model\PostCommand::class => InvokableFactory::class,
            Model\LoginCommand::class => InvokableFactory::class,
            Model\ZendDbSqlCommand::class => Factory\ZendDbSqlCommandFactory::class,
            Model\ZendDbLoginSqlRepository::class => Factory\ZendDbLoginSqlRepositoryFactory::class
        ],
    ],
    
    /**
     * Controllers
     */
    'controllers' => [
        'factories' => [
            Controller\ListController::class => Factory\ListControllerFactory::class,
            Controller\WriteController::class => Factory\WriteControllerFactory::class,
            Controller\DeleteController::class => Factory\DeleteControllerFactory::class,
            Controller\LoginController::class => Factory\LoginControllerFactory::class,
        ],
    ],

    /**
     * Routes
     */
    'router' => [
        'routes' => [
            'computer' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/computer',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'index',
                    ],
                ],
                'may_terminate' => true,
                /**
                 * Child routes de Computer
                 */
                'child_routes'  => [
                    // Ajouter
                    'create' => [
                        'type' => Literal::class,
                        'options' => [
                            'route'    => '/create',
                            'defaults' => [
                                'controller' => Controller\LoginController::class,
                                'action'     => 'create',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    /**
     * View manager
     */
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];