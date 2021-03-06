@extends('layouts.app')

@section('content')

<div class="mx-auto" style="width: 1000px; margin-bottom: 10px">   
    <a href="{{ route("currency.create") }}">
        <button role="button" class="btn btn-primary" type="submit" >Add Currency</button>
    </a> 
</div>


<div  class = "mx-auto" style="width: 1000px;">
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Currency</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($currencies as $currency)
        <tr>
            <td>{{ $currency->id }}</td>
            <td>{{ $currency->name }}</td>
            <td>
                <div class="container">
                    <div class="row">
                        <div class="col" style="padding-right: 0px; flex-grow: 0;">   
                            <a href="{{ route("currency.edit",['currency' => $currency->id]) }}">
                                <button role="button" class="btn btn-success" type="submit" >Edit</button>
                            </a> 
                        </div>
                        <div class="col" style="padding-right: 0px; flex-grow: 0;">
                            <form action="{{ route("currency.destroy",['currency' => $currency->id]) }}" method="POST">
                                @csrf
                                @method("Delete")
                                <button role="button" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <td>
        </tr>
        @endforeach

@endsection