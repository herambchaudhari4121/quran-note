@extends('layouts.app')
@section('content')
<div class="container mt-3">
    <div class="text-center">
        <a href="{{ route('surat', [$verses['surah']['number'], 0]) }}" class="btn btn-warning btn-lg mb-3"><< Kembali ke QS. {{ $verses['surah']['name']['transliteration']['id'] }}</a>
    </div>
    <div class="card mb-3">
        <div class="card-header text-white bg-success text-center">QS. {{ $verses['surah']['name']['transliteration']['id'] }} [{{ $verses['surah']['number'] }}] ayat {{ $verses['number']['inSurah'] }}</div>
        <div class="card-body text-center">
            <h5 class="card-title">{{ $verses['text']['arab'] }}</h5>
            <p class="card-text">{{ $verses['translation']['id'] }}</p>
            <audio controls>
                <source src="{{ $verses['audio']['primary'] }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header text-white bg-success text-center">Tafsir</div>
        <div class="card-body text-center">
            <h5 class="card-title">{{ $verses['text']['arab'] }}</h5>
            <p class="card-text">{{ $verses['tafsir']['id']['short'] }}</p>
            <p class="card-text">{{ $verses['tafsir']['id']['long'] }}</p>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('surat', [$verses['surah']['number'], 0]) }}" class="btn btn-warning btn-lg mb-3"><< Kembali ke QS. {{ $verses['surah']['name']['transliteration']['id'] }}</a>
    </div>
</div>
@endsection
