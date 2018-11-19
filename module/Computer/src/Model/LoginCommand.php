<?php
namespace Computer\Model;
use RuntimeException;
use Computer\Model\LoginCommandInterface;
use Computer\Model\Login;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Insert;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Adapter\Driver\ResultInterface;

class LoginCommand implements LoginCommandInterface{
    public function createLogin(Login $login){
        $insert = new Insert('login');
        $insert->values([
            'username' => $username,
            'password' => $password
        ]);
        echo 'you are here in command';
        
    }
}