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

$product1 = new ShopProduct('arg1', 'arg2', 'arg3', 4);
print "Автор: {$product1->getProducer()}";
