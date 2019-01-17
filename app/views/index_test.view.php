<!-- Footer partial -->
<?php get_partials('header_test'); ?>
  <!-- Styles -->
  <link rel="stylesheet" href="<?php asset('css/style.css') ?>">
  <title>PHP stripe api - pay page</title>
</head>
<body>

  <form action="/charge" method="post" id="payment-form">
    <div class="form-row">
      <label for="card-element">
        Credit or debit card
      </label>
      <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
      </div>

      <!-- Used to display Element errors. -->
      <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
  </form>

  <!-- Scripts -->
  <script src="<?php asset('js/charge.js')?>"></script>

<!-- Footer partial -->
<?php get_partials('footer_test'); ?>