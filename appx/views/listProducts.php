

    <!-- Page Content --> 
    <div class="container" style="padding-top:30px;">
	<center> <h3>Added Products </h3> </center>

      <!--  
      <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
      </header>
	  -->
 
      <!-- Page Features -->
      <div class="row text-center">
	<?php foreach ($products as $items) { ?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
 
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title"><?=$items['name']?></h4>
              <p class="card-text">Category : <?=$items['category_name'];?><br><?=$items['descr'];?></p>
            </div>
             
          </div>
        </div>
	<?php } ?>
		
		<!--		<div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
		
		
		<div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
		
		
		<div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
-->
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

  </body>

</html>
,\