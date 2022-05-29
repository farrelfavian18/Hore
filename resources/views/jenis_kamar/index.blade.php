@extends('layout.master')

<h2>Costumer</h2>
<p>{{$Regular}}</p>
<p>{{$Superior}}</p>
<p>{{$Deluxe}}</p>

<ul>
    @foreach ($collection as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>