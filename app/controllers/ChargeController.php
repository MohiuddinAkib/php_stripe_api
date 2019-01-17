<?php

namespace App\controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use App\models\Customer as DBcustomer;
use App\models\Transaction;

class ChargeController
{
    private $first_name;
    private $last_name;
    private $email;
    private $token;

    public function __construct()
    {
        if (request_method() === 'POST') {
            $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
            $this->first_name = $POST['first_name'];
            $this->last_name = $POST['last_name'];
            $this->email = $POST['email'];
            $this->token = $POST['stripeToken'];
        }
        

        Stripe::setApiKey("sk_test_bGsVK4BBgxFGETKwWxamKjpr");
    }

    public function createAndChargeCustomer()
    {
        // Create customer in stripe
        $customer = Customer::create([
          'email' => $this->email,
          'source' => $this->token
        ]);

        // Charge customer
        $charge = Charge::create([
          'amount' => 5000,
          'currency' => 'usd',
          'description' => 'Intro to React Course',
          'customer' => $customer->id
        ]);

        $customerData = [
            'id' => $charge->customer,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email
        ];

        $transactionData = [
            'id' => $charge->id,
            'customer_id' => $charge->customer,
            'product' => $charge->description,
            'amount' => $charge->amount,
            'currency' => $charge->currency,
            'status' => $charge->status
        ];

        // Add customer to DB
        $this->storeCustomerIntoDB($customerData);

        // Add transaction to DB
        $this->storeTransactionIntoDB($transactionData);

        // Redirect to success
        redirect("success&tid={$charge->id}&product={$charge->description}");
    }

    public function storeCustomerIntoDB($customerData)
    {
        $customer = new DBcustomer();
        $customer->addCustomer($customerData);
    }

    public function storeTransactionIntoDB($transactionData)
    {
        $transaction = new Transaction();
        $transaction->addTransaction($transactionData);
    }

    public function success()
    {
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        if (!empty($GET['tid']) && !empty($GET['product'])) {
            $page_title = 'Thank you';
            $product = htmlspecialchars($GET['product']);
            $tid = htmlspecialchars($GET['tid']);
        
            // Render our view
            view('success', compact('page_title', 'tid', 'product'));
        } else {
            redirect('');
        }
    }
}
