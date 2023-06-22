<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>SHOP</title>
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>        
        <div class="flex-container-detail">
            @foreach($resultDetail as $row)
            <div class="flex-item-detail">
                <img class="detail-pic-main" src="{{asset('images/' . $row->imgfile1 ,false)}}" />
            </div>
            <div class="flex-item-detail">
                <p class="item-title">{{$row->name}}</p> 
                <p><span class="item-price-detail">¥ {{number_format($row->price)}}</span><span class="item-tax-detail">(税込)送料込み</span></p>
                <div class="flex-button-container">
                    <div class="buttonouter">
                        <a href=""><p class="buttoninner">商品をかごへ追加</p></a>
                    </div>
                    <div class="buttonouter">
                        <a href=""> 
                            <p class="buttoninner">購入手続きへ</p>
                        </a>
                    </div>
                </div> 

                <h2>商品の説明</h2>
                <p>{{$row->details}}</p>
                <h2>商品の情報</h2>
                <table>
                    <tr>
                        <td class="table-title-detail" rowspan=3>カテゴリ</td>
                        <td>{{$row->cate1}}</td>
                    </tr>
                    <tr>
                        <td>{{$row->cate2}}</td>
                    </tr>
                    <tr>
                        <td>{{$row->cate3}}</td>
                    </tr>
                    <tr>
                        <td class="table-title-detail">商品のサイズ</td>
                        <td>{{$row->size}}</td>
                    </tr>
                    <tr>
                        <td class="table-title-detail">ブランド</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="table-title-detail">商品の状態</td>
                        <td>{{$row->status}}</td>
                    </tr>
                    <tr>
                        <td class="table-title-detail">配送料の負担</td>
                        <td>{{$row->haisou}}</td>
                    </tr>
                    <tr>
                        <td class="table-title-detail">配送元の地域</td>
                        <td>{{$row->tiiki}}</td>
                    </tr>
                 </table>
            @endforeach
            </div>
        </div>        
    </body>
</html>