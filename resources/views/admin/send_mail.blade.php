<!DOCTYPE html>
<html>
  <head> 
	<base href="/public">
    @include('admin.css')
  </head>
  <body>
	<style>
		.form-label {
  display: flex;  
  
}

.form-label label {
  
  width: 90px; /* Adjust width as needed */
  
}

.form-label input {
 
}

	</style>
    @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
   <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<center>
					<h1 style="font: size 30px; font-weight:bold;">Send Mail to {{$data->name}}</h1>
					<form action="{{url('mail',$data->id)}}" method="post">

				@csrf
					<div class="mb-3">
						<div class="form-label">
						<label for="name" class="form-label">Greeting</label>
						<input style="width:30%; " type="text" class="form-control" id="" name="greeting" >	
					    </div>
					</div>
					<div class="mb-3">
						<div class="form-label">
						<label   class="form-label">Mail Body</label>
						<textarea name="body" id="" cols="30" rows="5"></textarea>
					    </div>		
					</div>
					<div class="mb-3">
						<div class="form-label">
						<label  for="name" class="form-label">Action Text</label>
						<input style="width:30%; " type="text" class="form-control" id="" name="action_text">	
					    </div>
					</div>
					<div class="mb-3">
						<div class="form-label">
						<label  for="name" class="form-label">Action Url</label>
						<input style="width:30%; " type="text" class="form-control" id="" name="action_url">	
					    </div>
					</div>
					<div class="mb-3">
						<div class="form-label">
						<label  for="name" class="form-label">End Line</label>
						<input style="width:30%; " type="text" class="form-control" id="" name="endline">	
					    </div>
                    </div>
					
					
					<button type="submit" value="Book Room"class="btn btn-success">Send Mail </button>
                    
					</form>
					</center>
				</div>
			</div>

          </div>
        </div>
    </div>
    @include('admin.footer')
  </body>
</html>