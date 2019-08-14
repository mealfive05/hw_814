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
    
  <h2>管理員介面 
      <a href="/hw" class="btn btn-md pull-right"><span class="glyphicon glyphicon-home "></span> 回首頁</a>
    <a href="/hw/insert" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增公告</a>
</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>標題</th>
        <th>內容</th>
        <th>上次修改時間</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>

            @foreach ($message as $msg)
        <tr>
            
            <td>
                {{$msg->title}}
            </td>
                <td>
                    {{$msg->content}}
                </td>
                <td>
                        {{$msg->updated_at}}
                    </td>
                <td>
                <span class="pull-right">
                        <form method="post" action="/hw/{{$msg->messageId}}"> 
                            <a href="/hw/{{$msg->messageId}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                        </form>
                    </span>
                </td>
        </tr>
        @endforeach
    
        </tbody>
  </table>
</div>

</body>
</html>




