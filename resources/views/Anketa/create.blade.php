@extends('Layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 offset-md-3" style="background-color:powderblue; margin-top:50px; border-style: solid; border-color:lightgray; border-radius: 50px">
                <h1>Lūdzu atbildiet uz katru jautājumu!</h1>
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
                        <form class="form-horizontal" action="{{route('anketa.store')}}" method="post">

                            @csrf
                            @if(!Auth::guest())
                            <div class="form-group">
                                <label for="respondents_id" class="control-label col-sm-8"><strong>Respondents:</strong></label>
                                <div class="col-sm-8">
                                    <select name="respondents_id" class="form-control">
                                        <option disabled hidden selected>Lūdzu izvēlieties respondentu</option>

                                        @foreach (\App\Respondent::all() as $respondent)
                                            <option value="{{ $respondent->id }}">{{ $respondent->name }} {{ $respondent->surname }}</option>
                                        @endforeach

                                    </select>
                                </div><br>
                                <div class="col-sm-3">
                                    <input type="button" onclick="location.href='{{ route('respondent.create')}}';" value="Jauns respondents"  class="btn btn-success btn-md"/>
                                </div>
                            </div>

                            @endif
                            <div class="form-group">
                                <label for="phone" class="control-label col-sm-8">Vai šobrīd esat viedtālruņa īpašnieks?</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="phone">
                                        <option disabled hidden selected>Izvēlieties vienu atbildi</option>
                                        <option value="Jā">Jā</option>
                                        <option value="Nē">Nē</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="webserv" class="control-label col-sm-8">Vai pēdējo 12 mēnešu laikā esat lietojis interneta pakalpojumus viedtālrunī?</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="webserv">
                                        <option disabled hidden selected>Izvēlieties vienu atbildi</option>
                                        <option value="Jā">Jā</option>
                                        <option value="Nē">Nē</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wifi" class="control-label col-sm-8">Vai izmantojat publiski pieejamu bezmaksas internetu?</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="wifi">
                                        <option disabled hidden selected>Izvēlieties vienu atbildi</option>
                                        <option value="Jā">Jā</option>
                                        <option value="Nē">Nē</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="frequence" class="control-label col-sm-8">Cik bieži lietojat viedtālruņa piedāvātos interneta pakalpojumus?</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="frequence">
                                        <option >Vairākas reizes dienā</option>
                                        <option >Vienu reizi nedēļā</option>
                                        <option >2-6 reizes nedēļā</option>
                                        <option >Reizi nedēļā</option>
                                        <option >Vairākas reizes mēnesī</option>
                                        <option >Reizi mēnesī</option>
                                        <option >Retāk kā reizi mēnesī</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="devices" class="control-label col-sm-8">Kuras no nosauktajām ierīcēm pēdējo 12 mēnešu laikā esat izmantojis interneta pakalpojumu lietošanai?</label>
                                <div class="col-sm-8">
                                    <select multiple class="form-control" name="devices">
                                        <option >Stacionārais dators</option>
                                        <option >Portatīvais dators</option>
                                        <option >Planšetdators</option>
                                        <option >Konsole</option>
                                        <option >Portatīvais mūzikas atskaņotājs</option>
                                        <option >Cits</option>
                                        <option >Neesmu lietojis</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text" class="control-label col-sm-8">Lūdzu ierakstiet 3 tīmekļa vietnes, kuras apmeklējat visbiežāk</label>
                                <div class="col-sm-8">
                                    <textarea id="text" name="pages" rows="5" cols="30"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="robot" class="control-label col-sm-8">Es neesmu robots</label>
                                <div class="checkbox">
                                    <div class="col-sm-8">
                                        <label class="checkbox">
                                            <input name="robot" type="checkbox" value="FALSE" />
                                        </label>
                                    </div>
                                </div>
                            </div>

                            @if(!Auth::guest())
                            <div class="form-group">
                                <div class="col-sm-12 col-sm-offset-8">
                                    <button type="submit" class="btn btn-success btn-lg">Iesniegt!</button>
                                </div>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
@endsection
