<?php

abstract class Account
{
    //   Your code here
    protected $successor;
    protected $balance;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }

    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)){
            echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, get_called_class());
        } else if ($this->successor) {
            echo sprintf('Cannot pay using %s. Proceeding ..' . PHP_EOL, get_called_class());
            $this->successor->pay($amountToPay); 
        } else {
            throw new Exception('None of the accounts have enough balance');
        }
    }

      
}

class Bank extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

class Paypal extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

class Bitcoin extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
