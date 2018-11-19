<?php
/**
 * Created by Damien G. (damien.galicher@gmail.com)
 * Date: 08/08/2016 - Time: 17:45
 */

namespace Computer\Controller;


use Computer\Model\LoginCommandInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;
use Zend\Paginator\Paginator;
use Zend\ServiceManager\Factory\InvokableFactory;
class LoginController extends AbstractActionController
{

    /**
     * @var LoginCommandInterface
     */
    private $loginRepository;

    public function __construct(LoginCommandInterface $loginCommand)
    {
      $this->loginCommand = $loginCommand;
    }

    /**
     * @return array
     */
    public function indexAction()
    {
        echo 'hello world';
        return [

            id =>'check'
        ];
    }
    public function createAction(){
       
        $username =  $this->params()->fromQuery('username');
        $password =  $this->params()->fromQuery('password');
        $login = new Login($username, $password);
        try {
            $post = $this->loginCommand->createLogin($login);
        } catch (\InvalidArgumentException $ex) {
             return [ 'status '=> 'Failure'];
        }
        return [ 'status '=> 'Success'];

    }
    
   
}