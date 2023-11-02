<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
@foreach ($posts as $post)
  <h2>{{$post->title}}</h2>
  
<br>
  

  <div class="row">
  <div class="col-sm-4">
    <div class="card" style="width:400px">
      <div class="card-body">
      <td><img src="{{asset('images/'.$post->image)}}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->body}}</p>
        
      </div>
    </div>
  </div>
  @endforeach

</body>
</html>
