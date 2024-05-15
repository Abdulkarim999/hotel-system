<!DOCTYPE html>
<html>
  <head> 
	<base href="/public">
    @include('admin.css')
	<style type="text/css">

		label{
			display: inline-block;
			width: 200px;
		
		}
		.div_deg{
			padding-top: 10px;
			

			
		}
		.div_center{
			
			


		}
		input{
			border-radius: 10px;
		}
		
	</style>
  </head>
  <body>
    @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

		  

		  <div class="div_center">
			<h1 style="font-size: 30px; font-weight:bold; ">Update Room</h1>
			
			<form action="{{url('edit_room',$data->id)}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="div_deg">
					<label>Room title</label>
					<input type="text" name="title" value="{{$data->room_title}}">
				</div>

				<div class="div_deg">
					<label>Description</label>
					<textarea name="description" id="" cols="30" rows="5">{{$data->description}}</textarea>
				</div>

				<div class="div_deg">
					<label>Price</label>
					<input type="number" name="price" value="{{$data->price}}">
				</div>

				<div class="div_deg">
					<label>Room type</label>
					<select name="type" id="">
						<option selected value="{{$data->room_type}}">{{$data->room_type}}</option>
						<option  value="regular">Regular</option>
						<option  value="premium">premium</option>
						<option  value="deluxe">Deluxe</option>
					</select>
				</div>

				<div class="div_deg">
					<label>Free WIFI</label>
					<select name="wifi" id="">
						<option selected value="{{$data->wifi}}">{{$data->wifi}}</option>
						<option value="yes">Yes</option>
						<option  value="no">No</option>
					</select>
				</div>

				<div class="div_deg">
					<label>Current Image</label>
					<img width="100" src="/room/{{$data->image}}" alt="">
				</div>

				<div class="div_deg">
					<label>Upload Image</label>
					<input type="file" name="image">
				</div>

				<div class="div_deg">
					<input class="btn btn-primary" type="submit" value="Update Room">
				</div>
			</form>
		  </div>

	</div>
		</div>
		  </div>
    @include('admin.footer')
  </body>
</html>