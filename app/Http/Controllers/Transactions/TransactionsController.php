<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\DefaultController;
use App\Repositories\TransactionsRepository;
use App\Soap\Request\GetDataByAccountNumber;
use App\Soap\Request\GetDataOfAllAccount;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransactionsController extends DefaultController
{

    protected $transactionRepository;

    /**
     * Transactions constructor.
     * @param $transactionRepository
     */
    public function __construct(TransactionsRepository $transactionsRepository)
    {
        parent::__construct(new SoapWrapper());
        $this->transactionRepository = $transactionsRepository;
    }

    public function importAllAccountData(){

        $response =  $this->soapWrapper->call('Birhan.GetDataOfAllAccount',
            [
                new GetDataOfAllAccount('2020-01-30T09:00:00', '2020-10-30T09:00:00')
            ]
        );

        $this->transactionRepository->addFromSoap($response->getGetDataOfAllAccountResult());
    }

    public function importDataByAccount(){

        $response =  $this->soapWrapper->call('Birhan.GetDataByAccountNumber',
            [
                new GetDataByAccountNumber('1000062386638', '2020-01-30T09:00:00', '2020-10-30T09:00:00')
            ]
        );

        $this->transactionRepository->addFromSoap($response->getGetDataByAccountNumberResult());
    }

}
