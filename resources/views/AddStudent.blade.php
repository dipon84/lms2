<?php

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


<div class="container">
    
    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 20px">
       <div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-10">
          <?php if(isset($error) && $error === true) { ?>
          <div class="alert alert-success alert-dismissable">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <strong>Record added Successfully!</strong>
          </div>
          <?php } ?>
          <p class="page-header" style="text-align: center"><b>ADD STUDENT</b></p>
          <div class="container">
             <form class="form-horizontal" role="form" action="{{url('/AddStudent')}}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                   <label for="Username" class="col-sm-2 control-label">FULL NAME</label>
                   <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" placeholder="Full Name" id="name" required>
                   </div>
                </div>
                <div class="form-group">
                   <label for="Password" class="col-sm-2 control-label">ID_NO</label>
                   <div class="col-sm-10">
                      <input type="text" class="form-control" name="studentId" placeholder="ID Number" id="id_no" required>
                   </div>
                </div>
                <div class="form-group">
                   <label for="Password" class="col-sm-2 control-label">Department</label>
                   <div class="col-sm-10">
                      <input type="text" class="form-control" name="dept" placeholder="Department" id="Address" required>
                   </div>
                </div>
                <div class="form-group">
                   <label for="Password" class="col-sm-2 control-label">EMAIL</label>
                   <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" placeholder="Email" id="password" required>
                   </div>
                </div>
                <div class="form-group">
                   <label for="Password" class="col-sm-2 control-label">PHONE NUMBER</label>
                   <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone" placeholder="phone" id="password" required>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                      <button  class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info" name="submit">
                      ADD MEMBER
                      </button>                            
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
 </body>
 </html>