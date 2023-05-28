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
   <div class="jumbotron login2 col-lg-10 col-md-11 col-sm-12 col-xs-12">
      <p class="page-header" style="text-align: center">ADD BOOK</p>
      <div class="container">
         <form class="form-horizontal" role="form" enctype="multipart/form-data" action="{{url('/AddBook')}}" method="post">
            @csrf
            <div class="form-group">
               <label for="Title" class="col-sm-2 control-label">BOOK TITLE</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" placeholder="Enter Title" id="password" required>
               </div>
            </div>
            <div class="form-group">
               <label for="Author" class="col-sm-2 control-label">AUTHOR</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="author" placeholder="Enter Author" id="password" required>
               </div>
            </div>
            
            <div class="form-group">
               <label for="Publisher" class="col-sm-2 control-label">PUBLISHER</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="publisher" placeholder="Enter Publisher" id="password" required>
               </div>
            </div>
            <div class="form-group">
               <label for="Publisher" class="col-sm-2 control-label">CATEGORY</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="category" placeholder="Enter Category" id="password" required>
               </div>
            </div>
            
            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                  <button  name="submit" class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info">
                  ADD BOOK
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>