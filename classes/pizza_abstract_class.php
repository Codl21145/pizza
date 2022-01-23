<?php

abstract class Pizza

{

    public float $s_price;
    public float $p_price;

    public function __construct(float $p_price, float $s_price)
    {
        $this->p_price = $p_price;
        $this->s_price = $s_price;
    }

    public function calcPrice(): float
    {
        return $this->p_price + $this->s_price;
    }

    abstract public function getPrice();
}