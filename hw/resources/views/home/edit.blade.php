<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <form method="post" action="/hw/{{ $edt->messageId }}" class="form-horizontal">
        @csrf
        @method('PUT')
<fieldset>

<!-- Form Name -->
<legend>修改</legend>
<br>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">title:</label>  
  <div class="col-md-4">
    <input id="title" name="title" value="{{ $edt->title }}" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="content">content:</label>  
  <div class="col-md-8">
    {{-- <input id="content" name="content" value="{{ $edt->content }}" type="textarea" placeholder="" class="form-control input-md"> --}}
    <textarea cols="50" rows="5" id="content" name="content">{{$edt->content }}</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>