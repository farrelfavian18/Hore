@extends('layout.master')

<h2>Kamar</h2>
<p>{{$noKamar}}</p>

<ul>
    @foreach ($collection as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>