

    <!-- Page Content --> 
    <div class="container" style="padding-top:30px;">
	<center> <h3>Login </h3> </center>

     
<form  method="post" action="<?php echo base_url() ;?>index.php/products/checkLogin" id="jq-validation-form" enctype="multipart/form-data" >
      <div class="row text-center" style="padding-top:30px;">
		
		  <div class="col-lg-6 col-md-6 mb-4">
		  
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
          
		  
        </div>
		
		
		 
		
		<div class="col-lg-6 col-md-6 mb-4">
          
		    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                     
		</div>
		
		 
		<div class="col-lg-6 col-md-6 mb-4">
          
		                        
		</div>
		
		<div class="col-lg-6 col-md-6 mb-4">
          
		      <input type="submit"   class="btn btn-info" value="Login">
             
                                     
		</div>
		
	 
		
		</form>
		 

       
 
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>theme/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>

$(document).ready(function() {
	 var base_url ='<?php echo base_url();?>'; 
    
	 $.ajax
							       ({

							        type: "POST",
							        url: base_url +'index.php/products/get_category/',
							        data: "text",
							        cache: false,
							        success: function(html)

							        { 
							        $("#category").html(html); 
							        } 
 
						        }); 
});
</script>

  </body>

</html>
 