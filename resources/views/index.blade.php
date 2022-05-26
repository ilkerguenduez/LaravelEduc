{{--Hoşgeldin {{$name." ".$surname." ".$info['age']."/".$info['job']}}--}}
{{--<br>--}}
{{--<a href="#">Admin Sayfası Linki</a>--}}

{{--for dongusu--}}
{{--@for($i=1;$i<=10;$i++)--}}
{{--    {{$i}}<br>--}}
{{--@endfor--}}

{{--foreach--}}
{{--@foreach(['abc','cde'] as $key=>$value)--}}
{{--    {{$key}}=>{{$value}}<br>--}}
{{--@endforeach--}}


{{--if elseif else--}}
{{--@if($ages==10)--}}
{{--    10 yaşındasınız--}}
{{--    @elseif($ages=15)--}}
{{--    15 Yaşındasın--}}
{{--@else--}}
{{--        10 yaşında değilsin--}}
{{--@endif--}}



{{--if isset--}}
{{--@if(isset($age))--}}
{{--    age tanımlı--}}
{{--@else--}}
{{--    parametre tanımlı değil--}}
{{--@endif--}}


{{--php kodu--}}
{{--@php--}}
{{--    $x=10--}}
{{--    @endphp--}}
{{--        {{$x}}--}}


@extends('layouts.app')

{{--@include('layouts.sidebar')--}}
<br>
@section('content')
    @include('layouts.sidebar')
    <br>
    Burası İçerik Bölümü


@endsection
