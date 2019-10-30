@extends('Layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 offset-md-3" style="background-color:whitesmoke; margin-top:25px; border-style: solid; border-color:lightgray; border-radius: 25px">
                <h1>Lūdzu aizpildiet informāciju par respondentu!</h1>
                <div class="card" style="background-color:whitesmoke; padding: 10px">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <h4 class="alert-heading">Kļūda!</h4>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form class="form-horizontal" action="{{route('respondent.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="control-label col-sm-4">Vārds</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="control-label col-sm-4">Uzvārds</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="surname">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender" class="control-label col-sm-4">Dzimums</label>
                                <div class="col-sm-8">
                                    <input list="browsers" class="form-control" name="gender" >
                                    <datalist id="browsers">
                                        <option value="Sieviete">
                                        <option value="Vīrietis">
                                    </datalist>
                                </div>
                            <div class="form-group">
                                 <label for="age" class="control-label col-sm-4">Vecums</label>
                                 <div class="col-sm-8">
                                       <input type="number" class="from-control" name="age" min="18" max="100">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 col-sm-offset-4">
                                    <button type="submit" class="btn btn-success btn-lg">Saglabāt</button>
                                    <a class="btn btn-link" href="{{ route('respondent.index') }}">Atpakaļ</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
@endsection
