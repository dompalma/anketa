@extends('Layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            RESPONDENTS NR. <h1 class="d-inline">{{ $anketa->respondents_id ?? ''}}</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">Viedtālruņa īpašnieks</div>
                <div class="col-sm-2 border-left">{{ $anketa->phone ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-4">Lieto interneta pakalpojumus</div>
                <div class="col-sm-2 border-left">{{ $anketa->webserv ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-4">Bezmaksas internets</div>
                <div class="col-sm-2 border-left">{{ $anketa->wifi ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-4">Interneta lietošanas biežums</div>
                <div class="col-sm-2 border-left">{{ $anketa->frequence ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-4">Ierīces interneta lietošanai</div>
                <div class="col-sm-2 border-left">{{ $anketa->devices ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-4">Apmeklētākās vietnes</div>
                <div class="col-sm-2 border-left">{{ $anketa->text ?? ''}}</div>
            </div>
            </div>

        </div>
            <a class="btn btn-link" href="{{ route('anketa.index') }}">Atpakaļ</a>

@endsection
