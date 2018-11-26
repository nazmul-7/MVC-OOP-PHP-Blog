
<?php

     if (session::get("error") != false) {
          foreach (session::get("error") as $value) {
            
          
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oh snap!</strong>'.$value.'<br />
        </div>';
                
              } 
               session::unset('msg');
            }

?>


          <form class="form-signin" action ="http://localhost/blog/user/userReg"  method="post">
        
          
        <h2 class="form-signin-heading">Please Registration!</h2>
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" name="name" class="form-control" placeholder="Name" value='<?php if(isset($_POST["name"])) echo $_POST["name"]; ?>' required autofocus>
        <label for="inputusername" class="sr-only">Username</label>
        <input type="text" id="inputusername" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputCPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputCPassword" name ="cpassword" class="form-control" placeholder="Confirm Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="terms"> Accept Our Terms.
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign Up</button>
      </form>
          


