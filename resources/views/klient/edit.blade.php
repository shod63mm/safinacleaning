<!-- resources/views/orders/edit.blade.php -->

{{-- <form action="{{ route('orders.update', $order) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="carpet_area">Площадь ковра:</label>
    <input 
    @if( $order->status=='deactive')
        disabled
    @endif
    type="number" id="carpet_area" name="carpet_area" value="{{ old('carpet_area', $order->carpet_area) }}" >
    @error('carpet_area')
        <div>{{ $message }}</div>
    @enderror

    <label for="price">Цена:</label>
    <input
    @if( $order->status=='deactive')
    disabled
    @endif
    type="number" id="price" name="price" value="{{ old('price', $order->price) }}" >
    @error('price')
        <div>{{ $message }}</div>
    @enderror

    <button 
    @if( $order->status=='deactive')
    disabled
    @endif type="submit" name="action" value="save_changes">Сохранить изменения</button>
    <button
    @if( $order->status=='deactive')
    disabled
    @endif
    type="submit" name="action" value="complete_order">Завершить заказ</button>
</form> --}}
@extends('dashboard.admin')

@section('content')

@include('klient.editpage')

@endsection