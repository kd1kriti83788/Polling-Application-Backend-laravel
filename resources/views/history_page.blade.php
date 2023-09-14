<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


  <h3>welcome {{$myuser->name}}</h3><br>
  <a class="nav-link"  href="{{asset('/create_poll')}}"><button type="button" class="btn btn-primary" >Create Poll</button></a>
  <a class="nav-link"  href="{{asset('/home')}}"><button type="button" class="btn btn-primary" >Home </button></a>
  <a class="nav-link"  href="{{asset('logout')}}"><button type="button" class="btn btn-primary">logout</button></a>

  {{-- <a style="max-width:150px; float:right; display:inline-block;" href="{{asset('logout')}}" class="btnbtn-block btn-primary"><button type="button" class="btn btn-primary">logout</button></a><br> --}}

  <table class="table table-bordered border-primary">

  <thead>
   
  </thead>
  <tbody>

    @foreach($poll_datas as $poll_data)

{{-- @if($myuser->name==$msg->From)  --}}
<tr>
  <th scope="col">no.</th> 
    <th scope="col">poll title</th>
  </tr>
  <tr>
 <td>{{$poll_data->id}}</td><td><p>Title:</p>{{$poll_data->title}}</td>
  </tr>
  <tr>
     <td><p>Description:</p>{{$poll_data->description}}</td>
  </tr>
  <tr>
      <td> <p>option1:</p>{{$poll_data->option1}}</td>
      <td> <p>option2:</p>{{$poll_data->option2}}</td>
      <td> <p>option3:</p>{{$poll_data->option3}}</td>
      <td> <p>option4:</p>{{$poll_data->option4}}</td>
      
  </tr>

   
 @endforeach
   
   
  </tbody>
</table>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>