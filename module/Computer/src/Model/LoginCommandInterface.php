<?php

namespace Computer\Model;
use Computer\Model\Login;

interface LoginCommandInterface
{
    public function createLogin(Login $login);
}