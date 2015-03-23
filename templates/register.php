{% extends "layouts/main.php" %} {% block title %}Inscription{% endblock %} {% block head %} {{ parent() }} {% endblock %} {% block breadcrumbs %} <span class="pull-right">Inscription </span> {% endblock %} {% block pageTitle %}Inscription{% endblock %}
{% block content %}
{% import 'layouts/forms.html' as forms %}
<div class="container">
  <div class="spacer">
    <div class="row ">
      <div class="col-lg-6 col-sm-6 col-sm-offset-3 col-md-offset-3 ">
{{dump(user)}}
        <form action="register" method="post">
            {{ forms.input('pseudo',user,'text',errors) }}
            {{ forms.input('password',user,'password',errors) }}
            {{ forms.input('nom',user,'text',errors) }}
            {{ forms.input('prenom',user,'text',errors) }}
            {{ forms.input('mail',user,'text',errors) }}
            {{ forms.input('tel',user,'text',errors) }}
            <div class="form-group">
              <button type="submit" class="btn btn-success" name="Submit">Inscription</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  {% endblock %}
