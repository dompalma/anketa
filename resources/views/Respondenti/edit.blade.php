@extends('Layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 offset-md-3" style="background-color:powderblue";>
                <h1>Respondents</h1>
                <div class="card" style="background-color:floralwhite; padding: 10px">
                    <div class="card-body">
                        <form class="form-horizontal" action="/respondent/{{ $respondent->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <input type="hidden" class="form-control" name="id" value="<?php echo $respondent->id; ?>">
                            <div class="form-group">
                                <label for="name" class="control-label col-sm-4">Vārds</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" value="<?php echo $respondent->name; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="control-label col-sm-4">Uzvārds</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="surname" value="<?php echo $respondent->surname; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                    <label for="age" class="control-label col-sm-4">Vecums</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="from-control" name="age" min="18" value="<?php echo $respondent->age; ?>">
                                    </div>
                                </div>
                            </div>
                    <br>
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
