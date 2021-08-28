@extends('dashboard.layout')

@section('content')
<h2 class="mt-0">Edit User</h2>

<div class="card">
    <div class="card-body">
        <form action="{{ route('berat.update',$berat->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="{{ $berat->tanggal }}"
                            required="required" placeholder="Input field">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Max</label>
                        <input type="number" class="form-control" name="max" value="{{ $berat->max }}"
                            required="required" placeholder="Input field">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Min</label>
                        <input type="number" class="form-control" name="min" value="{{ $berat->min }}"
                            required="required" placeholder="Input field">
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