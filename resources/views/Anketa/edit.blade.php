@extends('Layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 offset-md-3" style="background-color:whitesmoke; margin-top:25px; border-style: solid; border-color:lightgray; border-radius: 25px">
                <h1>Lūdzu veiciet nepieciešamās izmaiņas</h1>
                <div class="card" style="background-color:floralwhite">
                    <div class="card-body">
                        <form class="form-horizontal" action="/anketa/{{ $anketa->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <input type="hidden" class="form-control" name="id" value= "<?php echo $anketa -> id; ?>">
                            <div class="form-group">
                                <label for="respondents_id" class="control-label col-sm-6">Respondents Nr.</label>
                                <div class="col-sm-6">
                                    <select name="respondents_id" class="form-control">
                                        <option selected>{{ $anketa->respondents_id }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="control-label col-sm-8">Vai šobrīd esat viedtālruņa īpašnieks?</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="phone">
                                        <option value="Jā">Jā</option>
                                        <option value="Nē">Nē</option>
                                    </select>
                                </div>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="wifi" class="control-label col-sm-10">Vai izmantojat publiski pieejamu bezmaksas internetu?</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="wifi">
                                        <option value="Jā">Jā</option>
                                        <option value="Nē">Nē</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="frequence" class="control-label col-sm-10">Cik bieži lietojat viedtālruņa piedāvātos interneta pakalpojumus?</label>
                                <div class="col-sm-6">
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
                                <label for="devices" class="control-label col-sm-10">Kuras no nosauktajām ierīcēm pēdējo 12 mēnešu laikā esat izmantojis interneta pakalpojumu lietošanai?</label>
                                <div class="col-sm-6">
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
                                <label for="text" class="control-label col-sm-10">Lūdzu ierakstiet 3 tīmekļa vietnes, kuras apmeklējat visbiežāk</label>
                                <div class="col-sm-6">
                                    <textarea id="text" name="pages" rows="5" cols="30"></textarea>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-12 col-sm-offset-4">
                                    <button type="submit" class="btn btn-success btn-lg">Saglabāt izmaiņas</button>
                                </div>
                                <a class="btn btn-link" href="{{ route('anketa.index') }}">Atpakaļ</a>
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
