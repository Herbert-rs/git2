<?php
/**
 * Created by PhpStorm.
 * User: herbert
 * Date: 25/02/19
 * Time: 15:59
 */
class test {
private $name;
private $sku;
private $price;
private $quantity;
private $categories;
private $description;


public function __construct($name, $sku, $price, $quantity, $categories, $description)
{
    $this-> name = $name;
    $this-> sku = $sku;
    $this-> price = $price;
    $this-> quantity = $quantity;
    $this-> categories = $categories;
    $this-> description = $description;

}

/**
 * @return mixed
 */
public function getName()
{
    return $this->name = $_POST['name'];
}

/**
 * @param mixed $name
 */
public function setName($name)
{
    $this->name = $name;
}

/**
 * @return mixed
 */
public function getSku()
{
    return $this->sku = $_POST['sku'];
}

/**
 * @param mixed $sku
 */
public function setSku($sku)
{
    $this->sku = $sku;
}

/**
 * @return mixed
 */
public function getPrice()
{
    return $this->price = $_POST['price'];
}

/**
 * @param mixed $price
 */
public function setPrice($price)
{
    $this->price = $price;
}

/**
 * @return mixed
 */
public function getQuantity()
{
    return $this->quantity = $_POST['quantity'];
}

/**
 * @param mixed $quantity
 */
public function setQuantity($quantity)
{
    $this->quantity = $quantity;
}

/**
 * @return mixed
 */
public function getCategories()
{
    return $this->categories = $_POST ['category'];
}

/**
 * @param mixed $categories
 */
public function setCategories($categories)
{
    $this->categories = $categories;
}

/**
 * @return mixed
 */
public function getDescription()
{
    return $this-> description= $_POST['description'];
}

/**
 * @param mixed $description
 */
public function setDescription($description)
{
    $this->description = $description;
}



}

?>
