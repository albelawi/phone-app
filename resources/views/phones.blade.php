@extends('layouts.app')
@section('title','hpone')

@section('content')


<div class="container">
    @foreach ($phone as $item)
    <div class="card mt-2">
      <div class="card-header">
        <h1 class="text-center text-warning ">{{$item->name}}</h1>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3 border-1">
            <img src={{$item->image}} height="200px">
          </div>
          <div class="col-sm-6">
            <h3 class="text-center text-warning ">{{$item->name}}</h3>
            <small class="text-muted">{{$item->display}}</small>
          </div>
          <div class="col-sm-3">
            <h4>{{$item->total}}RS</h4>
            <br>
            {{-- <button type="button" class="btn btn-secondary">Buy now</button> --}}
            <a href="checkout/{{$item->id}}" class="btn btn-secondary">Buy now!</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection


