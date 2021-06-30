@extends('layout')
@section('content')
    <div class="features_items">
        <div class="text-left text-center-xs">
            <input class="btn btn-sm btn-default" type="button" onclick="location.href='{{ URL::to('/order-history1')}}';" value="Đã giao" />
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã số hàng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tình trạng của đơn hàng</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Hiển thị</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_history as $key => $order)
                    <tr>
                        <th scope="row">{{$order->order_id}}</th>
                        <td>{{$order->order_total}}</td>
                        <td>{{$order->order_type}}</td>
                        <td>
                            @php
                                $abc = date("d-m-Y",strtotime($order->order_date));
                                echo $abc;
                            @endphp
                        </td>

                        <td><a class="btn" href="{{ URL::to('/order-detail/'.$order->order_id) }}" role="button" style="margin-top:none;">Xem chi tiết</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
