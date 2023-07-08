@extends('master')
@section('content')
    <div class="container2">
        <div class="col-sm-10">

            <table class="table mt-5">
                <tbody>
                    <tr>
                        <th scope="row">Amount</th>
                        <td>${{ $total }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tax</th>
                        <td>$0</td>
                    </tr>
                    <tr>
                        <th scope="row">Delivery</th>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <th scope="row">Total Amount</th>
                        <td>${{ $total + 10 }}</td>
                    </tr>
                </tbody>
            </table>

            <div>
                <form action="/action_page.php">

                    <div class="form-floating mb-5 mt-5">
                        <textarea class="form-control" placeholder="Enter your address" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Enter your address</label>
                    </div>

                    <div>
                        <label class="form-label">Payment Method</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Online Payment
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            EMI Payment
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cash On Delivery
                        </label>
                    </div>

                    <div class="mt-5">

                    </div>
                    <button type="button" class="btn btn-success">Order Now</button>
                </form>
            </div>
        </div>
    </div>
@endsection
