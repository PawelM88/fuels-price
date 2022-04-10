@extends('layouts.app')

@section('content')

    <body class="body-both">

        <a href="/diesel/index" class="edit-button-back">
            Go Back
        </a>

        {{-- A form where the user can re-enter the required data --}}
        <form action="/diesel/{{ $diesels->id }}" method="POST" class="form-edit">
            @csrf
            @method('PUT')

            {{-- Oil image and input to enter its price --}}
            <div class="wrapper">
                <div class="images-edit">
                    <img src="/storage/crude_oil.jpg" width="200px" height="150px">
                </div>
                <div class="input-edit">
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            Crude Oil Price
                        </span>
                        <input type="number" step=".01" name="oil" value="{{ $diesels->oil_value }}" min="0" max="1000"
                            class="form-control form-control">
                    </div>
                </div>
            </div>

            {{-- An image of the Polish zloty and input to enter its value --}}
            <div class="wrapper">
                <div class="images-edit">
                    <img src="/storage/zloty_and_dolar.jpg" width="200px" height="150px">
                </div>
                <div class="input-edit">
                    <div class="input-group mb-3">
                        <span class="input-group-text">PLN rate</span>
                        <input type="number" step=".0001" name="pln" value="{{ $diesels->pln_value }}" min="0" max="100"
                            class="form-control input-width">
                    </div>
                </div>
            </div>

            {{-- An image of Vat Tax and input to enter its value --}}
            <div class="wrapper">
                <div class="images-edit">
                    <img src="/storage/vat_tax.jpg" width="200px" height="150px">
                </div>
                <div class="input-edit">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Value of VAT</span>
                        <input type="number" step=".1" name="vat" value="{{ $diesels->vat_value }}" min="0" max="100"
                            class="form-control input-width">
                    </div>
                </div>
            </div>

            <div class="button-edit-submit">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>

        {{-- Show Errors if inputs in forms aren't filled --}}
        @if ($errors->any())
            <div class="valid-error">
                @foreach ($errors->all() as $error)
                    <li class="valid-error-list">
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif
    </body>
@endsection
