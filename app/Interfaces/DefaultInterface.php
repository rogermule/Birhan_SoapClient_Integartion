<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/11/20
 * Time: 7:01 PM
 */

namespace App\Interfaces;


interface DefaultInterface
{
    public function getItem($id, $queryData=null);
    public function getItemBy($queryData=null);
    public function getAll($queryData=null);
    public function getAllPaginated($pagination_size=10, $queryData=null);
    public function addNew($inputData);
    public function updateItem($id, $updateData, $queryData=null);
    public function updateItemBy($queryData, $updateData);
    public function deleteItem($id, $queryData=null);
    public function deleteItemBy($queryData=null);
}