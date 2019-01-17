<?php

use App\controllers\ChargeController;
use App\controllers\CustomerController;
use App\controllers\TransactionController;

if (getUrl() === 'charge' && request_method() === 'POST') {
    $chargeController = new ChargeController();
    $chargeController->createAndChargeCustomer();
} elseif (getUrl() === 'success') {
    $chargeController = new ChargeController();
    $chargeController->success();
} elseif (getUrl() === 'customers') {
    $customerController = new CustomerController();
    $customerController->index();
} elseif (getUrl() === 'transactions') {
    $transactionController = new TransactionController();
    $transactionController->index();
} else {
    $page_title = 'Pay page';
    // Render our view
    view('index', compact('page_title'));

    // require_once './app/views/index.view.php';
}
