

<?php 
 $i=0;

 foreach ($allpost as  $value) {
  $i++;
  $con=$value['content'];
  if (strlen($con)>300) {
    $con = substr($con, 0,300);
  }
  if($i==1){
    echo '<div class="jumbotron">
            <h1><a href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" ?>'.$value['title'].'</a></h1>
            <p>Category :<a href= "'.BASE_URL.'/post/category/'.$value['category'].'"?>'.$value['category'].'</a>         Writer:<a href= "'.BASE_URL.'/index/writerwall/'.$value['userid'].'"?>'.$value['name'].'</a></p>
            <img src="'.BASE_URL.'/images/post'.$value['postid'].'.jpg" class="img-thumbnail" alt="Cinque Terre" width="350" height="350">
            '.$con.'
            <p><a class="btn btn-secondary" href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" role="button">View details &raquo;</a></p>
          </div>

          <div class="row">';

  }
  else {
    echo '<div class="col-6 col-lg-4 mypost">
              <h4 style="display: block;overflow: hidden;"><a class="hpack"  href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" ?>'.$value['title'].'</a></h4>
              <p style="
    display: block;
    overflow: hidden;
   
">Category :<a href= "'.BASE_URL.'/post/category/'.$value['category'].'"?>'.$value['category'].'</a><br/>         Writer:<a href= "'.BASE_URL.'/index/writerwall/'.$value['userid'].'"?>'.$value['name'].'</a></p>
              <img src="'.BASE_URL.'/images/post'.$value['postid'].'.jpg" class="img-thumbnail" alt="Cinque Terre" width="350" height="350">
     
              <a>
              '.$con.'
              </a>

              <p><a class="btn btn-secondary" href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" role="button"  style="
    display: block;
    overflow: hidden;
">View details &raquo;</a></p>
            </div><!--/span-->';

  }
 }


 echo "</div><!--/row-->";
            ?>
            

   
        

