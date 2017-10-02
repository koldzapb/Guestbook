<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Comments</title>
<h3 style="text-align: center">Comments</h3>
</head>
<body>
<div class="row">
@forelse($forms as $form)
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
<div class=" panel-heading">
<span>{{ $form->name }}</span>
<span class="pull-right">{{ $form->created_at }}</span>

</div>
<div class="panel-body" >
{{ $form->comment }}
</div>
<div class="pannel-footer clearfix" style="margin-left: 25px">
<form action="/forms/{{ $form->id }}" method= "POST" class="pull-right">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<button class="btn btn-danger btn-sm">Delete</button>
</form>
</div>
</div>

</div>
@empty
No comments yet.

@endforelse


</div>
<div class="row">
<div class="col-md-4 col-md-offset-4">
{{ $forms->links() }}
</div>

<div class="links">
<div>
<a href="/">Home</a>
</div>
<div>
<a href="/forms/create">Create a comment</a>
 </div>              
</div>
</div>
</body>

</html>





