<!DOCTYPE html>
<html lang="ja">
    <head>
        <title> Hello world</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Laravel View</h1>
        <div>Hello.Div</div>

        <p>{{$str}}</p>
        @foreach($results as $value)
            <p>{{$value->myname}}</p>
        @endforeach
        
    </body>
</html>