<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- Section: Design Block -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


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
		<a href="/add"><button type="button" class="btn btn-dark" style='float:right'>Add Student </button></a> 
				
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Student List </h2>
		  
		  @if(session('success'))
			<div class="alert alert-success" role="alert">
			  {{session('success')}}
			</div>   
			@endif
		
				
				<table class="table">
				
				
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name </th>
      <th scope="col">Father_name</th>
      <th scope="col">Mother_name</th>
	  <th scope="col">Image</th>
      <th scope="col">Action </th>
    </tr>
  </thead>
  <tbody>
       @foreach($student as $student)
	   
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->father}}</td>
      <td>{{$student->mother}}</td>
	  <td> <img src="student/{{$student->Image}}" style="width:120px" class="ch" data-id="{{$student->id}}">  </td>
      <td><a href='student/{{$student->id}}/edit'><button type="button" class="btn btn-success" style="float:left">Edit</button></a> 

     <form action='student/{{$student->id}}/delete' method="POST" style="float:left"> 	 
     @csrf
	 @method('delete') 	
	<button type="submit" class="btn btn-danger">Delete </button>
     </form> 	 </td>
       </tr>
	     @endforeach
      </tbody>
</table>
					
         
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->