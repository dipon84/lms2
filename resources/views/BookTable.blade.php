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
   
<div class="container">
   <!-- navbar ends -->
   <!-- info alert -->
   <div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">
      <span class="glyphicon glyphicon-book"></span>
      <strong>Books</strong> Table
   </div>
</div>
<div class="container">
   <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">
        
        
    
         <div class="row">
            <a href="{{url('/AddBook')}}"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-plus-sign"></span> Add Book</button></a>
         </div>
      </div>
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>Book_Id</th>
               <th>Book_Title</th>
               <th>Author</th>
           
               <th>Publisher_Name</th>
               <th>Categories</th>
             
               <th>Actions</th>
            </tr>
            @foreach ($books as $book)
               <tr>
                  <td>{{ $book->bookId }}</td>
                  <td>{{ $book->bookTitle }}</td>
                  <td>{{ $book->author }}</td>
                  <td>{{ $book->publisherName }}</td>
                  <td>{{ $book->categories }}</td>
                  <td>
							<a href="{{ url('/bookDelete/').'/'.$book->bookId }}" class='btn btn-danger'>Delete</a>
						</td>
                  {{-- <td><button name='del' type='submit' value='Delete' class='btn btn-danger'>Delete</button></td> --}}
               </tr>
            @endforeach
         </thead>
         
         

         
        
      </table>
   </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
</body>
</html>