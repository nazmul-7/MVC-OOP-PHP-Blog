
<script src="http://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<div class="myclass">
<h2>Add new Article</h2>
<form action="<?php echo BASE_URL;?>/user/addpost" method="post" class="form-signin" enctype="multipart/form-data">
<table>
<tr>
<td>Title</td>
<td><input type="text" name="title" required='1' class="form-signin form-control"  /></td>
<td><input type="hidden" name="userid" value="<?php echo session::get("userid");?>"></td>
</tr>
<tr>
<td>Content</td>
<td>
<textarea name="content" ></textarea>
<script >CKEDITOR.replace('content');</script>
</td>
</tr>
<tr>
<td>Category</td>
<td><input type="text" name="category" required='1'class="form-signin form-control"/></td>
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
</form>
</div>