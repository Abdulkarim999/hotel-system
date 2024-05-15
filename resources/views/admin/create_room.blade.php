<!DOCTYPE html>
<html>
  <head> 
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
			<h1 style="font-size: 30px; font-weight:bold; ">Add Rooms</h1>
			
			<form action="{{url('add_room')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="div_deg">
					<label>Room title</label>
					<input type="text" name="title">
				</div>

				<div class="div_deg">
					<label>Description</label>
					<textarea name="description" id="" cols="30" rows="5"></textarea>
				</div>

				<div class="div_deg">
					<label>Price</label>
					<input type="number" name="price">
				</div>

				<div class="div_deg">
					<label>Room type</label>
					<select name="type" id="">
						<option selected value="Regular">Regular</option>
						<option  value="Premium">Premium</option>
						<option  value="Deluxe">Deluxe</option>
					</select>
				</div>

				<div class="div_deg">
					<label>Free WIFI</label>
					<select name="wifi" id="">
						<option selected value="Yes">Yes</option>
						<option  value="No">No</option>
					</select>
				</div>

				<div class="div_deg">
					<label>Upload Image</label>
					<input type="file" name="image">
				</div>

				<div class="div_deg">
					<input class="btn btn-primary" type="submit" value="Add Room">
				</div>
			</form>
		  </div>

	</div>
		</div>
		  </div>
    @include('admin.footer')
  </body>
</html>