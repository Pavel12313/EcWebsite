<!DOCTYPE html>
<html lang="ja">
    <head>
        <title> Hello world</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Laravel View</h1>
        <div>Hello.Div</div>
        @foreach($result as $value)
            <p>{{$value->myname}}</p>
            <p>{{$value->price}}</p>
        @endforeach

        @for($i=1;$i<=10;$i++)
            @if ($i==3)
                <p>さん</p>
            @else
                <p>{{$i}}</p>
            @endif
        @endfor
    </body>
</html>