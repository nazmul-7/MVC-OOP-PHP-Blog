<?php 
              if (session::get("msg") != false) {
                echo '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Well done!</strong>'.session::get("msg").'<br />
        </div>';
                 session::unset('msg');
              } 

              if (session::get("rmsg") != false) {
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oh snap!</strong>'.session::get("rmsg").'<br />
        </div>';
                 session::unset('rmsg');
              } 

        
              

              ?>

          <form class="form-signin" action="http://localhost/blog/user/userlonin" method= "post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputusername" class="sr-only">Username</label>
        <input type="text" id="inputusername" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" value="on"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br />
        <p><strong> Don't have any account. </strong> <a href="<?php echo BASE_URL; ?>/index/signup"> Click Here !</a></p>   
      </form>
          


