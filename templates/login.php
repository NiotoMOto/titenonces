{% extends "layouts/main.php" %}
{% block title %}Connexion{% endblock %}
{% block head %} {{ parent() }} {% endblock %}
{% block breadcrumbs %}  <span class="pull-right">Connexion </span> {% endblock %}
{% block pageTitle %}Connexion{% endblock %}
{% block content %}
<div class="container">
  <div class="spacer">
    <div class="row ">
      <div class="col-lg-6 col-sm-6 col-sm-offset-3 col-md-offset-3 ">
        {% if(session.loginError) %}
        <p class="text-danger"> Login ou mot de passe invalide</p>
        {% endif %}
        <form action="login" method="post">
          <input type="text" required name="mail" class="form-control" placeholder="Pseudo / mail">
          <input type="password" required name="password" class="form-control" placeholder="Mot de passe">
          <button type="submit" class="btn btn-success" name="Submit">Connexion</button>
        </form>
      </div>
    </div>
  </div>
</div>
{% endblock %}
