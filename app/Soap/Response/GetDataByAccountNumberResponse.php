<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/11/20
 * Time: 1:05 PM
 */

namespace App\Soap\Response;


class GetDataByAccountNumberResponse
{

    protected $GetDataByAccountNumberResult;

    /**
     * GetDataByAccountNumberResponse constructor.
     * @param $GetDataByAccountNumberResult
     */
    public function __construct($GetDataByAccountNumberResult)
    {
        $this->GetDataByAccountNumberResult = $GetDataByAccountNumberResult;
    }


    /**
     * @return mixed
     */
    public function getGetDataByAccountNumberResult()
    {
        return $this->GetDataByAccountNumberResult;
    }

    /**
     * @param mixed $GetDataByAccountNumberResult
     */
    public function setGetDataByAccountNumberResult($GetDataByAccountNumberResult): void
    {
        $this->GetDataByAccountNumberResult = $GetDataByAccountNumberResult;
    }


}