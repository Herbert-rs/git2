<?php

class test2
{

    private $name;
    private $code;

public function __construct($name,$code)
{
    $this-> name = $name;
    $this -> code = $code;

}

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name = htmlspecialchars($_POST['category-name']);
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
    public function getCode()
    {
        return $this->code = htmlspecialchars($_POST['category-code']);
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }


}


?>