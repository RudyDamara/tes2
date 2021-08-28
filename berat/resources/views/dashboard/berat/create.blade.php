@extends('dashboard.layout')

@section('content')
<h2 class="mt-0">Tambah Berat

<div class="card">
    <div class="card-body">
        <form action="{{ route('berat.store') }}" method="POST" role="form">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required="required"
                            placeholder="Input field">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Max</label>
                        <input type="number" class="form-control" name="max" required="required"
                            placeholder="Input field">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Min</label>
                        <input type="number" class="form-control" name="min" required="required"
                            placeholder="Input field">
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('berat.index') }}" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection