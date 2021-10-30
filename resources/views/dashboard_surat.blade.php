@extends('layouts.app')
@section('content')
<div class="container mt-3">
    <div class="card mb-3">
        <div class="card-header text-white bg-success text-center">{{ $surahs['name']['long'] }}</div>
        <div class="card-body text-center">
            <span class="badge bg-primary">{{ $surahs['revelation']['id'] }}</span>
            <h1 class="text-center">Surat {{ $surahs['name']['transliteration']['id'] }}</h1>
            <p class="card-text">{{ $surahs['name']['translation']['id'] }}</p>
            <p class="card-text">{{ $surahs['tafsir']['id'] }}</p>
        </div>
    </div>
    @foreach ($surahs['verses'] as $verse)
        <div class="card mb-3">
            <div class="card-header text-white bg-success text-center">QS. {{ $surahs['name']['transliteration']['id'] }} [{{ $surahs['number'] }}] ayat {{ $verse['number']['inSurah'] }}</div>
            <div class="card-body text-center">
                <h5 class="card-title">{{ $verse['text']['arab'] }}</h5>
                <p class="card-text">{{ $verse['translation']['id'] }}</p>
                <audio controls class="mb-3">
                    <source src="{{ $verse['audio']['primary'] }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <p><a href="{{ route('surat', [$surahs['number'], $verse['number']['inSurah']]) }}" class="btn btn-warning">Tafsir >></a></p>
            </div>
        </div>
    @endforeach
</div>
@endsection
