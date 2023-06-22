<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>SHOP</title>
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/app.js'"></script> 
        </head>
    <body>        
        <div class="flex-container-detail">
            @foreach($resultDetail as $row)
            <div class="container mt-5">
    <!-- flex container for item details -->
    <div class="d-flex">
        <!-- flex item for the item image -->
        <div class="flex-item-detail mr-3">
            <img class="img-fluid detail-pic-main" src="{{asset('images/' . $row->imgfile1 ,false)}}" />
        </div>
        <!-- flex item for the item details -->
        <div class="flex-item-detail">
            <!-- item title -->
            <p class="item-title font-weight-bold">{{$row->name}}</p> 
            <!-- item price and tax information -->
            <p><span class="item-price-detail font-weight-bold">¥ {{number_format($row->price)}}</span><span class="item-tax-detail">(税込)送料込み</span></p>
            <!-- flex container for the action buttons -->
            <div class="d-flex mt-3">
                <!-- add to cart button -->
                <div class="buttonouter mr-3">
                    <a href="{{ route('addCart', ['detailID'=>$row->id],false) }}">
                        <p class="btn btn-primary buttoninner">商品をかごへ追加</p>
                    </a>
                </div>
                <!-- proceed to checkout button -->
                <div class="buttonouter">
                    <a href=""> 
                        <p class="btn btn-secondary buttoninner">購入手続きへ</p>
                    </a>
                </div>
            </div> 
            <!-- item description -->
            <h2 class="mt-3">商品の説明</h2>
            <p>{{$row->details}}</p>
            <!-- item information -->
            <h2 class="mt-3">商品の情報</h2>
            <!-- item information table -->
            <table class="table table-striped">
                <!-- category -->
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
                <!-- size -->
                <tr>
                    <td class="table-title-detail">商品のサイズ</td>
                    <td>{{$row->size}}</td>
                </tr>
                <!-- brand -->
                <tr>
                    <td class="table-title-detail">ブランド</td>
                    <td></td>
                </tr>
                <!-- status -->
                <tr>
                    <td class="table-title-detail">商品の状態</td></td>
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