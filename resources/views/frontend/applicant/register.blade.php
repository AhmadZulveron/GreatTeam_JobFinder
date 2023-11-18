<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            /* justify-content: center;
            align-items: center; */
            height: 100vh;
            font-family: KoHo;
        }

        .btn-primary{
            background: #3A6CB9;
            box-shadow: -10px 10px 4px 0px #B0CAF0;
            width: 550px;
        }

        .btn-primary:hover{
            background: #3A6CB9;
            box-shadow: -10px 10px 4px 0px #3A6CB9;
        }

        #submit-button:disabled {
            cursor: not-allowed;
        }

        /* Menyesuaikan tinggi elemen select */
        .select2-container--default .select2-selection--single {
            height: 38px;
        }

        /* Gaya placeholder pada fokus */
        .form-control:focus::placeholder {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container mt-5" style="padding-top: 100px;">
        <h2 class="text-center mb-5" style="color: #25477B; font-weight: 700;">Buat profil<br>JobFinder mu</h2>
        <form class="m-5 p-2" method="POST" action="/registrasi">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control @error('namadepan') is-invalid @enderror" id="namadepan"
                     placeholder="Nama Depan" name="first_name" value="{{ old('first_name')}}" required>

                    @error('namadepan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control @error('namabelakang') is-invalid @enderror" id="namabelakang"
                    placeholder="Nama Belakang" name="last_name" value="{{ old('last_name')}}" required>
                    @error('namabelakang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                     name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="{{ old('password')}}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <select class="selectpicker form-control" name="address" id="location" data-live-search="true" value="{{ old('address')}}" required>
                        <option value="">Pilih Lokasi</option>
                        <option value="location1">Limau Manis 1</option>
                        <option value="location2">Limau Manis 2</option>
                        <option value="location3">Limau Manis 3</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <input type="tel" class="form-control" id="notelpon" placeholder="No Telpon" name="phone" value="{{ old('phone')}}" required>
                </div>
            </div>
            <div class="form-row">
                <button type="submit" id="submit-button" class="btn btn-primary mx-auto d-block mt-4">Daftar</button>
            </div>
        </form>
        <h6 class="text-center mb-5" style="color: #c1c1c1;">&copy; <script>document.write(new Date().getFullYear());</script> <a href="/">JobFinder</a></h6>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#location').select2({
                placeholder: "Lokasi",
                allowClear: true,
            });
        });
    </script>
</body>
</html>
