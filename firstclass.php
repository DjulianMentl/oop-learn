<?php

// отвечает за хранение данных о товаре
class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;

    public function __construct(string $title, string $firstName, string $mainName, float $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}

//отвечает за вывод данных о товаре
class ShopProductWriter
{
    public function write(ShopProduct $shopProduct)
    {
        $str = $shopProduct->title . ": "
            . $shopProduct->getProducer()
            . " (" . $shopProduct->price . ") \n";
        print $str;
    }
}

class Wrong
{

}

$product1 = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', '21');
//print "Автор: {$product1->getProducer()}";
$writer = new ShopProductWriter();
$writer->write($product1);