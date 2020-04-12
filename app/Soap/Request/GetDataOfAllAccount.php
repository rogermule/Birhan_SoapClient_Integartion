<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/20
 * Time: 6:54 PM
 */

namespace App\Soap\Request;


class GetDataOfAllAccount
{

    protected $DateFrom;
    protected $DateTo;

    /**
     * GetDataOfAllAccount constructor.
     * @param $DateFrom
     * @param $DateTo
     */
    public function __construct($DateFrom, $DateTo)
    {
        $this->DateFrom = $DateFrom;
        $this->DateTo = $DateTo;
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