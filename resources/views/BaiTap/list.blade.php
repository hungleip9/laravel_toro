<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST</title>
</head>
<body>
    @foreach($list as $item)
        <div><p>{{$item['name']}}</p></div>
        <div>
            @if($item['status']===0)
                <p>Chưa Hoàn Thành</p>
            @elseif($item['status']==1)
                <p>Đã Hoàn Thành</p>
            @else
                <p>Không Thực Hiện</p>
            @endif
            @endforeach
        </div>

</body>
</html>
