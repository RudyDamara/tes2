@extends('dashboard.layout')

@section('content')
<h2 class="mt-0">Lihat Berat</h2>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-left">Tanggal</th>
                        <th>{{$berat->tanggal}}</th>
                    </tr>
                </thead>
                    <tr>
                        <td class="text-left"><b>Max</b></td>
                        <td>{{ $berat->max }}</td>
                    </tr>

                    <tr>
                        <td class="text-left"><b>Min</b></td>
                        <td>{{ $berat->min }}</td>
                    </tr>

                    <tr>
                        <td class="text-left"><b>Perbedaan</b></td>
                        <td>{{ $berat->perbedaan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12 text-right">
            <a href="{{ route('berat.index') }}" class="btn btn-default">Kembali</a>
        </div>
    </div>
</div>

@endsection