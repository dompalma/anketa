@extends('Layouts.app')
@section('content')

<form method="post" action="rezultats.blade.php">
@csrf
    <ul>
        <h1>APTAUJA</h1>
        <h2>Lūdzu atbildi uz katru jautājumu!</h2>
    </ul>
    <ul>
     <p>
        <label for="input">1.Vārds</label>
        <input type="text" name="name" id="input" required>
    </p>
    <p>
        <label for="input">2.Uzvārds</label>
        <input type="text" name="surname" id="input" required>
    </p>
    <p>
        <label for="browsers">3.Dzimums</label>
        <input list="browsers" name="gender" required>
        <datalist id="browsers">
            <option value="Sieviete">
            <option value="Vīrietis">
        </datalist>
    </p>

    <p>
        <label>4.Vecums (gadi)</label><br>
        <input type="number" name="age" min="18" max="100">
    </p>
    <p>
        <label>5.Vai šobrīd esat viedtālruņa īpašnieks?</label><br>
        <input type="radio" name="phone" value="Jā"> Jā
        <input type="radio" name="phone" value="Nē"> Nē
    </p>
    <p>
        <label>6.Vai pēdējo 12 mēnešu laikā esat lietojis interneta pakalpojumus viedtālrunī?</label><br>
        <input type="radio" name="webserv" value="Jā"> Jā
        <input type="radio" name="webserv" value="Nē"> Nē
    </p>
    <p>
        <label>7.Vai izmantojat publiski pieejamu bezmaksas internetu?</label><br>
        <input type="radio" name="wifi" value="Jā"> Jā
        <input type="radio" name="wifi" value="Nē"> Nē
    </p>

    <p>
        <label for="frequence">8.Cik bieži lietojat viedtālruņa piedāvātos interneta pakalpojumus?</label><br>
        <select name="frequence" id="frequence">
            <option value="Vairākas reizes dienā">Vairākas reizes dienā</option>
            <option value="Vienu reizi nedēļā">Vienu reizi nedēļā</option>
            <option value="2-6 reizes nedēļā">2-6 reizes nedēļā</option>
            <option value="Reizi nedēļā">Reizi nedēļā</option>
            <option value="Vairākas reizes mēnesī">Vairākas reizes mēnesī</option>
            <option value="Reizi mēnesī">Reizi mēnesī</option>
            <option value="Retāk kā reizi mēnesī">Retāk kā reizi mēnesī</option>
          </select>
    </p>

    <p>
        <label for="devices[]">9.Kuras no nosauktajām ierīcēm pēdējo 12 mēnešu laikā esat izmantojis interneta pakalpojumu lietošanai?</label><br>
        <select multiple class="form-control" name="devices[]" id="devices" style="width: 200px" size="4">
            <option >Stacionārais dators</option>
            <option >Portatīvais dators</option>
            <option >Planšetdators</option>
            <option >Konsole</option>
            <option >Portatīvais mūzikas atskaņotājs</option>
            <option >Cits</option>
            <option >Neesmu lietojis</option>
        </select>

    <p>
        <label for="text">10.Lūdzu ierakstiet 3 tīmekļa vietnes, kuras apmeklējat visbiežāk</label><br>
        <textarea id="text" name="pages" rows="5" cols="30"></textarea>
    </p>
    </p>

    <p>
        <label for="is_robot">11.Es neesmu robots</label><br>
        <input type="checkbox" value="False" name="robot[]" required>


    <p>

        <input type="submit" name="submit" value="IESNIEGT">

    </p>
    </ul>
</form>

@endsection
