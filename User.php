<?php

class User{
protected $name;
protected $pass;
protected $roles;

public function __construct($name, $pass, $roles )
{
    $this->name = $name;
    $this->pass = $pass;
    $this->roles= $roles;
}

public function getName()
{
    return $this->name;
}

public function getPass()
{
    return $this->pass;
}

public function sayHello(){
    echo ($this->name.' Hello!');
}
}

class Moder extends User {



    public function __construct($roles)
    {
        parent::__construct('Pascal',666, 'cat');
        $this->roles = $roles;
    }

    public function getRoles()
    {
        return $this->roles;
    }


    public function setRoles($roles): void
    {
        $this->roles = $roles;
    }

}

$moder = new Moder('Enya','qwerty');

$moder->setRoles('all');
$moder->sayHello();