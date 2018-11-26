<nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Home</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
          
          <li class="nav-item dropdown">
            <label class="nav-link dropdown-toggle"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</label>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <?php foreach ($allcategory as  $value) {
               
               ?>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>/post/category/<?php echo  $value['category']; ?>"><?php echo $value['category'];?></a>

              <?php } ?>

            </div>
          </li>
        </ul>
        <?php session::start();?>

          
         
         
              
         <?php
         $lll='<img src="'.BASE_URL.'/images/guest.png" width="50" height="40"   >';
         $u="";

         if(session::get("login") == true)
         {
       
          if(session::get("status")==true)
            $lll='<img src="'.BASE_URL.'./images/profile'.session::get("userid").'.jpg"  style="padding: 1px 2px !important;" width="50" height="40">';
          $bbb='<a href=" '.BASE_URL.'/index/writerwall/'.session::get("userid").'"><button type="button" class="btn btn-info  navbar-btn">'.session::get("username").'</button></a>';}
          else {

            $bbb='<button type="button" class="btn btn-primary disabled  navbar-btn dis ">Guest</button>';
            $u='<a href=" '.BASE_URL.'/index/signup"><button type="button" class="btn btn-primary  navbar-btn">Sign Up</button></a>';}
          
          ?>
             <?php echo $lll; ?>
          <?php echo $bbb; ?>


        <?php
         if(session::get("login") == true)
         {
          $str='<a href=" '.BASE_URL.'/user/logout"><button type="button" class="btn btn-primary  navbar-btn">Log out</button></a>';}
          else {
            $str='<a href=" '.BASE_URL.'/index/signin"><button type="button" class="btn btn-primary  navbar-btn">Login</button></a>';}
          
          ?>
        <?php echo $str; ?>
        <?php echo $u; ?>
        <form class="form-inline my-2 my-lg-0" method ='post' action = "<?php echo BASE_URL; ?>/post/conbysearch">
          <input class="form-control mr-sm-2" type="text" name = 'keyword'  placeholder="Search">
          <button class="btn btn-primary my-2 my-sm-0 mybtn" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container">
            <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <p class="float-right hidden-md-up">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
          </p>