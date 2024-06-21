<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
		
			<a href="/"><button type="button" class="btn btn-dark" style='float:right'>View student </button></a> 
		
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
					  @if(session('success'))
			<div class="alert alert-success" role="alert">
			  {{session('success')}}
			</div>   
			@endif

          <form action="/adddata" method="POST" enctype="multipart/form-data" >
           @csrf            
		   <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" name="name" value="{{old('name')}}"/>
                  <label class="form-label" for="form3Example1">First name</label>
				  @if($errors->has('name'))
					  <br> <span class="text-danger"> {{ $errors->first('name') }}</span> 
				  @endif
				  
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" name="father" value={{old('father');}}>
                  <label class="form-label" for="form3Example2">Father_name</label>
				   @if($errors->has('father'))
					  <br> <span class="text-danger"> {{ $errors->first('father') }}</span> 
				  @endif
                </div>
              </div>
            </div>
<div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" name="mother"value="{{old('mother'); }}"/>
                  <label class="form-label" for="form3Example1">Mother_name</label>
                 @if($errors->has('mother'))
					  <br> <span class="text-danger"> {{ $errors->first('mother') }}</span> 
				  @endif
				</div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="file" id="form3Example2" class="form-control"  name="image"/>
                  <label class="form-label" for="form3Example2">Image </label>
                 @if($errors->has('image'))
					  <br> <span class="text-danger"> {{ $errors->first('image') }}</span> 
				  @endif
				</div>
              </div>
            </div>
			
			
			
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->