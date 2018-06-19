<?php $this->load->view('Include/Admin/vHeader') ?>
  <style type="text/css">
        #login {
          color: black;
          font-family: Arial;
          display: block;
          padding-left: 100px;
          margin-bottom: 5%;
        }
        label{
          font-family: Arial;
          font-size: 15px;
          color: black;
          display: block;
        }
  </style>

  <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top" style="border: ">
      <div class="container">
        <a class="navbar-brand" href="#">DOKTA</a>
      </div>
    </nav>

  <!-- LOGIN -->
	<div id="login">
      <div class="row">  
        <div class="col-md-7">
          <div style="margin-top: 70px; width:50%; height: 50%;">
            <h2 style="padding-left: 10px padding-right: 20px">Admin</h2>
            <div style="width: 1100px; border: 100px"><hr></div>
              <div class="form-group" style="margin-top: 60px">
                <label for="inputUsername3" class="col-sm-4 control-label">Username</label> 
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="username2">
                  </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" name="password2">
                </div>
              </div>            
              <div class="form-group" style="padding-left: 50px">
                <div class="col-sm-offset-4 col-sm-10" style="margin-right: 100px">
                  <button type="submit" class="btn btn-default" style="width: 100px">Login</button> 
                </div>
              </div>
          </div> 
        </div>
      </div>
    </div>

<?php $this->load->view('Include/Admin/vFooter'); ?>