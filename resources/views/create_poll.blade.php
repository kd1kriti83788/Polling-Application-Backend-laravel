<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    
          @if(Session::has('success_message'))
          <div class="alert alart-success alert-dismissible fade show " role="alert">
            <strong>success:</strong>{{Session::get('success_message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">$times</span>
            </button>
          </div>
          @endif
      <div class="container">
        <h3>Create Poll</h3>


        @if($errors->any())
                  <div class="alart alart-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
        @endif

        @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif

    <form action="/poll_Q_save/{{$myuser->id}}" method="post">
    @csrf

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Poll Title</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="title"></textarea>
        </div>
    

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Poll Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Poll Option 1</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="option1"></textarea>
        </div>
    

            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Poll Option 2</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="option2"></textarea>
            </div>

                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Poll Option 3</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="option3"></textarea>
                </div>

                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Poll Option 4</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="option4"></textarea>
                    </div>
                    <br><br>

<button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    
        </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>