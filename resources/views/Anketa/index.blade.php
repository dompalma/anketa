@extends('Layouts.app')
@section('content')
    <a href="{{route('anketa.create')}}" class="btn btn-success btn-sm">Izveidot jaunu anketu</a><br><br>
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
    <table class="table table-striped">
        <tr>
            <th>Nr</th>
            <th>Respondents_id</th>
            <th>Vai šobrīd esat viedtālruņa īpašnieks?</th>
            <th>Vai pēdējo 12 mēnešu laikā esat lietojis interneta pakalpojumus viedtālrunī?</th>
            <th>Vai izmantojat publiski pieejamu bezmaksas internetu?</th>
            <th>Cik bieži lietojat viedtālruņa piedāvātos interneta pakalpojumus?</th>
            <th>Kuras ierīces pēdējo 12 mēnešu laikā esat izmantojis interneta pakalpojumu lietošanai?</th>
            <th>Lūdzu ierakstiet 3 tīmekļa vietnes, kuras apmeklējat visbiežāk</th>
            <th>Robots?</th>
            <th class="text-left">Darbības</th>
        </tr>
        <?php $no=1; ?>
        @foreach ($anketa as $key => $value)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value ->respondent_id}}</td>
                <td>{{$value ->phone}}</td>
                <td>{{$value ->webserv}}</td>
                <td>{{$value ->wifi}}</td>
                <td>{{$value ->frequence}}</td>
                <td>{{$value ->devices}}</td>
                <td>{{$value ->text}}</td>
                <td>{{$value ->robot ? 'Jā' : 'Nē'}}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{route('anketa.show', $value->id)}}">Skatīt</a>
                    <a class="btn btn-info btn-sm" href="{{route('anketa.edit', $value->id)}}">Labot</a>
                    <form action="{{ route('anketa.destroy', $value->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="confirm('Vai tiešām dzēst?')">Dzēst</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
