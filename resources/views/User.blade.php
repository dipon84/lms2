<?php

   require 'includes/db-inc.php';
   include "includes/header.php";
   
   
   ?>
   <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example">
                <span class="sr-only">:</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/Admin')}}">Library Management System</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example">
            <ul class="nav navbar-nav">
                
                <li class="active"><a href="{{url('/Admin')}}">Home</a></li>
                <li><a href="{{url('/BookTable')}}">Books</a></li>
                <li><a href="{{url('/User')}}">Admins</a></li>
                <li><a href="{{url('/ViewStudent')}}">Students</a></li>
                <li><a href="{{url('/BorrowBook')}}">Issued books</a></li>
               
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/Logout')}}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- 
<?php 
   require 'includes/snippet.php';
   require 'includes/db-inc.php';
   include "includes/header.php"; 
   
   if(isset($_POST['del'])){
   
   	$id = sanitize(trim($_POST['id']));
   
   	$sql_del = "DELETE from admin where adminId = $id"; 
           $error = false;
   
   	$result = mysqli_query($conn,$sql_del);
   			if ($result)
   			{
   		      $error = true;
   			}		
   
    }
   ?> --}}
<div class="container">
   
   <div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">
      <h4 class="center-block">Admins</h4>
   </div>
</div>
<div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
         <?php if(isset($error)===true) { ?>
         <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Record Deleted Successfully!</strong>
         </div>
         <?php } ?>
         <div class="row">
            <a href="{{url('/AddUser')}}"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-plus-sign"></span> ADD ANOTHER ADMIN</button></a>
         </div>
      </div>
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>Admin Id</th>
               <th>Admin Name</th>
               <th>Password</th>
               <th>Username</th>
               <th>Email</th>
               <th>Actions</th>
            </tr>
         </thead>
         <?php 
            $sql = "SELECT * from admin";
            
            $query = mysqli_query($conn, $sql);
               $counter = 1;
            while($row=mysqli_fetch_array($query)){ ?>
         <tbody>
            <td> <?php echo $counter++ ?></td>
            <td> <?php echo $row['adminName']?></td>
            <td> <?php echo $row['password']?></td>
            <td> <?php echo $row['username']?></td>
            <td> <?php echo $row['email']?></td>
            <form method='post' action='users.php'>
               <input type='hidden' value="<?php echo $row['adminId']; ?>" name='id'>
               <td><button name='del' type='submit' value='Delete' class='btn btn-danger' onclick='return Delete()'>DELETE</button></td>
            </form>
         </tbody>
         <?php } ?>
      </table>
   </div>
</div>
<script type="text/javascript">
   function Delete() {
               return confirm('Would you like to delete the User?');
           }
</script>
</body>
</html>