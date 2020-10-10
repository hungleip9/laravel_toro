<!-- resources/views/hello2.blade.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hello cac ban</title>
    <link rel="stylesheet" href="">
</head>
<body>
<p>Tên tôi là: {{ $name }} </p>
<p>Tôi sinh năm {{ $year }}</p>
<div>
    @if (count($records) === 1)
        Có 1
    @elseif (count($records) > 1)
        Có nhiều
    @else
        Không có
    @endif
</div>
<div>
    @switch($i)
        @case(1)
        First case...
        @break

        @case(2)
        Second case...
        @break

        @default
        Default case...
    @endswitch
</div>

</body>
</html>
