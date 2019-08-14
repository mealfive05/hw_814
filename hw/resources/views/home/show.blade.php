<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        table{
   	border-collapse: collapse;
   	width: 1000px; 	
   	/*自動斷行*/
   	word-wrap: break-word;
   	table-layout: fixed;
   }
   

    </style>
</head>
<body>

<div class="container">
  <h2>公告內容 <a href="/hw" class="btn btn-md btn-success pull-right"><span class="glyphicon "></span> 回首頁</a></h2>
  <table class="table table-hover">
    
      <br>
      <br>
    
    <tbody>
      <tr><td><h2>標題: {{ $mess->title }}</h2> </td></tr>
      <tr><td><h3>內容: {{ $mess->content }}</h3></td></tr>
      {{-- <tr><td><h3>公告日期: {{ $mess->created_at }}</h3></td></tr> --}}
      

    
        </tbody>
  </table>
  <h5 class="pull-right">公告日期: {{ $mess->created_at }}<h5>
</div>

</body>
</html>









