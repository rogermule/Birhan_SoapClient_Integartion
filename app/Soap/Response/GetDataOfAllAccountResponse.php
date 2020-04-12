<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/20
 * Time: 6:52 PM
 */

namespace App\Soap\Response;


class GetDataOfAllAccountResponse
{

    protected $GetDataOfAllAccountResult;


    /**
     * GetDataOfAllAccountResponse constructor.
     */
    public function __construct($GetDataOfAllAccountResult)
    {
        $this->GetDataOfAllAccountResult = $GetDataOfAllAccountResult;
    }

    /**
     * @return mixed
     */
    public function getGetDataOfAllAccountResult()
    {
        return $this->GetDataOfAllAccountResult;
    }


    /**
     * @param mixed $GetDataOfAllAccountResult
     */
    public function setGetDataOfAllAccountResult($GetDataOfAllAccountResult): void
    {
        $this->GetDataOfAllAccountResult = $GetDataOfAllAccountResult;
    }

}