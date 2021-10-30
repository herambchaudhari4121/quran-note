@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center">Daftar Surat</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nomor</th>
            <th>Nama Surat</th>
            <th>Arti Surat</th>
            <th>Jumlah Ayat</th>
            <th>View</th>
            @foreach ($surahs as $surah)
                <tr>
                    <td>
                        {{ $surah['number'] }}
                    </td>
                    <td>
                        {{ $surah['name']['short'] }}
                        {{ $surah['name']['transliteration']['id'] }}
                    </td>
                    <td>
                        {{ $surah['name']['translation']['id'] }}
                    </td>
                    <td>
                        {{ $surah['numberOfVerses'] }} ayat
                    </td>
                    <td>
                        <a href="{{ route('surat', [$surah['number'], 0]) }}">Detail</a>
                    </td>
                </tr>
            @endforeach
    </table>
</div>
@endsection
