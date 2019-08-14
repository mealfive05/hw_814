
<!DOCTYPE html>
<html lang="en">
<head>
  <title>公告</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">

	</script>

</head>
<body>

<div class="container">
  <h2>管理員登入 </h2>
  <form class="form-horizontal" method="post" action="/hw">
    @csrf
        <fieldset>
        
        <!-- Form Name -->
        <legend> </legend>
        <br>
        <br>
        
        <!-- Text input-->
        <div class="form-group">
            
          <label class="col-md-4 control-label" for="account">帳號</label>  
          <div class="col-md-4">
          <input id="account" name="account" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="password">密碼</label>
          <div class="col-md-4">
            <input id="password" name="password" type="password" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="ok"></label>
          <div class="col-md-4">
            <button id="ok" name="ok" class="btn btn-primary">登入</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
    
</div>

</body>
</html>