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
<!DOCTYPE html>
<html>
   <head>
      <title>Admin Home</title>
   </head>
   <body>
      <div class="container">
         @csrf
         <div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">
            <h4 class="center-block"><strong>ADMIN DASHBOARD</strong> </h4>
         </div>
         <div class="row">
            <a href="{{url('/BookTable')}}"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon"></span> All Books </button></a>
            <a href="{{url('/ViewStudent')}}"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon"></span> Students List</button></a>
            <a href="{{url('/BorrowBook')}}"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon"></span> Borrowed Books</button></a>      
         </div>
      </div>
      </div>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>	
   </body>
</html>