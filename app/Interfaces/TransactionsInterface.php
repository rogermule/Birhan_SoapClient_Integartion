<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/11/20
 * Time: 7:04 PM
 */

namespace App\Interfaces;


interface TransactionsInterface extends DefaultInterface
{

    public function addFromSoap($inputData);

}