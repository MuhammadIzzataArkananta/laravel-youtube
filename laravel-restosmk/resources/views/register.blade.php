@extends('front')

@section('content')

<div class="row">
    <div class="col-6">
        <form action="" method="post">
            <div class="mt-2">
                <label class="form-label" for="">Pelanggan</label>
                <input class="form-control" type="text" name="pelanggan" id="">
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Alamat</label>
                <input class="form-control" type="text" name="alamat" id="">
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Telp</label>
                <input class="form-control" type="text" name="telp" id="">
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Jenis Kelamin</label>
                <select class="form-select" name="jeniskelamin" id="">
                    <option value="l">L</option>
                    <option value="p" selected>P</option>
                </select>
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Email</label>
                <input class="form-control" type="email" name="email" id="">
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Password</label>
                <input class="form-control" type="text" name="password" id="">
            </div>
            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
    </div>
</div>

@endsection