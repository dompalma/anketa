@extends('Layouts.app')
@section('content')

Vārds: <?php echo $_POST["name"]; ?><br>
Uzvārds: <?php echo $_POST["surname"]; ?><br>
Dzimums: <?php echo $_POST["gender"]; ?><br>

Vecums: <?php echo $_POST["age"]; ?><br>

Viedtālruņa īpašnieks: <?php echo $_POST["phone"]; ?><br>

Interneta pakalpojumu lietošana: <?php echo $_POST["webserv"]; ?><br>

Bezmaksas internets: <?php echo $_POST["wifi"]; ?><br>
Biežums: <?php echo $_POST["frequence"]; ?><br>

Ierīces: <?php
if(isset($_POST["devices"]))
{
    foreach ($_POST['devices'] as $device)
        echo $device."\n";}?><br>



Tīmekļa vietnes: <?php echo $_POST["pages"]; ?><br>

Robots: <?php
if(isset($_POST["robot"]))
{
    foreach ($_POST['robot'] as $robots)
        echo $robots."\n";}?>

@endsection


