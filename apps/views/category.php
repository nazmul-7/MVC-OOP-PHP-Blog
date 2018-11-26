
          
            



            
            <?php 
 $i=0;

 foreach ($categorypost as  $value) {
  $i++;
  $con=$value['content'];
  if (strlen($con)>300) {
    $con = substr($con, 0,300);
  }
  if($i==1){
    echo ' <h1>'.$value['category'].'</h1>
    <div class="jumbotron">
            <h1><a href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" ?>'.$value['title'].'</a></h1>
            <p>Writer:<a href= "'.BASE_URL.'/index/writerwall/'.$value['userid'].'"?>'.$value['name'].'</a></p>
            <img src="'.BASE_URL.'/images/post'.$value['postid'].'.jpg" class="img-thumbnail" alt="Cinque Terre" width="350" height="350">
            '.$con.'
            <p><a class="btn btn-secondary" href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" role="button">View details &raquo;</a></p>
          </div>

          <div class="row">';

  }
  else {
    echo '<div class="col-6 col-lg-4 mypost">
              <h4><a class="hpack" href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" ?>'.$value['title'].'</a></h4>
              <p style="
    display: block;
    overflow: hidden;
   
">Writer:<a href= "'.BASE_URL.'/index/writerwall/'.$value['userid'].'"?>'.$value['name'].'</a></p>
              <img src="'.BASE_URL.'/images/post'.$value['postid'].'.jpg" class="img-thumbnail" alt="Cinque Terre" width="350" height="350">
              '.$con.'
              <p><a class="btn btn-secondary" href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" role="button" style="
    display: block;
    overflow: hidden;
">View details &raquo;</a></p>
            </div><!--/span-->';

  }
 }

 echo "</div><!--/row-->";
            ?>
            

      

              