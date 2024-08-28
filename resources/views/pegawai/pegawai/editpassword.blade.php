@extends('template.pegawai')

@section('content')
    <div class="card card-success card-outline">
        <div class="card-body">
            <!-- <h4 class="card-title">Edit Password</h4> -->
            <form action="{{ route('pegawai.update.password', $pegawai->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="password">Edit Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan Password</button>
            </form>
        </div>
    </div>
@endsection
