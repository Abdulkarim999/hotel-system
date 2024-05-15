<!DOCTYPE html>
<html>
  <head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    @include('admin.css')
  </head>
  <style>
	body{
		background-color:white;
	}
	.table{
		background-color:#fff;
		border-radius:10px;
	}
  </style>
  <body>
    @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
			<div class="container">
				<table class="table table-primary table-striped table-hover table-responsive">
							<thead>
								<tr style="background-color:skyblue;">
								<th scope="col">Room Title</th>
								<th scope="col">Description</th>
								<th scope="col">Price</th>
								<th scope="col">wifi</th>
								<th scope="col">Room Type</th>
								<th scope="col">Image</th>
								<th scope="col">Delete</th>
								<th scope="col">Update</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $data)
								<tr>
								<td>{{$data->room_title}}</td>
								<td>{!! Str::limit($data->description,150) !!}</td>
								<td>${{$data->price}}</td>
								<td>{{$data->wifi}}</td>
								<td>{{$data->room_type}}</td>
								<td>
									<img width="300" src="room/{{$data->image}}" alt="">
								</td>
								<td>
									<a onclick="return confirm('Are you sure to delete this');" class="btn btn-danger" href="{{url('room_delete',$data->id)}}">Delete</a>
								</td>
								<td>
									<a class="btn btn-warning" href="{{url('room_update',$data->id)}}">Update</a>
								</td>
								
								</tr>
								@endforeach
								
								
							</tbody>
							</table>

			</div>

		  
          </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>