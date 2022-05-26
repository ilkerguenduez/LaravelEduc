<!--Hoşgeldin @{{$name." ".$surname." ".$info['age']."/".$info['job']}}
<br>
<a href="#">Admin Sayfası Linki</a>-->

<!--@for($i=1;$i<=10;$i++)
    {{$i}}<br>
@endfor-->


<!--@foreach(['abc','cde'] as $key=>$value)
    {{$key}}=>{{$value}}<br>
@endforeach-->


<!--@if($ages==10)
    10 yaşındasınız
    @elseif($ages=15)
    15 Yaşındasın
@else-->
        <!--10 yaşında değilsin
@endif-->

<!--@if(isset($age))
    age tanımlı
@else
    parametre tanımlı değil
@endif-->


@php
    $x=10
    @endphp
        {{$x}}
