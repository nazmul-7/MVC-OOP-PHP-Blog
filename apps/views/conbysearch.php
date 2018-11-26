<?php 
 
 echo '<div >';
 if(!empty($conbys)){

foreach ($conbys as  $value) {
  $con=$value['content'];
  if (strlen($con)>300) {
    $con = substr($con, 0,300);
  }
}


  echo '<h2><a href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" ?>'.$value['title'].'</a></h2>
              <p>Category :<a href= "'.BASE_URL.'/post/category/'.$value['category'].'"?>'.$value['category'].'</a></p>
              <img src="'.BASE_URL.'/images/post'.$value['postid'].'.jpg" class="img-thumbnail" alt="Cinque Terre" width="350" height="350">
              '.$con.'
              <p><a class="btn btn-secondary" href="'.BASE_URL.'/index/postdetails/'.$value['postid'].'" role="button">View details &raquo;</a></p>';
  
}
else echo "No result";
echo '</div>';


    ?>