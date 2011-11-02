<?php

class User
{
    private $_id;
    private $_facebookId;
    private $_name;
    private $_email;
    private $_url;
    private $_loginArgs;

    public function __construct()
    {
        $this->_loginArgs = array('facebookId', 'name', 'email', 'url');
    }

    public function login($params)
    {
        $data = array();
        foreach($this->_loginArgs as $arg) {
            if(array_key_exists($arg, $params)) {
                $this->{'_' . $arg} = $params[$arg];
                $data[$arg] = $params[$arg];
            }
        }

        $userModel = new DbTable_User();
        $userModel->register($data);
    }
}

