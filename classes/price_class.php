<?php

class Price extends Pizza
{
    public function getPrice(): float
    {
        return $this->calcPrice();
    }
}