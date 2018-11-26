
<script src="http://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<div class="myclass">
<h2>Update Article</h2>
<?php 
if (session::get("msg") != false) {
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oh snap!</strong>'.session::get("msg").'<br />
        </div>';
                 session::unset('msg');
              }  
		foreach ($post as  $value) {
			# code...
		

	?>
<form action='<?php echo BASE_URL;?>/user/editpost/<?php echo $value["postid"];?>' method="post" class="form-signin" enctype="multipart/form-data">
<table>
	
<tr>
<td>Title</td>
<td><input type="text" name="title" required='1' class="form-signin form-control" value='<?php echo $value["title"];?>'  /></td>
<td><input type="hidden" name="userid" value="<?php echo session::get("userid");?>"></td>
</tr>
<tr>
<td>Content</td>
<td>
<textarea name="content" ><?php echo $value["content"];?></textarea>
<script >CKEDITOR.replace('content');</script>
</td>
</tr>
<tr>
<td>Category</td>
<td><input type="text" name="category" required='1'class="form-signin form-control " value='<?php echo $value["category"];?>'/></td>
</tr>
<tr>
	<td>
		
      
                      <label>Upload Picture: </label>
                      
                      
	</td>
	<td><input type="file" name="file" id="filename"> 
	</td>

</tr>
<tr>
	<td></td>
	<td><button class="btn btn-info form-signin form-control" type="submit" name="submit" />Save</button></td>
</tr>
</table>
<?php } ?>
</form>
</div>