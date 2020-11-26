<?php

class QueryBuilder
{
    // Your code here
    private $select = [];
    private $from = [];
    private $where = [];

    // public function __construct(){}

    public function select(...$args): QueryBuilder 
    {
        $this->select = $args;
        return $this;
    }

    public function from($table, $alias = false): QueryBuilder 
    {
        $this->from[] = "$table AS $alias";
        return $this;
    }

    public function where(...$args): QueryBuilder 
    {
        $this->where = $args;
        return $this;
    }

    public function __toString()
    {
        return 'SELECT' . implode(", ", $this->select) . 'FROM' . implode(", ", $this->from) . 'WHERE' . implode(", ", $this->where);
    }
    
}