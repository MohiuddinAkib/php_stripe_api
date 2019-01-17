{% extends "layouts/main.view.php" %}

{% block content %}
    <h2 class="mb-4 text-center">Intro to react course [$50]</h2>
    <form action="{{ URLROOT }}/charge" method="POST" id="payment-form">
        <div class="form-row">
            <input type="text" class="form-control stripeElement mb-3 stripeElement--empty" placeholder="First Name" name="first_name">

            <input type="text" class="form-control stripeElement mb-3 stripeElement--empty" placeholder="Last Name" name="last_name">

            <input type="email" class="form-control stripeElement mb-3 stripeElement--empty" placeholder="Email Address" name="email">

            <div id="card-element" class="form-control">
            <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button class="btn btn-primary btn-block mt-4">Submit Payment</button>
    </form>
{% endblock %}