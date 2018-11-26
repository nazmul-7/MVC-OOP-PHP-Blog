</div><!--/span-->
<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
 
          <div class="list-group">
            <label  class="list-group-item active">Best Writer</label>
             <?php foreach ($writersinfo as $value) {

 ?>
            <a href="<?php echo BASE_URL; ?>/index/writerwall/<?php echo $value['userid']; ?>" class="list-group-item"><?php echo $value['name'];?></a>
            <?php }?>
          </div>

          <div class="list-group">
            <label  class="list-group-item active">Best Post</label>
            <?php foreach ($bestpost as $value) {
              $title=$value['title'];
                if (strlen($title)>20) {
                  $title = substr($title, 0,20);
                  $title.="...";
                }

 ?>
            <a href="<?php echo BASE_URL; ?>/index/postdetails/<?php echo $value['postid']; ?>" class="list-group-item"><?php echo $title."view(".$value['COUNT(view.postid)'].")";?></a>
            <?php }?>
          </div>
        </div><!--/span-->

      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Dark-Tech 2017</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>/ini/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo BASE_URL; ?>/ini/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo BASE_URL; ?>/ini/js/offcanvas.js"></script>
  </body>
</html>