<!DOCTYPE html>
<html lang="en">
<head>
{% include 'templates/partials/main/head.php' %}
</head>
<body>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    {% include 'templates/partials/main/sidebar.php' %}
    <!-- End Sidebar -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <!--Navbar-->
      {% include 'templates/partials/main/navbar.php' %}
      <!--End Navbar-->

      <!--==================================== CONTENT ======================================-->
      <div class="container-fluid">
        {% block breadcrumb %}

        {% endblock %}
        {% block content %}

        {% endblock %}
      </div>
      <!--================================ END CONTENT ======================================-->
      
    </div>
  </div>
  {% include 'templates/partials/main/feet.php' %}
</body>

</html>
