<?php

namespace Computer\Model;


class Login
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $title
     * @param string $text
     * @param int|null $id
     */
    public function __construct($username, $password, $id = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}