<!DOCTYPE html>
<html lang="en">
   <head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<base href="/public">
    @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
     @include('home.header')
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->


	  <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>


            
            <div class="row">
				
               <div class="col-md-8 ">
                  <div id="serv_hover"  class="room">
                     <div style="padding:20px"class="room_img">
                        <figure><img style="height:300px; width:800px;" src="/room/{{$room->image}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h2>{{$room->room_title}}</h>
                        <p style="padding:12px">{{$room->description}}</p>
						<h3 style="padding:12px">Free wifi: {{$room->wifi}} </h3>
						<h3 style="padding:12px; margin-left:70px;">Room Type: {{$room->room_type}} </h3>
						<h3 style="padding:12px">Price: ${{$room->price}} </h3>


						
                     </div>
                  </div>
               </div>
			  
			   <div class="col-md-4">
				<h1 style="font-size:40px!important; text-align:center;">Book Room</h1>

				<div>
					@if(session()->has('message'))

                    <div class="alert alert-dismissible alert-success">
						<button type= "button" class="close" data-bs-dismiss="alert">&times;</button>
                    {{session()->get('message')}}                    
                    </div>
					

					
					@endif
				</div>


				@if($errors)
				@foreach($errors->all() as $errors)

				<li style="color:red;">
					{{$errors}}
				</li>


				@endforeach
				@endif




				<form action="{{url('add_booking',$room->id)}}" method="post">

				@csrf
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="" name="name" 
						@if(Auth::id())
						value="{{Auth::user()->name}}"
						@endif
						>	
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="" name="email"
						@if(Auth::id())
						value="{{Auth::user()->email}}"
						@endif
						>	
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">Phone</label>
						<input type="number" class="form-control" id="" name="phone"
						@if(Auth::id())
						value="{{Auth::user()->phone}}"
						@endif
						>	
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">Start Date</label>
						<input type="date" class="form-control" id="startDate" name="startDate">	
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">End Date</label>
						<input type="date" class="form-control" id="endDate" name="endDate">	
					</div>
					
					<button style="width:100%; background-color:skyblue;"type="submit" value="Book Room"class="btn btn-primary">Book Room</button>
                    
					</form>
			   </div>


            </div>
         </div>
      </div>
    
      @include('home.footer')

	  <script>
		$(function(){
			var dtToday = New Date();
			var month = dtToday.getMonth() + 1;
			var day = dtToday.getDate();
			var year = dtToday.getFullYear();

			if(month < 10)
				month = '0' + month.toString();

				if(day < 10)
					day = '0' + daytostring;

					var maxDate = year + '-' + month + '-' + day;
					$('#startDate').attr('min', maxDate);
					$('#endDate').attr('min', maxDate);

				});
			
		
	  </script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

	  
   </body>
</html>