@extends('dashboard.layouts.app')

@section('content')

<div class="">
    <div class="row">
  <div class="col-xl-6 col-lg-6 col-xs-8 col-sm-8">
    @if(Session::has('failed'))
           <div class="alert alert-danger"> {{ Session::get('failed') }}</div>
  @endif
  @if(Session::has('success'))
           <div class="alert alert-success"> {{ Session::get('success') }}</div>
  @endif
    <h3>Upload Image or Video</h3>
<form action="{{ route('upload') }}" method="POST" class="" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="custom-file mb-2">
        <input type="file" onchange="count()" name="image[]" class="custom-file-input" id="customFile" multiple>
        <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
         <center>
      
    <input type="radio" class="form-check-input" value="wanted" name="repo" checked>Wanted <br/>
    <input type="radio" class="form-check-input" value="repo" name="repo">Repo
 
</center>
      <center>
          <h4 class=" center" id="counts"></h4>
          <div class="alert alert-success" style="display:none"  id="names">
            <h5>Image Names </h5>
            <hr/>
          </div>
      <input type="submit"  value="Upload" id="btn" disabled class=" btn btn-primary">
      </center>
</form>
</div>
    </div>
</div>
<script>
    function count() {
document.getElementById('btn').disabled = false;
  var counts = document.getElementById('customFile'); 
  if(counts.files.length == 1) {
    document.getElementById('counts').innerHTML = `${counts.files.length} file selected`;

  } else {
    document.getElementById('counts').innerHTML = `${counts.files.length} files selected`;

  }

  var num = document.getElementById('names');
  num.style.display = "block";
 for(var i=0; i < counts.files.length; i++) {
    num.innerHTML += `<h6 class="text-center"> ${counts.files[i].name} </h6>`;
  }
 }
</script>
@endsection

