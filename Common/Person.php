<?php

namespace Religions\Common;

class Person
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var boolean
     */
    protected $gender;

    public function __construct($gender)
    {
        $this->setGender($gender);
    }

    public function setGender($gender)
    {
        $this->gender = (bool)$gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}
