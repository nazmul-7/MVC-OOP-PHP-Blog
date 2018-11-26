
 <div class="roundbox"  <?php if(session::get("login") == true){ echo'style="height: 468px;"'; } ?> ><?php 
  if (session::get("msg") != false) {
    echo '<div class="alert alert-success" role="alert">'.session::get("msg").'...</div>';
    session::unset('msg');
    }?>
  <div class="userbox">
    <div class="title-photo">
          <?php $iii='<img src="'.BASE_URL.'/images/andu.png" class="img-thumbnail imgpro" alt="Cinque Terre" >';
          foreach ($allinfo as  $value) {
            if($value['status'] == 0){
                $iii='<img  src="'.BASE_URL.'/images/andu.png" class="img-thumbnail imgpro"  alt="Cinque Terre"  >';}
            else {$dfilename = "images/profile".$value['userid']."*";
                  $dfileinfo =glob($dfilename);
                  $dfileext = explode(".",$dfileinfo[0]);
                  $dfileactualext = $dfileext[1];
                  $iii='<img src="'.BASE_URL.'/images/profile'.$value['userid'].'.'.$dfileactualext.'" class="img-thumbnail" alt="Cinque Terre" style="margin: 5px 25px;" >';}
                        

                        
          }
          echo $iii;?>
          <div class='pinfo'>
 
      <?php foreach ($allinfo as $value) { ?>
      <?php if(session::get("login") == true){
              if(session::get("userid") == $value["userid"] ){
                $post='<a href=" '.BASE_URL.'/index/addarticle/'.$value['userid'].'"><button type="button" class="btn btn-success btn-lg  "><strong>Write Article</strong></button></a>';
                if(session::get("status")== false){
                  echo '<form action="'.BASE_URL.'/user/proupload" method="post" enctype="multipart/form-data">
                   <p>
                    <input type="hidden" name="userid" value="'.$value["userid"].'">
                    <label>Upload Profile Picture: </label>
                    <input type="file" name="file" id="filename"> 
                  </p>
                  <p>
                    <button type="submit" name="submit">upload</button>
                  </p>

                  </form>';
                  }
                else{
                  echo '<form action="'.BASE_URL.'/user/proupload" method="post" enctype="multipart/form-data">
                    <p>
                      <input type="hidden" name="userid" value="'.$value["userid"].'">
                      <label>Change Profile Picture: </label>
                      <input type="file" name="file" id="filename"> 
                    </p>
                    <p>
                      <button type="submit" name="submit">Change</button>
                    </p>
                    </form>
                    <form action="'.BASE_URL.'/user/deletepic/" method="post" >
                      <p style="margin-bottom: 5px;">
                        <input type="hidden" name="userid" value="'.$value["userid"].'">
                        <button type="submit" name="submit">Delete Picture</button>
                      </p>
                    </form>';}}} ?>
                  </div>

      
    </div>
    <div class="info" style="position: relative;">   
      <h1> <?php echo $value["name"]; ?> </h1>
        <ul>
               
          <li>
            <p>I report on the business of sports for Forbes' SportsMoney group. My sports interests range from baseball and hockey to cricket and Formula One, though I specialize mainly in college football and basketball. Studying sports business interests me both as a writer and a sports fan, and I've found that digging through financial reports is often just as enjoyable as combing a box score</p>
          </li>
          <li role="presentation">
            <img style="vertical-align:middle;margin-right:0.5em;" src="<?php echo BASE_URL; ?>/images/mail.png"><a href='<?php echo BASE_URL."/post/postbyid/".$value["userid"] ?>'>Total Article <span class="badge mybadge ">(<?php echo $countpost[0]['COUNT(postid)']; ?>)</span></a>
          </li>               
          <li>
            <img style="vertical-align:middle;margin-right:0.5em;" src="<?php echo BASE_URL; ?>/images/mail.png"></a> <?php echo $value["email"]; ?>
          </li>
        </ul>
        <?php if (isset($post)) { echo $post; } ?>
      </div>
    </div>
  </div>
<h2><center>Article</center></h2><hr>
<?php }  
echo '<div class=" postinfo " >';
  foreach ($wpost as  $value) {
    $con=$value['content'];
    if (strlen($con)>500) {
      $con = substr($con, 0,500);
    }
    echo '<h4><a class="hhpack" href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" ?>'.$value['title'].'</a></h4>
    <p>Category :<a href= "'.BASE_URL.'/post/category/'.$value['category'].'"?>'.$value['category'].'</a></p>
      <img style="margin:0px;"src="'.BASE_URL.'/images/post'.$value['postid'].'.jpg" class="img-thumbnail" alt="Cinque Terre" width="350" height="350">
      <div>
              '.$con.'
              </div>
    <p><a class="btn btn-secondary" href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" role="button">View details &raquo;</a></p>';
  
  }
echo '</div>';?>


              
          

