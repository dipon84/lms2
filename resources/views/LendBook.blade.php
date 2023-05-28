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
    
    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 30px">
       <div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
          <p class="page-header" style="text-align: center">LEND BOOK</p>
          <div class="container">
             <form class="form-horizontal" role="form" action="{{url('/LendBook')}}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                   <label for="Book ID" class="col-sm-2 control-label">Book ID</label>
                   <div class="col-sm-10">
                      <input type="text" class="form-control" name="bookId" id="bookId" value="<?php ?>">
                   </div>
                </div>
                <div class="form-group">
                   <label for="Student ID" class="col-sm-2 control-label">Student ID</label>
                   <div class="col-sm-10">
                      <input type="text" class="form-control" name="studentID" value="<?php ?>">
                   </div>
                </div>
                <div class="form-group">
                   <label for="Borrow Date" class="col-sm-2 control-label">BORROW DATE</label>
                   <div class="col-sm-10">
                      <input type="date" class="form-control" name="borrowDate" id="brand">
                   </div>
                </div>
                <div class="form-group">
                   <label for="Password" class="col-sm-2 control-label">RETURN DATE</label>
                   <div class="col-sm-10" id="show_product">
                      <input type='date' class='form-control' name='dueDate'>
                   </div>
                </div>
                <div class="form-group ">
                   <div class="col-sm-offset-2 col-sm-10 ">
                      <button type="submit" class="btn btn-info col-lg-4 " name="submit">
                      Submit
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