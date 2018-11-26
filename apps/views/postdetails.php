

<?php 

if (session::get("msg") != false) {
                echo '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Well done!</strong>'.session::get("msg").'<br />
        </div>';
                 session::unset('msg');
              } 



 foreach ($post as  $value){
 	$edit='';

 	if(session::get("login")== true){

 		if($value['userid']==session::get("userid")){
 			$edit='<br/><a href="'.BASE_URL.'/post/editpost/'.$value['postid'].'" >Edit Post</a>';
 		}
 	}


    echo '<div class="jumbotron">
            <h1>'.$value['title'].'</h1>
            <p>Category :<a href= "'.BASE_URL.'/post/category/'.$value['category'].'"?>'.$value['category'].'</a>         Writer:<a href= "'.BASE_URL.'/index/writerwall/'.$value['userid'].'"?>'.$value['name'].'</a>'.$edit.'</p>
            <img src="'.BASE_URL.'/images/post'.$value['postid'].'.jpg" class="img-thumbnail" alt="Cinque Terre" width="350" height="350">
            '.$value['content'].'
          </div>';

          

  }


?>
          
