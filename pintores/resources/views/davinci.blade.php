@extends('layouts.masterContent')
@section('title',$title)
@section('header')
<h1>{{$title}}</h1>
@stop
@section('navbar1','Principal')
@section('navbar2','Nosotros')
@section('content')
<p>
        Leonardo da Vinci (Leonardo di ser Piero da Vinci) (Vinci, 15 de abril de 1452, 2 de mayo de 1519) fue un polímata florentino del Renacimiento italiano. Fue a la vez pintor, anatomista, arquitecto, paleontólogo,3​ artista, botánico, científico, escritor, escultor, filósofo, ingeniero, inventor, músico, poeta y urbanista. Murió acompañado de Francesco Melzi,4​ a quien legó sus proyectos, diseños y pinturas.2​ Tras pasar su infancia en su ciudad natal, Leonardo estudió con el pintor florentino Andrea de Verrocchio. Sus primeros trabajos de importancia fueron creados en Milán al servicio del duque Ludovico Sforza. Trabajó a continuación en Roma, Bolonia y Venecia, y pasó sus últimos años en Francia, por invitación del rey Francisco I.
    
<img src="images/leonardo.jpg" alt=""></p>
    <table id="pintoresleo">
        <tr>
            <th><h4>La Gioconda</h4></th>
            <th> <img src="images/leonardo1.jpg" alt="" id="leo1"></th>
        </tr>
        <tr>
            <th>   <img src="images/leonardo2.jpg" alt="" id="leo2"></th>
            <th><h4>Hombre de Vitruvio</h4></th>
        </tr>
        <tr>
            <th><h4>La última cena</h4></th>
            <th><img src="images/leonardo3.webp" alt="" id="leo3"></th>
        </tr>
        <tr>
            <th><img src="images/leonardo4.jpg" alt="" id="leo4"></th>
            <th><h4>San Jerónimo</h4></th>
        </tr>
        <tr>
            <th><h4>Autorretrato </h4></th>
            <th><img src="images/leonardo5.jpg" alt="" id="leo5"></th>
        </tr>
        
    </table>


 @stop
@section('footer')
@parent
@stop