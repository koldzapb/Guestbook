<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title>Leave comment</title>
<h1 style="text-align: center">Comments</h1>
</head>
<body>
<div class="col-md-6 col-md-offset-3">
<form action="/forms" method="POST">
 {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name" name="name" >
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" >
  </div>
  <div class="form-group">
    <label for="comment">Comment</label>
    <textarea class="form-control" id="comment" name="comment" rows="3" ></textarea>
  </div>
 <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
  </div>
</form>
@if ($errors->any())
<div class="form-group">
 <div class="alert alert-danger">
  <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
</div>
@endif
<div class="links">
<div>
<a href="/">Home</a>
</div>
<div>
<a href="/forms">View all comments</a>
 </div>              
</div>
</div>
<body>

</html>





