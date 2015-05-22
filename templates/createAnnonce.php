{% extends "layouts/main.php" %}
{% import 'layouts/forms.html' as forms %}
{% block title %}>Création annonce{% endblock %}
{% block head %} {{ parent() }} {% endblock %}
{% block breadcrumbs %}  <span class="pull-right">Création annonce </span> {% endblock %}
{% block pageTitle %}Création annonce{% endblock %}
{% block content %}
<div class="container">
  <div class="spacer">
    <div class="row ">
      <div class="col-lg-6 col-sm-6 col-sm-offset-3 col-md-offset-3 ">
        <form action="createAnnonce" method="post">
          {{ forms.input('title',annonce,'text',errors) }}
          {{ forms.input('price',annonce,'text',errors) }}
          {{ forms.textArea('content',annonce,'text',errors) }}
          <div class="form-group">
            <button type="submit" class="btn btn-success" name="Submit">Création de l'annonce</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{% endblock %}
