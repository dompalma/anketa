@extends('Layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 offset-md-3" style="background-color:powderblue;">
                <div class="card" style="background-color:whitesmoke; padding: 10px">
                    <div class="card-body">
                        <h1 style="text-align:center">Respondents</h1><br/>

                        <p class="col-sm-8">
                            Vārds: <?php echo $respondent->name; ?>
                        </p>

                        <p class="col-sm-8">
                            Uzvārds: <?php echo $respondent->surname; ?>
                        </p>

                        <p class="col-sm-8">
                            Dzimums: <?php echo $respondent->gender; ?>
                        </p>
                        <p class="col-sm-8">
                            Vecums: <?php echo $respondent->age; ?>
                        </p>
                    </div>
                    <a class="btn btn-link" href="{{ route('respondent.index') }}">Atpakaļ</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
