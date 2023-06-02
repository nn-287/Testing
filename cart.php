<?php

class cart
{
    private string $cartname;

    private string $type;  //Medicines or tools(i.e. syringe,etc.)

    public float $cartprice = 0;

    public float $componentprice;
    public static float $tax = 1.2;

//    public function settype()
//    {
//        return $this->type;
//    }
//
//    public function gettype($type)
//    {
//        $this->type = $type;
//    }

    public function setname()
    {
        return $this->cartname;
    }

    public function getname($name)
    {
        $this->cartname = $name;
    }


//    public function cartType(string $type)
//    {
//        $this->type = $type;
//
//        if($type=='Medecine')
//        {
//            $this->cartprice = 50;
//        }
//        else
//        {
//            $this->cartprice = 100;
//        }
//
//
//
//    }
    public function getNetprice($componentprice):float
    {
        $this->componentprice  = $componentprice;

        $k = $this->componentprice + $this->cartprice;

        return self::$tax * $k ;
    }


    public function getNettprice(float $componentprice)
    {
        $this->componentprice = $componentprice;

//        $k = $this->componentprice + $this->cartprice;

        return self::$tax * $this->componentprice ;
    }



}