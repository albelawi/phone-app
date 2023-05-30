@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your order</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">The price</h6>
            </div>
            <span class="text-muted">{{$phone->price}}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <h6 class="my-0">Tax</h6>
            <span>{{$phone->tax}}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <h6>Total (RS)</h6>
            <strong>{{$phone->total}}</strong>
          </li>
{{--
          <li class="list-group-item d-flex justify-content-between">
            <button type="button" class="btn btn-success">Pay</button>
          </li> --}}
        </ul>
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3 text-warning">{{$phone->name}}</h4>


        <div class="container">

            {{-- <form method="{{route('invoic')}}" method="get"> --}}
            <form action='/invoic' method="post">
                @csrf
                <input type="hidden" id="name" name="name" value="{{$phone->name}}">
                <input type="hidden" id="total" name="total" value="{{$phone->total}}">
            <div class="row">
                <div class="col">
                    <label class="text-dark " for="city"> Chooes City</label>
                    <select id="city" name="city" class="form-control">
                        <option>Riyadh</option>
                        <option>Jeddah</option>
                        <option>Madinh</option>
                    </select>
                </div>
            <div class="col">
                <label class="text-dark" for="neighborhood">Neighborhood</label>
                <input class="text-dark p-2 form-control" type="text" name="neighborhood" id="neighborhood">
            </div>

            <div class="col">
                <label class="text-dark" for="street">Street</label>
                <input class="text-dark p-2 form-control" type="text" name="street" id="street">
            </div>

            </div>

            <br>
            <br>

        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pay" id="flexRadioDefault1" value="Paiement when recieving">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Paiement when recieving
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pay" id="flexRadioDefault2" value=" Pay now">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Pay now
                    </label>
                  </div>
            </div>



        </div>

        <div class="row m-5 text-center">
            <div class="col">
                <button type="submit" class="btn btn-success">pay</button>
            </div>

        </div>

            </form>

        </div>
      </div>
    </div>
  </div>
@endsection
