<?php
/**
 * Created by Damien G. (damien.galicher@gmail.com)
 * Date: 08/08/2016 - Time: 18:19
 */

namespace Computer\Model;

use InvalidArgumentException;
use RuntimeException;

use Zend\Hydrator\HydratorInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\Sql\Sql;


class ZendDbSqlRepository implements LoginCommandInterface
{
    /**
     * @var AdapterInterface
     */
    private $db;

    /**
     * @var
     */
    private $hydrator;

    /**
     * @var
     */
    private $loginPrototype;

    /**
     * ZendDbSqlRepository constructor.
     * @param AdapterInterface $db
     * @param HydratorInterface $hydrator
     * @param Post $postPrototype
     */
    public function __construct(
        AdapterInterface $db,
        HydratorInterface $hydrator,
        Login $loginPrototype
    ) {
        $this->db               = $db;
        $this->hydrator         = $hydrator;
        $this->loginPrototype   = $loginPrototype;
    }

  
    public function createLogin(Login $login){
        print_r($login);
        echo 'hello world';
    }
    /**
     * @param $name
     * @param $arguments
     */
    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }


}