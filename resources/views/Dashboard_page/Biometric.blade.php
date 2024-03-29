@extends('layouts.dashboard_head')
@section('content')

 <h1> Welcome To Biometric Page</h1><hr>


 <!-- Button trigger modal -->
<a type="button" class="btn btn_info" data-toggle="modal" data-target="#exampleModalLong">
   <h6 class="head_title">Add  Biometric</h6>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Biometric Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="/biometric/insert" method="post" enctype="multipart/form-data">
              @csrf
              <h2 class="head_title">Upload <i class="fa fa-cloud"></i></h2>
              <input type="text" id="form1" class="form-control" placeholder="Headline" name="title"><br>
              <input type="text" id="form1" class="form-control" placeholder="Headline second" name="title1"><br>
              <input type="text" id="form1" class="form-control" placeholder="Text second" name="text"><br>
              <input type="text" id="form1" class="form-control" placeholder="Text" name="text1"><br>
              <input type="file" id="form1" class="form-control upload_file"  name="allimg"><br>
              <input type="file" id="form1" class="form-control upload_file"  name="allimg1"><br>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Insert</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div><br><br><br>
<div class="row">
  <table class="table table-bordered" style="padding:30px;margin:30px;width:90%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Text</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($attach as $key)
    <tr>

      <td>{{$sl++}}</td>
      <td>{{$key->title}}</td>
      <td>{{$key->text}}</td>
      <td><img width="70" src="{{asset($key->allimg)}}"> </td>
      <td>

        <a href="{{route('E4', $key->id)}}"> <i class="fa fa-edit"></i></a>
        <a href="{{route('D6', $key->id)}}"> <i class="fa fa-trash"></i></a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>

@endsection
@section('foot')
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection
