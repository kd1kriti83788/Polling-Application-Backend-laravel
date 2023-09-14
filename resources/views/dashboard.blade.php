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
  <a class="nav-link"  href="{{asset('/poll_history')}}"><button type="button" class="btn btn-primary" >user's history </button></a>
  <a class="nav-link"  href="{{asset('logout')}}"><button type="button" class="btn btn-primary">logout</button></a>

  {{-- <a style="max-width:150px; float:right; display:inline-block;" href="{{asset('logout')}}" class="btnbtn-block btn-primary"><button type="button" class="btn btn-primary">logout</button></a><br> --}}

  <table class="table table-bordered border-primary">

  <thead>
    <tr>
    <th scope="col">no.</th> 
      <th scope="col">poll title</th>
      {{-- <th scope="col">receive messages</th> --}}
     
    </tr>
  </thead>
  <tbody>
    
 @foreach($poll_data as $poll_detail)

{{-- @if($myuser->name==$msg->From)  --}}
    <tr>
      <th scope="row">{{$poll_detail->id}}</th>
      <td><a href="/poll__detail/{{$poll_detail->id}}">{{$poll_detail->title}}</a> </td>
    </tr>
{{-- @elseif($myuser->name==$msg->To) --}}
    {{-- <tr>
      <th scope="row">{{$msg->id}}</th>
      <td> </td>
      <td><a class="nav-link" href="{{asset('/msg_detail')}}/{{$msg->id}}">{{$msg->From}}</a></td>
   
    </tr> --}}
{{-- @endif --}}


   
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