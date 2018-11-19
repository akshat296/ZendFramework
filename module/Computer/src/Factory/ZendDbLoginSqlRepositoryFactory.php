<?php
/**
 * Created by Damien G. (damien.galicher@gmail.com)
 * Date: 08/08/2016 - Time: 18:30
 */

namespace Computer\Factory;

use Computer\Model\Login;
use Interop\Container\ContainerInterface;
use Zend\Db\Adapter\AdapterInterface;
use Computer\Model\ZendDbLoginSqlRepository;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Hydrator\Reflection as ReflectionHydrator;

class ZendDbSqlRepositoryFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ZendDbLoginSqlRepository(
            $container->get(AdapterInterface::class),
            new ReflectionHydrator(),
            new Login('', '')
          
        );
    }

}