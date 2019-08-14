
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
  <h2>系統公告 <a href="/hw/create" class="btn btn-md btn-success pull-right"><span class="glyphicon "></span> 登入</a></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>標題</th>

        <th>&nbsp;</th>
      </tr>
    </thead>
    
    <tbody  id="vertical-ticker">
    
        
        <tr>
            
            
            <td>
                <marquee onMouseOver="this.stop()" onMouseOut="this.start()" direction="up" scrolldelay="500">
                  @foreach ($message as $msg)
            
                  <a href="/hw/{{$msg->messageId}}" data-ajax="false"> 
                    
                  <p style="color:black;">【{{ $msg->created_at }}】 {{ $msg->title }}</p>
                  @endforeach
                </marquee>
                
            </td>
            
        </tr>
        
    
        </tbody>
  </table>
</div>

</body>
</html>