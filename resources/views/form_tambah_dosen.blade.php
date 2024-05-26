<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Dosen</title>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Form Tambah Dosen</h1>
                <hr>
                <form action="{{ route('dosen.store_dosen') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nim">NIDN</label>
                        <input type="text" id="nidn" name="nidn" value="{{ old('nidn') }}" class="form-control @error('nidn') is-invalid @enderror">
                        @error('nidn')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama Lengkap</label>
                        <input type="text" id="nama_dosen" name="nama_dosen" value="{{ old('nama_dosen') }}" class="form-control @error('nama_dosen') is-invalid @enderror">
                        @error('nama_dosen')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama">Alamat</label>
                        <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}" class="form-control @error('alamat') is-invalid @enderror">
                        @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama">No. Telephon</label>
                        <input type="text" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}" class="form-control @error('no_tlp') is-invalid @enderror">
                        @error('no_tlp')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
