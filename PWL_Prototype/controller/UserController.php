<?php

class UserController
{
    private $userDao;

    /**
     * UserController constructor.
     * @param $userDao
     */
    public function __construct()
    {
        $this->userDao = new userDao();
    }

    public function index()
    {
        $input= filter_input(INPUT_POST,"btnSubmit");
        if(isset($input)){
            $name = filter_input(INPUT_POST, 'name');
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            $user = new User();
            $user->setName($name);
            $user->setUsername($username);
            $user->setPassword($password);
            $this->userDao->addUser($user);
        }
    }

}