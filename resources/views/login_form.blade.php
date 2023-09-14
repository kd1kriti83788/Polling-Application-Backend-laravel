<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif

    <form action="/logindetail" method="post">
    @csrf
   
    <h2>login</h2>
<div class="input-group mb-3">
  <input type="email" class="form-control" placeholder="email" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"></span>
  </div>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="password" aria-label="Recipient's username" aria-describedby="basic-addon2" name="password">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"></span>
  </div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h4>if not registered <a href="{{route('register')}}"> register hear</a> </h4>
</body>
</html>