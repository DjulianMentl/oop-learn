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

$product1 = new ShopProduct();
$product1->producerMainName = "Рындя";
$product1->producerFirstName = "Евгений";

print "Автор: {$product1->getProducer()}";
