{% extends "layouts/main.php" %}
{% block title %}Home{% endblock %}
{% block head %} {{ parent() }} {% endblock %}
{% block breadcrumbs %}  <span class="pull-right">Home</span> {% endblock %}
{% block pageTitle %}Home{% endblock %}
{% block content %}
<div class="container">
  <div class="properties-listing spacer">
    <div class="row">
      <div class="col-lg-3 col-sm-4 ">
        <div class="search-form">
          <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
          <input type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
            <div class="col-lg-5">
              <select class="form-control">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Price</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <select class="form-control">
                <option>Property Type</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
            </div>
          </div>
          <button class="btn btn-primary">Find Now</button>
        </div>
        <div class="hot-properties hidden-xs">
          <h4>Hot Properties</h4>
          <div class="row">
            <div class="col-lg-4 col-sm-5">
              <img src="public/images/properties/1.jpg" class="img-responsive img-circle" alt="properties">
            </div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-5">
              <img src="public/images/properties/1.jpg" class="img-responsive img-circle" alt="properties">
            </div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-5">
              <img src="public/images/properties/1.jpg" class="img-responsive img-circle" alt="properties">
            </div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-5">
              <img src="public/images/properties/1.jpg" class="img-responsive img-circle" alt="properties">
            </div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-sm-8">
        <div class="col-lg-4 col-sm-6">
          <div class="properties">
            <div class="image-holder">
              <img src="public/images/services/ages.png" class="img-responsive" alt="properties">
              <div class="status sold">Sold</div>
            </div>
            <h4><a href="property-detail.php">Royal Inn</a></h4>

            <a class="btn btn-primary" href="property-detail.php">View Details</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="properties">
            <div class="image-holder">
              <img src="public/images/services/ages.png" class="img-responsive" alt="properties">
              <div class="status sold">Sold</div>
            </div>
            <h4><a href="property-detail.php">Royal Inn</a></h4>

            <a class="btn btn-primary" href="property-detail.php">View Details</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="properties">
            <div class="image-holder">
              <img src="public/images/services/ages.png" class="img-responsive" alt="properties">
              <div class="status sold">Sold</div>
            </div>
            <h4><a href="property-detail.php">Royal Inn</a></h4>

            <a class="btn btn-primary" href="property-detail.php">View Details</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="properties">
            <div class="image-holder">
              <img src="public/images/services/ages.png" class="img-responsive" alt="properties">
              <div class="status sold">Sold</div>
            </div>
            <h4><a href="property-detail.php">Royal Inn</a></h4>

            <a class="btn btn-primary" href="property-detail.php">View Details</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="properties">
            <div class="image-holder">
              <img src="public/images/services/ages.png" class="img-responsive" alt="properties">
              <div class="status sold">Sold</div>
            </div>
            <h4><a href="property-detail.php">Royal Inn</a></h4>

            <a class="btn btn-primary" href="property-detail.php">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
