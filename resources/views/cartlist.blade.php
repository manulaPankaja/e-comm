@extends('master')
@section('content')
    <div class="custom-product">
        {{-- <div class="col-sm-4">
            <a href="#">Filter</a>
        </div> --}}
        <div class="">
            <div class="trending-wrapper">
                <h4>Result for products</h4>
                <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
                @foreach ($products as $item)
                    <div class=" row searched-item cart-list-devide">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img src="{{ $item->gallery }}" class="trending-image">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="">
                                <h5>{{ $item->name }}</h5>
                                <h6>{{ $item->description }}</h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{ $item->cart_id }}"><button class="btn btn-warning">Remove from
                                    Cart</button></a>
                        </div>
                    </div>
                @endforeach
                <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
            </div>

        </div>
    </div>
@endsection
