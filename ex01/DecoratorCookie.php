<?php
include_once('Cookie.php');

class CookieMacadamia implements Cookie
{
    //  Your code here

    protected $cookie;

    public function __construct(Cookie $cookie)
    {
        $this->cookie = $cookie;
    }

    public function getType()
    {
        return $this->cookie->getType() . ', ' . 'Macadamia';
    }

    public function getCalories()
    {
        return $this->cookie->getCalories() + 10;
    }
}

class CookieWhiteChocolate implements Cookie
{
    //  Your code here
    protected $cookie;

    public function __construct(Cookie $cookie)
    {
        $this->cookie = $cookie;
    }

    public function getType()
    {
        return $this->cookie->getType() .', ' . 'White Chocolate';
    }

    public function getCalories()
    {
        return $this->cookie->getCalories() + 20;
    }
}
