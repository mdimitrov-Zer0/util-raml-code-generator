<?php

namespace Paysera\Test\AuthClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class Credentials extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->get('username');
    }
    /**
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->set('username', $username);
        return $this;
    }
    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->get('password');
    }
    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->set('password', $password);
        return $this;
    }
}
