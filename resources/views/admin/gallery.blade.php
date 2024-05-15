<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
   <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 style="font-size:40px; font-weight:bold; text-align:center;padding-bottom:20px;color:white;">Gallery</h1>
                       <div class="row">
                    @foreach($gallery as $gallery)
					<div class="col-md-4"> 

					<img style="height:200px; width:300px; margin-bottom:20px;" src="/gallery/{{$gallery->image}}" alt="">
					<a onClick="return confirm('Are you sure to delete this');" class="btn btn-danger" href="{{url('delete_gallery',$gallery->id)}}">Delete Image</a>
                     </div>
					@endforeach
					</div>

					<form action="{{url('upload_gallery')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row mb-3">
							<label style="color:azure;" for="" class="col-sm-2 col-form-label">Upload Image</label>
							<div class="col-sm-10">
							<input type="file"  id="" name="image">
							<button style="margin-top:10px;"class="btn btn-primary"type="submit" value="Add Image">Add Image</button>
							</div>
						</div>
						
						
						
					</form>
				</div>
				
			</div>

          </div>
        </div>
    </div>
    @include('admin.footer')
  </body>
</html>