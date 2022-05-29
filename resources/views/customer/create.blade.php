@extends('layout.master')

<h2>Costumer</h2>
<p>{{$NIK}}</p>
<p>{{$Nama}}</p>
<p>{{$Ttl}}</p>
<p>{{$Alamat}}</p>
<p>{{$Jkelamin}}</p>
<p>{{$Ttl}}</p>
<p>{{$NomorHp}}</p>

<ul>
    @foreach ($collection as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>