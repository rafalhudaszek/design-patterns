<?php

interface Observer
{
    public function update($price);
}

class Auto implements Observer
{
    private $price;
    private $name;

    public function __constructor($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function update($price)
    {
        $this->price = $price;
        echo "$this->price ";
    }

}

class Flats implements Observer
{
    private $price;
    private $name;

    public function __constructor($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function update($price)
    {
        $this->price = $price;
        echo "$this->price ";
    }

}

class Motor implements Observer
{
    private $price;
    private $name;

    public function __constructor($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function update($price)
    {
        $this->price = $price;
        echo "$this->price ";
    }

}