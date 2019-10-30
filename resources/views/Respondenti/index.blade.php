@extends('Layouts.app')
@section('content')
    <a href="{{route('respondent.create')}}" class="btn btn-success btn-sm">Izveidot jaunu respondentu</a><br><br>
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
    <table class="table table-striped">
        <tr>
            <th>R. id</th>
            <th>Vārds</th>
            <th>Uzvārds</th>
            <th>Dzimums</th>
            <th>Vecums</th>
            <th class="text-left">Darbības</th>
        </tr>

        <?php $no=1; ?>
        @foreach ($respondent as $key => $value)
            <tr>
                <td>{{$value ->id}}</td>
                <td>{{$value ->name}}</td>
                <td>{{$value ->surname}}</td>
                <td>{{$value ->gender}}</td>
                <td>{{$value ->age}}</td>
                <td class="text-left">

                    <a class="btn btn-success btn-sm" href="{{route('respondent.show', $value->id)}}">Skatīt</a>
                    <a class="btn btn-info btn-sm" href="{{route('respondent.edit', $value->id)}}">Labot</a>
                    <form action="{{ route('respondent.destroy', $value->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit" onclick="confirm('Vai tiešām dzēst?')">Dzēst</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    {{$respondent->links()}}
@endsection
