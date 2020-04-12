<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/11/20
 * Time: 7:11 PM
 */

namespace App\Http\Controllers;


use App\Soap\Request\GetDataByAccountNumber;
use App\Soap\Request\GetDataOfAllAccount;
use App\Soap\Response\GetDataByAccountNumberResponse;
use App\Soap\Response\GetDataOfAllAccountResponse;
use Artisaninweb\SoapWrapper\SoapWrapper;

class DefaultController extends Controller
{

    protected $soapWrapper;

    /**
     * DefaultController constructor.
     * @param $soapWrapper
     */
    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
        $this->addServices();
    }


    public function addServices(){
        $this->soapWrapper->add('Birhan', function ($service) {
            $auth = [
                'privatekey' => env("BIRHAN_SERVER_KEY", '')
            ];
            $header = new \SoapHeader('http://tempuri.org/', 'AuthHeader', $auth);

            $service
                ->wsdl(env('BIRHAN_SERVER_URL', '').'/Services/ClientTransactions.asmx?WSDL')
                ->customHeader($header)
                ->trace(true)
                ->classmap([
                    GetDataOfAllAccount::class,
                    GetDataOfAllAccountResponse::class,
                    GetDataByAccountNumber::class,
                    GetDataByAccountNumberResponse::class,
                ]);
        });

    }

}