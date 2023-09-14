<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  @if(Session::get('success'))
  <div>
    {{Session::get('success')}}
  </div>

  @endif
    <form action="/registration_detail" method="post">
    @csrf
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"></span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="email" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
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

    <h4>if already registered <a href="{{route('login')}}"> login hear</a> </h4>

</body>
</html>