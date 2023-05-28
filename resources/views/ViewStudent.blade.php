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
    
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">

		<span class="glyphicon glyphicon-book"></span>
	    <strong>Student</strong> Table
	</div>


	</div>
	<div class="container col-lg-11 ">
		<div class="panel panel-default">
		  <div class="panel-heading">
		  	<div class="row">
		  	  <a href="{{url('/AddStudent')}}"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-plus-sign"></span> Add Student</button></a>
			  
			</div>
		  </div>
		  <table class="table table-bordered">
		          <thead>
		               <tr>
		               	  {{-- <th>#</th>  --}}
		                  <th>ID_No</th>
		                  <th>Name</th>
		                  <th>Email</th>
		                  <th>Department</th>
		                  <th>Phone No.</th>		             
		                  <th>Actions</th>
		                </tr>   
						@foreach ($students as $student)
						<tr>
							
						   <td>{{ $student->studentId }}</td>
						   <td>{{ $student->name }}</td>
						   <td>{{ $student->email }}</td>
						   <td>{{ $student->dept }}</td>
						   <td>{{ $student->phoneNumber }}</td>
						   <td>
							<a href="{{ url('/studentDelete/').'/'.$student->studentId }}" class='btn btn-danger'>Delete</a>
						   </td>
						   {{-- <td><button name='del' type='submit' value='Delete' class='btn btn-danger'>Delete</button></td> --}}
						</tr>
					 	@endforeach 
		          </thead>    
		          
		   </table>		 
	  </div>
	</div>
</body>
</html>