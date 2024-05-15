<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @include('admin.css')
  </head>
  <style>
body{
	background-color:#2d3035 ;
}
	.table{
		background-color:azure;
		
		
	}
	
	</style>
  <body>
    @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
			<div class="row">
				<div class="col-md-2">

			

		   <table  class="table table-responsive">
  <thead>
    <tr style="background-color:skyblue;">
      <th  scope="col">Room_id</th>
      <th   scope="col">Customer Name</th>
      <th  scope="col">Email</th>
      <th  scope="col">Phone</th>
	  <th  scope="col">Arrival Date</th>
	  <th  scope="col">Leaving Date</th>
	  <th  scope="col">Status</th>
	  <th  scope="col">Room Title</th>
	  <th  scope="col">Price</th>
	  <th  scope="col">Image</th>
	  <th  scope="col">Delete</th>
	  <th  scope="col">Status Update</th>
    </tr>
  </thead>
  <tbody>

	@foreach($data as $data)
    <tr>
      <td>{{$data->room_id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
	  <td>{{$data->start_date}}</td>
	  <td>{{$data->end_date}}</td>
	  <td>
		@if($data->status == 'Approved')
		<span style="color:blue;">Approved</span>

		@endif
		@if($data->status == 'Rejected')
		<span style="color:red;">Rejected</span>
		@endif
		@if($data->status == 'waiting')
		<span style="color:orange;">Waiting</span>
		@endif
	</td>
	  <td>{{$data->room->room_title}}</td>
	  <td>{{$data->room->price}}</td>
	  <td>
		<img src="/room/{{$data->room->image}}" alt="">    
	  </td>
	  <td> 
		<a onClick="return confirm('Are you sure to delete this');" class="btn btn-danger" href="{{url('delete_booking',$data->id)}}">Delete</a>
	  </td>
	  <td>
		<span style="padding-bottom:10px;">
		<a class="btn btn-success"  href="{{url('approve_book',$data->id)}}">Approve</a>
		</span>
		<a class="btn btn-warning"  href="{{url('reject_book',$data->id)}}">Reject</a>
	  </td>
	  
    </tr>
	@endforeach
  </tbody>
</table>

</div>
</div>
   </div>
        </div>
          </div>

    @include('admin.footer')

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>