<!DOCTYPE html>
<html lang="ja">
    <head>
        <title> Hello world</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="ALL">
            @foreach($resultALL as $value)
                <p>{{$value->name}} : {{$value->price}}</p>
            @endforeach
        </div>
        

        <div class="WHERE">
        <br>
        <br>
        @foreach($resultWHERE as $value)
                <p>{{$value->name}} : {{$value->price}}</p>
        @endforeach
        </div>
        <div class="FIND">


                <p>{{$resultFIND}}</p>
        </div>


    </body>
</html>