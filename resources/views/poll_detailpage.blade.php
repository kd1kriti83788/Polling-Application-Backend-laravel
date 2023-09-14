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
  <tr><a style="max-width:150px; float:right; display:inline-block;" href="{{asset('logout')}}" class="btnbtn-block btn-primary">logout</a></tr><br>

  <table class="table table-bordered border-primary">

  <thead>
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
  </thead>
  <tbody>
    
    <form action="/poll_result_save/{{$poll_data->id}}" method="post">
        @csrf
    
        <select class="custom-select" id="inputGroupSelect01" name="selected_option"  >
            <option selected>vote for...</option>
            {{-- @foreach($all_user as $username) --}}
            <option value="1"  name="selected_option" onclick="changevalue(this)" >1</option>
            <option value="2"  name="selected_option" onclick="changevalue(this)" >2</option>
            <option value="3"  name="selected_option" onclick="changevalue(this)" >3</option>
            <option value="4"  name="selected_option" onclick="changevalue(this)" >4</option>

           {{-- @endforeach --}}
          </select>
    <button type="submit" class="btn btn-primary">Submit</button>
        </form>


   

  </tbody>
</table>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>