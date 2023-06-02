<?php
require 'cart.php';
class User
{
    private $id = '200445';
    private $password = 'abc@123';
//    private $name;
    private $email;
    public $cart;

    public function setId()
    {
        return $this->id;
    }

    public function getId($id)
    {
        if($id !== '')
        {
            return $this->id = $id;
        }
    }

    public function setpassword()
    {
        return $this->password;
    }

    public function getpassword($password)
    {
        if($password !== '')
        {
            return $this->password = $password;
        }
    }

    public function setemail()
    {
        return $this->email;
    }

    public function getemail($email)
    {
        if($email !== '')
        {
            return $this->email = $email;
        }

    }


    public function login($id,$passwrod)
    {
        if($id == $this->id && $passwrod == $this->password)
        {
            return "Logged in successfully";
        }

        return "Failed to login, Retry";
    }

    public function __construct()
    {
        $this->cart = new cart();

    }


//    public function RequireMedicine(string $t, float $k)
//    {
////        $cart->getname('Cart');
//
//        $this->cart->cartType($t);
//
//        return $this->cart->getNetPrice($k);
//    }

    public function getprice($p)
    {
        $this->cart->getNetPrice($p);
    }


}