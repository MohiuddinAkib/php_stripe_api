{% extends "layouts/main.view.php" %}

{% block content %}
  <h2>Thank you for purchasing {{ product }}</h2>
  <hr>
  <p>Your transaction id is {{ tid }}</p>
  <p>Check your email foe more info</p>
  <p>
    <a class="btn btn-link" href="{{URLROOT}}/">Go back</a>
  </p>
{% endblock %}