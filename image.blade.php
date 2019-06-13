@extends('dashboard.layouts.app')

@section('content')

<div class="mt-4">
    <div class="row">
  <div class="col-xl-5 col-lg-5 col-xs-8 col-sm-8">
    @if(Session::has('failed'))
           <div class="alert alert-danger"> {{ Session::get('failed') }}</div>


  

  @endif
  @if(Session::has('success'))
           <div class="alert alert-success"> {{ Session::get('success') }}</div>

  

  @endif
    <h3>Upload Image or Video</h3>
<form action="{{ route('upload') }}" method="POST" class="mt-4" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="custom-file">
        <input type="file" onchange="count()" name="image[]" class="custom-file-input" id="customFile" multiple>
        <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
      <center>
          <h4 class="mt-3 center" id="counts"></h4>
          <div class="alert alert-success" style="display:none"  id="names">
            <h5>Image Names </h5>
            <hr/>
          </div>
      <input type="submit"  value="Upload" id="btn" disabled class="mt-3 btn btn-primary">
      </center>
</form>
</div>
    </div>
</div>
<script>
    function count() {
document.getElementById('btn').disabled = false;
  var counts = document.getElementById('customFile'); 
  if(counts.length == 1) {
    document.getElementById('counts').innerHTML = `${counts.files.length} file selected`;

  } else {
    document.getElementById('counts').innerHTML = `${counts.files.length} files selected`;

  }

  var num = document.getElementById('names');
  num.style.display = "block";
 for(var i=0; i < counts.files.length; i++) {
   console.log(counts.files[i].name); 
    num.innerHTML += `<h6 class="text-center"> ${counts.files[i].name} </h6>`;
  }
 }
</script>
@endsection
