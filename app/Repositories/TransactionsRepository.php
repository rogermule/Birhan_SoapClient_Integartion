<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/11/20
 * Time: 7:04 PM
 */

namespace App\Repositories;


use App\Interfaces\TransactionsInterface;
use App\Models\Transaction;
use Illuminate\Support\Facades\Storage;

/**
 * Class TransactionsRepository
 * @package App\Repositories
 */
class TransactionsRepository extends DefaultRepository implements TransactionsInterface
{

    /**
     * @param $id
     * @param null $queryData
     */
    public function getItem($id, $queryData = null)
    {

    }

    /**
     * @param null $queryData
     */
    public function getItemBy($queryData = null)
    {
        // TODO: Implement getItemBy() method.
    }

    /**
     * @param null $queryData
     */
    public function getAll($queryData = null)
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param int $pagination_size
     * @param null $queryData
     */
    public function getAllPaginated($pagination_size = 10, $queryData = null)
    {
        // TODO: Implement getAllPaginated() method.
    }

    /**
     * @param $inputData
     */
    public function addNew($inputData)
    {
        // TODO: Implement addNew() method.
    }


    /**
     * @param $inputData
     * @return string
     */
    public function addFromSoap($inputData)
    {

        $json_response =  json_decode($inputData, true);
        Storage::put('file.txt', json_encode($json_response));

        for ($i =0; $i < count($json_response); $i++){

            $transaction_id = $json_response[$i]['Transaction_id'];
            $transaction_refrence_text = $json_response[$i]['Transaction_Refrence_Text'];

            $oldTransaction = Transaction::where('transaction_id', '=', $transaction_id)
                                ->orWhere('transaction_refrence_text', '=', $transaction_refrence_text)
                                ->get()->first();

            if($oldTransaction instanceof Transaction){
                print("Already in Database");
                continue;
            }

            $customer_id = $json_response[$i]['Customer_ID'];
            $account_number = $json_response[$i]['Account_Number'];
            $account_name = $json_response[$i]['Account_Name'];
            $transaction_date = $json_response[$i]['Transaction_Date'];
            $dr_cr_ind = $json_response[$i]['DR_CR_IND'];
            $transaction_refrence_text = $json_response[$i]['Transaction_Refrence_Text'];
            $transaction_description = $json_response[$i]['Transaction_Description'];
            $transaction_amount = $json_response[$i]['Transaction_Amount'];
            $statement_balance = $json_response[$i]['Statement_Balance'];
            $cleared_bal = $json_response[$i]['CLEARED_BAL'];
            $ledger_bal = $json_response[$i]['LEDGER_BAL'];
            $depositor_payee_name = $json_response[$i]['DEPOSITOR_PAYEE_NAME'];
            $depositor_phone = $json_response[$i]['DEPOSITOR_PHONE'];
            $deposited_for = $json_response[$i]['DEPOSITED_FOR'];
            $encodedmustunderstand = $json_response[$i]['EncodedMustUnderstand'];
            $encodedmustunderstand12 = $json_response[$i]['EncodedMustUnderstand12'];
            $mustunderstand = $json_response[$i]['MustUnderstand'];
            $actor = $json_response[$i]['Actor'];
            $role = $json_response[$i]['Role'];
            $didunderstand = $json_response[$i]['DidUnderstand'];
            $encodedrelay = $json_response[$i]['EncodedRelay'];
            $relay = $json_response[$i]['Relay'];

            $newTransaction = new Transaction();
            $newTransaction->transaction_id = $transaction_id;
            $newTransaction->customer_id = $customer_id;
            $newTransaction->account_number = $account_number;
            $newTransaction->account_name = $account_name;
            $newTransaction->transaction_date = $transaction_date;
            $newTransaction->dr_cr_ind = $dr_cr_ind;
            $newTransaction->transaction_refrence_text = $transaction_refrence_text;
            $newTransaction->transaction_description = $transaction_description;
            $newTransaction->transaction_amount = $transaction_amount;
            $newTransaction->statement_balance = $statement_balance;
            $newTransaction->cleared_bal = $cleared_bal;
            $newTransaction->ledger_bal = $ledger_bal;
            $newTransaction->depositor_payee_name = $depositor_payee_name;
            $newTransaction->depositor_phone = $depositor_phone;
            $newTransaction->deposited_for = $deposited_for;
            $newTransaction->encodedmustunderstand = $encodedmustunderstand;
            $newTransaction->encodedmustunderstand12 = $encodedmustunderstand12;
            $newTransaction->mustunderstand = $mustunderstand;
            $newTransaction->actor = $actor;
            $newTransaction->role = $role;
            $newTransaction->didunderstand = $didunderstand;
            $newTransaction->encodedrelay = $encodedrelay;
            $newTransaction->relay = $relay;

            $newTransaction->save();
        }

        print("Success");
        return "Success";
    }

    /**
     * @param $id
     * @param $updateData
     * @param null $queryData
     */
    public function updateItem($id, $updateData, $queryData = null)
    {
        // TODO: Implement updateItem() method.
    }

    /**
     * @param $queryData
     * @param $updateData
     */
    public function updateItemBy($queryData, $updateData)
    {
        // TODO: Implement updateItemBy() method.
    }

    /**
     * @param $id
     * @param null $queryData
     */
    public function deleteItem($id, $queryData = null)
    {
        // TODO: Implement deleteItem() method.
    }

    /**
     * @param null $queryData
     */
    public function deleteItemBy($queryData = null)
    {
        // TODO: Implement deleteItemBy() method.
    }

}