@extends('layouts.app')

@section('content')
    <div>
        <form action="/petrol" method="POST" id="petrol-form">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <span class="input-group-text">Crude Oil Price</span>
                <input type="number" step=".01" name="oil" placeholder="Price per barrel of oil" min="0" max="1000"
                    class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">PLN rate</span>
                <input type="number" step=".0001" name="pln"
                    placeholder="Exchange rate of the Polish zloty against the US dollar" min="0" max="100"
                    class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Value of VAT</span>
                <input type="number" step=".1" name="vat" placeholder="Amount of VAT Tax" min="0" max="100"
                    class="form-control">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
    </div>
@endsection
