<!DOCTYPE html>
<html>
  <head> 
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

		  <div class="container">
				<table class="table table-primary table-striped table-hover table-responsive">
							<thead>
								<tr style="background-color:skyblue;">
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Phone</th>
								<th scope="col">Message</th>
								<th scope="col">Send Email</th>

								</tr>
							</thead>
							<tbody>
								@foreach($data as $data)
								<tr>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
								<td>${{$data->phone}}</td>
								<td>{{$data->message}}</td>
								<td>
									<a class="btn btn-success" href="{{url('send_mail',$data->id)}}">Send Mail</a>
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