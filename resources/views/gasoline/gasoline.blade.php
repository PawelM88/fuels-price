@extends('layouts.app')

@section('content')

    <body id="body-gasoline">
        <h1>
            Gasoline Price
        </h1>

        <p>
            Description how it works
        </p>

        <form action="/gasoline" method="GET">
            @csrf
            <div class="form-group row">
                <label>
                    Crude Oil Price
                </label>
                <input type="number" step=".01" name="oil" class="form-control">
            </div>
            <div class="form-group row">
                <label>
                    PLN rate
                </label>
                <input type="number" step=".01" name="pln" class="form-control">
            </div>
            <div class="form-group">
                <label>
                    Value of VAT (in %)
                </label>
                <input type="number" name="vat" class="form-control">
            </div>
            <button type="submit">Calculate</button>
        </form>
    </body>
@endsection
