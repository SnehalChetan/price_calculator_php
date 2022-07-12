<?php

class Customer
{
    public int $id;
    public string $firstname;
    public string $lastname;
    public int $group_id;
    public int $fixed_discount;
    public int $variable_discount;

    public function __construct(string $firstname, string $lastname)
    {
        $this->id = $id;
        $this->name = $name;
    }


    // GET METHODS

    public function getId()
    {
        return  $this->id;
    }

    public function getFirstName()
    {
        return  $this->firstname;
    }

    public function getLastName()
    {
        return  $this->lastname;
    }

    public function getGroupId()
    {
        return  $this->group_id;
    }

    public function getFixedDiscount()
    {
        return  $this->fixed_discount;
    }

    public function getVariableDiscount()
    {
        return  $this->variable_discount;
    }

    // SET METHODS
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setFirstName(string $firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastName(string $lastname)
    {
        $this->lastname = $lastname;
    }

    public function setGroupId (int $group_id)
    {
        $this->group_id = $group_id;
    }

    public function setFixedDiscount(int $fixed_discount)
    {
        $this->fixed_discount = $fixed_discount;
    }

    public function setVariableDiscount(int $variable_discount)
    {
        $this->variable_discount = $variable_discount;
    }


}