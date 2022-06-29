<?php

class ShopProduct
{
    public function __construct(
        public $title,
        public $producerMainName,
        public $producerFirstName,
        public $price
    ) {
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}

$product1 = new ShopProduct('Test', 'arg2', 'arg3', 5);
//$product1->producerMainName = "";
//$product1->producerFirstName = "";

print "Автор: {$product1->getProducer()}";
