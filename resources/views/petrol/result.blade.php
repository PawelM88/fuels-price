@extends('layouts.app')

@section('content')
    @foreach ($petrols as $petrol)
        {{ $petrol->petrolPrice() }}
    @endforeach

    <p>
        dlaczego ta cena jest różna od aktualnych cen na stacjach?
    </p>
        <p>
        twórca wzoru na benzynę
    </p>
@endsection
