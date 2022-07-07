<?php

// отвечает за хранение данных о товаре
class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;

    public function __construct(string $title, string $firstName,
                                string $mainName, float $price)
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
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

    public function getSummaryLine(): string
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}

// данные о музыкальной продукции
class CDProduct extends ShopProduct
{
    public $playLength;
    public function __construct(string $title, string $firstName,
                                string $mainName, float $price, float $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }
    /**
     * @return int
     */
    public function getPlayLength(): int
    {
        return $this->playLength;
    }

    public function getSummaryLine(): string
    {
        $base = parent::getSummaryLine();
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
}

//данные о книгах
class BookProduct extends ShopProduct
{
    public $numPages;
    public function __construct(string $title, string $firstName,
                                string $mainName, float $price, int $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }
    /**
     * @return int
     */
    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }

    public function getSummaryLine(): string
    {
        $base = parent::getSummaryLine();
        $base .= ": {$this->numPages} стр.";
        return $base;
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

$product1 = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', 5.99);
$product2 = new ShopProduct('Классическая музыка', 'Антонио', 'Вивальди', 10.99);
print "Автор: {$product1->getProducer()}" . PHP_EOL;
print "Композитор: {$product2->getProducer()}" . PHP_EOL;
$cdProduct = new CDProduct('Лунная соната', 'Иоганн', 'Бетховен', 11.25, 6.11);
$writer = new ShopProductWriter();
$writer->write($cdProduct);

print($cdProduct->getSummaryLine());

//пример стандартного значения аргумента устанавливаемого по умолчанию.
// так делается, если нужно наложить ограничение на тип аргумента
class ConfReader
{
    public function getValues(array $default = null)
    {
        $values = [];
        //выполнить действия для получения новых значений
        // Добавить переданные значения
        // (результат всегда является массивом)
        $values = array_merge($default, $values);
        return $values;
    }
}

// смешанные типы
// синтаксический сахар PHP 8.0
// тип mixed означает, что значение аргументы может быть любым возможным типом
class StorageMixed
{
    public $key;
    public $value;
    public function __construct(string $key, mixed $value)
    {
        // Действия с $key, $value
        $this->key = $key;
        $this->value = $value;
    }
}
//$storageMixed = new StorageMixed(1564564, ['Evgeniy', 'Ryndya']);
//var_dump($storage->key);
//var_dump($storage->value);