@extends('layouts.app')

@section('content')

    <div class="container">
        @if((\Illuminate\Support\Facades\Auth::user()->id)==1) {
            <h3>管理员订单</h3>
        }
        @else
            <h3>{{\Illuminate\Support\Facades\Auth::user()->name}}的所有订单</h3>
        @endif
        <div class="center-block">
            <table class="table table-condensed">
                <tr>
                    <th>商品名称</th>
                    <th>商店名称</th>
                    <th>商品数量</th>
                    <th>商品价格</th>
                    <th>订单状态</th>
                </tr>

                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->good_name }}</td>
                        <td>{{ $order->seller_name }}</td>
                        <td>{{ $order->good_num }}</td>
                        <td>{{ $order->good_price }}</td>
                        <td>{{ $order->orderState }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>


@endsection