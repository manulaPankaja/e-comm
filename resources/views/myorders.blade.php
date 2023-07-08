@extends('master')
@section('content')
    <div class="custom-product">
        {{-- <div class="col-sm-4">
            <a href="#">Filter</a>
        </div> --}}
        <div class="">
            <div class="trending-wrapper">
                <h4>My orders</h4>
                @foreach ($orders as $item)
                    <div class=" row searched-item cart-list-devide">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img src="{{ $item->gallery }}" class="trending-image">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="">
                                <h5>Name: {{ $item->name }}</h5>
                                <h6>Delivery Status: {{ $item->status }}</h6>
                                <h6>Address: {{ $item->address }}</h6>
                                <h6>Payment Status: {{ $item->payment_status }}</h6>
                                <h6>Payment Method: {{ $item->payment_method }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
