<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/11/20
 * Time: 1:04 PM
 */

namespace App\Soap\Request;


class GetDataByAccountNumber
{

    protected $Account_Number;
    protected $DateFrom;
    protected $DateTo;

    /**
     * GetDataByAccountNumber constructor.
     * @param $Account_Number
     * @param $DateFrom
     * @param $DateTo
     */
    public function __construct($Account_Number, $DateFrom, $DateTo)
    {
        $this->Account_Number = $Account_Number;
        $this->DateFrom = $DateFrom;
        $this->DateTo = $DateTo;
    }


    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->Account_Number;
    }

    /**
     * @param mixed $Account_Number
     */
    public function setAccountNumber($Account_Number): void
    {
        $this->Account_Number = $Account_Number;
    }

    /**
     * @return mixed
     */
    public function getDateFrom()
    {
        return $this->DateFrom;
    }

    /**
     * @param mixed $DateFrom
     */
    public function setDateFrom($DateFrom): void
    {
        $this->DateFrom = $DateFrom;
    }

    /**
     * @return mixed
     */
    public function getDateTo()
    {
        return $this->DateTo;
    }

    /**
     * @param mixed $DateTo
     */
    public function setDateTo($DateTo): void
    {
        $this->DateTo = $DateTo;
    }



}