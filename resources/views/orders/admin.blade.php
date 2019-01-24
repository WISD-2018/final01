@extends('layouts.app')

@section('content')

@if (count($orders) > 0)
        <div class="panel panel-default">

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <thead>
                        <th style="font-size:18px">目前訂單</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($orders as $order)
                            <tr>

                                <td class="table-text">
                                    <div style="font-size: 16px">第{{ $order->id }}筆</div>
                                    <div style="font-size: 16px">品項：{{ $order->pname }}</div>
                                    <div style="font-size: 16px">數量：{{ $order->number }}</div>
                                </td>

                                <td>
                                    <form action="/orders/{{ $order->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button>刪除訂單</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection