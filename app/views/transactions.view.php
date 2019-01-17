{% extends "layouts/main.view.php" %}

{% block content %}
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Transaction ID</th>
        <th>Customer</th>
        <th>Product</th>
        <th>Amount</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      {% for transaction in transactions %}
      <tr>
        <td>{{ transaction.id }}</td>
        <td>{{ transaction.customer_id }}</td>
        <td>{{ transaction.product }}</td>
        <td>{{ transaction.amount | to_float }} {{ transaction.currency | upper }}</td>
        <td>{{ transaction.created_at | date("m/d/Y") }}</td>
      </tr>
      {% endfor %}
    </tbody>
  </table>
  <a class="btn btn-link" href="{{ URLROOT }}/">Pay page</a>
{% endblock %}