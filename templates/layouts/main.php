<!DOCTYPE html>
<html lang="en">

<head>
  {% block head %}
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/template.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <title>Titenonces {% block title %}{% endblock %}</title>
  {% endblock %}
</head>

<body>
  <div class="navbar-wrapper">
    <div class="navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse  collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index">Home</a>
            </li>
            <li><a href="about">About</a>
            </li>
            <li><a href="annonces">Annonces</a>
            </li>
            <li><a href="contact">Contact</a>
            </li>
            {% if session.user %}

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{session.user.mail}} {{session.user.pseudo}} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="user/profil">Profil</a></li>
                <li><a href="logout">Déconnexion</a></li>
              </ul>
            </li>
            {% else %}
            <li><a href="login">Connexion</a>
            </li>
            <li><a href="register">Inscription</a>
            </li>
            {% endif %}
          </ul>
          <ul class="pull-right nav navbar-nav navbar-left">

          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="">
    <div class="">
      <img height="" style="width: 100%;height: auto;" src="images/header-banner.png"/>
    </div>
  </div>

  <div class="inside-banner">
    <div class="container">
      {% block breadcrumbs %}{% endblock %}
      <h2> {% block pageTitle %}Home{% endblock %}</h2>
    </div>
  </div>

  <div>
    {% block content %}{% endblock %}
  </div>


  <div id="footer">
    {% block footer %}
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3">
            <h4>Information</h4>
            <ul class="row">
              <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a>
              </li>
              <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a>
              </li>
              <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a>
              </li>
              <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-sm-3">
            <h4>Newsletter</h4>
            <p>Get notified about the latest properties in our marketplace.</p>
            <form class="form-inline" role="form">
              <input type="text" placeholder="Enter Your email address" class="form-control">
              <button class="btn btn-success" type="button">Notify Me!</button>
            </form>
          </div>

          <div class="col-lg-3 col-sm-3">
            <h4>Follow us</h4>
            <a href="#">
              <img src="images/facebook.png" alt="facebook">
            </a>
            <a href="#">
              <img src="images/twitter.png" alt="twitter">
            </a>
            <a href="#">
              <img src="images/linkedin.png" alt="linkedin">
            </a>
            <a href="#">
              <img src="images/instagram.png" alt="instagram">
            </a>
          </div>

          <div class="col-lg-3 col-sm-3">
            <h4>Contact us</h4>
            <p><b>Bootstrap Realestate Inc.</b>
              <br>
              <span class="glyphicon glyphicon-map-marker"></span> 19 rue de la minette 78700 Conflans ste Honorine
              <br>
              <span class="glyphicon glyphicon-envelope"></span> hello@titenonce.com
              <br>
              <span class="glyphicon glyphicon-earphone"></span> 0 666 222 069</p>
          </div>
        </div>
        <p class="copyright">Copyright 2013. All rights reserved.</p>
      </div>
    </div>

    <!-- Modal -->
    <div id="loginpop" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="row">
            <div class="col-sm-6 login">
              <h4>Login</h4>
              <form class="" role="form">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword2">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
              </form>
            </div>
            <div class="col-sm-6">
              <h4>New User Sign Up</h4>
              <p>Join today and get updated with all the properties deal happening around.</p>
              <button type="submit" class="btn btn-info" onclick="window.location.href='register.php'">Join Now</button>
            </div>

          </div>
        </div>
      </div>
    </div>
    {% endblock %}
  </div>

  <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="script/script.js" type="text/javascript"></script>
</body>
