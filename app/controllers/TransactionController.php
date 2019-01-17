<?php

namespace App\controllers;

use App\models\Transaction;

class TransactionController
{
    private $model;

    public function __construct()
    {
        $this->model = new Transaction();
    }

    public function index()
    {
        $transactions = $this->model->all();
        $page_title = 'view transactions';
        view('transactions', compact('transactions', 'page_title'));
    }
}
