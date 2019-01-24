        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12"> <!-- column for headline -->
				<h3 style="text-align:center;margin-bottom:2em;">Robertson Contact Form</h3>
            </div> <!-- /col-xs-12 -->
          </div> <!-- /.row  -->
		  <form id="n413_contact_form" class="form-horizontal" method="post" action="<?= config_item('base_url') ?>/contact/add_contact">
        	<div class="row">
        	  <div class="col-xs-12">  
                <div class="row" style="padding:2em;">
                  <div class="form-group">
                    <label for="first_name" class="col-xs-3 control-label">First Name</label>
                    <div class="col-xs-3">
                      <input type="text" class="form-control" name = "first_name" id="first_name" placeholder="First Name">
                    </div> <!--  /.col-xs-3  -->
                  </div> <!--  /.form-group  -->
              
                  <div class="form-group">
                    <label for="last_name" class="col-xs-3 control-label">Last Name</label>
                    <div class="col-xs-3">
                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required/ >
                    </div> <!--  /.col-xs-3  -->
                  </div> <!--  /.form-group  -->
              
                  <div class="form-group">
                    <label for="email" class="col-xs-3 control-label">E-mail</label>
                    <div class="col-xs-3">
                  		<input type="email" class="form-control" name="email" id="email" placeholder="E-mail Address" required/ >
                    </div> <!--  /.col-xs-3  -->
                  </div> <!--  /.form-group  -->
              
                  <div class="form-group">
                    <label for="comment" class="col-xs-3 control-label">Comment</label>
                    <div class="col-sm-6">
                	  <textarea class="form-control" name="comment" id="comment" placeholder="Type comments here" style="height:150px;"></textarea>
                    </div> <!--  /.col-xs-6  -->
                  </div> <!--  /.form-group  -->
        	    </div>  <!-- /.row -->

                <div class="row row-gap">
            	  <div class="col-xs-9">
                	<button type="submit" class="btn btn-success pull-right">Submit</button>
            	  </div>  <!-- /.col-xs-9 (BUTTON) -->
                </div> <!-- /.row row-gap  -->
       		  </div> <!-- /col-xs-12 -->
     	    </div> <!-- /.row -->
		  </form>
    	</div>  <!-- /.container-fluid -->
    </body>
</html>