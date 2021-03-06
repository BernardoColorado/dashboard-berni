{% extends 'templates/globals/user.php' %}

{% block content %}
    <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="card rounded-0">
          <div class="row no-gutters">

            <div class="col-lg-4 bg-white">
              <img class="card-img" src="{{ base_url() }}/img/south-park/sp-clyde.png" alt="">
            </div>

            <div class="col-lg-5 mx-auto">
              <div class="card-body">
                <h3 class="card-title text-center text-primary">LOGIN</h3>

                <form action="{{ base_url() }}/user/signin" method="post">

                  <div class="form-group mt-3">
                    <label class="text-secondary">User</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text text-white bg-primary">
                          <i class="fa fa-user"></i>
                        </div>
                      </div>
                      <input class="form-control rounded-0" type="text" name="nickname" required>
                    </div>
                    {% for error in errors.nickname %}
                    <small class="form-text text-danger">{{error}}</small>
                    {% endfor %}
                  </div>

                  <div class="form-group mt-3">
                    <label class="text-secondary">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text text-white bg-primary">
                          <i class="fa fa-key"></i>
                        </div>
                      </div>
                      <input class="form-control rounded-0" type="password" name="password" required>
                    </div>
                    {% for error in errors.password %}
                    <small class="form-text text-danger">{{error}}</small>
                    {% endfor %}                  </div>

                  <div class="form-group mt-4">
                    <button class="btn btn-primary btn-block rounded-0" type="submit">LOGIN</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
{% endblock %}


