@extends('layouts.masterContent')
@section('title',$title)
@section('header')
<h1>{{$title}}</h1>
@stop
@section('navbar1','Principal')
@section('navbar2','Nosotros')
@section('content')
<p>
        Pablo Ruiz Picasso (Málaga, 25 de octubre de 1881-Mougins, 8 de abril de 1973) fue un pintor y escultor español, creador, junto con Georges Braque, del cubismo.

        Es considerado desde la génesis del siglo xx como uno de los mayores pintores que participaron en muchos movimientos artísticos que se propagaron por el mundo y ejercieron una gran influencia en otros grandes artistas de su tiempo. Sus trabajos están presentes en museos y colecciones de toda Europa y del mundo. Además, abordó otros géneros como el dibujo, el grabado, la ilustración de libros, la escultura, la cerámica y el diseño de escenografía y vestuario para montajes teatrales. También tiene una breve obra literaria.
   <img src="images/pablo.jpg" alt="" > </p>
    <table class="pintores">
        <tr>
            <th class="separacion"><h4>La mujer que llora</h4></th>
            <th  class="separacion" > <img src="images/picasso1.jpg" alt="" id="pi1"></th>
        </tr>
        <tr>
            <th class="separacion">   <img src="images/picasso2.jpg" alt="" id="pi2"></th>
            <th><h4>El viejo guitarrista ciego</h4></th>
        </tr>
        <tr>
            <th><h4>Ciencia y caridad</h4></th>
            <th><img src="images/picasso3.jpg" alt=""id="pi3"></th>
        </tr>
        <tr>
            <th><img src="images/picasso4.jpg" alt="" id="pi4"></th>
            <th><h4>Arlequín pensativo</h4></th>
        </tr>
        <tr>
            <th><h4>La familia Soler</h4></th>
            <th><img src="images/picasso5.jpg" alt="" id="pi5"></th>
        </tr>
        
    </table>


 @stop
@section('footer')
@parent
@stop