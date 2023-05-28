<?php

   require 'includes/snippet.php';
   include "includes/header.php";
   
   
   
   				
   ?>
<div class="container">
   <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  ">
      <div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
         <p class="page-header" style="text-align: center">ADMIN LOGIN</p>
         <div class="container">
            <form class="form-horizontal" role="form" method="post" action="{{url('/Admin')}}" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                  <label for="Username" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="username" placeholder="admin" id="username" required>
                  </div>
               </div>
               <div class="form-group">
                  <label for="Password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control" name="password" placeholder="Enter Password(admin)" id="password" required>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     <input type="submit" class="btn btn-info col-lg-4" name="submit" value="Sign In">
                  </div>
               </div>
         </div>
         </form>
      </div>
   </div>
</div>
</div>
<div class="container">
   <div class="row row-sm-10" style="align-content: center;">
         <a href="bookslist.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-home"></span>&nbsp&nbspVIEW BOOKS</button></a>
   </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"> </script> 

<?php if (isset($alert_user)) { ?>
<!-- <script type="text/javascript">
   swal("Oops...", "You are not allowed to view this page directly...!", "error");
</script> --> 
<?php } ?>
</body>
</html>