@extends('dashboard.layout')

@section('content')
<div class="row mb-3">
    <div class="col-md-6">
        <h2 class="m-0">Daftar Berat</h2>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ route('berat.create') }}" class="btn btn-primary">Tambah Berat</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable-table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Max</th>
                        <th class="text-center">Min</th>
                        <th class="text-center">Perbedaan</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berat as $key=>$b)
                    <tr>
                        <td class="text-center">{{ $b->tanggal }}</td>
                        <td>{{ $b->min }}</td>
                        <td>{{ $b->max }}</td>
                        <td>{{ $b->perbedaan }}</td>
                        <td class="text-center">
                            <form method="POST" action="{{ route('berat.destroy', $b->id ) }}">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{ route('berat.show',$b->id) }}">Lihat</a>
                                <a class="btn btn-warning" href="{{ route('berat.edit',$b->id) }}">Edit</a>

                                <button class="btn btn-danger">Hapus</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="text-center"><b>Rata-Rata</b></td>
                        <td>{{ $min_rata_rata }}</td>
                        <td>{{ $max_rata_rata }}</td>
                        <td>{{ $perbedaan_rata_rata }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
