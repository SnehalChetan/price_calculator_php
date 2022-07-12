<?php

class CustomerGroups

{
    public int $id;
    public string $name;
    public int $parent_id;
    public int $fixed_discount;
    public int $variable_discount;


    // GET METHODS

    public function getId()
    {
        return  $this->id;
    }

    public function getName()
    {
        return  $this->name;
    }

    public function getParentId()
    {
        return  $this->parent_id;
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

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setParentId (int $parent_id)
    {
        $this->parent_id = $parent_id;
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








