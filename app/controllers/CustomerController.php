<?php

namespace App\controllers;

use App\models\Customer;

class CustomerController
{
    private $model;

    public function __construct()
    {
        $this->model = new Customer();
    }

    public function index()
    {
        $customers = $this->model->all();
        $page_title = 'view customers';
        view('customers', compact('customers', 'page_title'));
    }
}
