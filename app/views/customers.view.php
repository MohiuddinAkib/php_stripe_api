{% extends "layouts/main.view.php" %}

{% block content %}
  <table class="table table-striped">
    <thead>
      <tr>
        <th>CustomerID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      {% for customer in customers %}
      <tr>
        <td>{{ customer.id }}</td>
        <td>{{ customer.first_name }} {{ customer.last_name }}</td>
        <td>{{ customer.email }}</td>
        <td>{{ customer.created_at|date("m/d/Y") }}</td>
      </tr>
      {% endfor %}
    </tbody>
  </table>
  <a class="btn btn-link" href="{{ URLROOT }}/">Pay page</a>
{% endblock %}