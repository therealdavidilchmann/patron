@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">{{ __('Entschuldigung') }}</div>

                <div class="card-body">
                    <div class="excuse-data text-center">
                        <div class="row">
                            <div class="col-6"><p>Fach</p></div>
                            <div class="col-6"><p>Deutsch</p></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><p>Datum</p></div>
                            <div class="col-6"><p>11.04.2021</p></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><p>Block</p></div>
                            <div class="col-6"><p>11:35 - 13:05</p></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><p>Verpasste Zeit</p></div>
                            <div class="col-6"><p>Ganze Stunde</p></div>
                        </div>
                    </div>
                    <hr>
                    <img src="{{ asset('/images/img.png') }}" alt="tag">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
