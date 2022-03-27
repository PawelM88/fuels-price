@extends('layouts.app')

@section('content')
    {{-- Short description of the reason and purpose of creation --}}
    <p id="box-1">
        To meet today's troubled times, when the price of gasoline is influenced by many, rapidly changing factors, this simple application calculate the price of gasoline that will appear at gas stations.
    </p>

{{-- Three buttons redirecting to pages with the calculation of prices of petrol, oil and LPG --}}
    <div id="links">
        <a class="link-1" href="/gasoline" role="button"><span class="text">Gasoline</span></a>
        <a class="link-1" href="/diesel" role="button"><span class="text">Diesel</span></a>
        <a class="link-2" href="/lpg" role="button"><span class="text">LPG</span></a>
    </div>
@endsection
