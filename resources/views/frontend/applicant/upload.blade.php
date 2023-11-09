<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logo-i.png">
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

        .btn-previous{
            border-radius: 7px;
            border: 1px solid #25477B;
            background: #B0CAF0;
            width: 280px;
        }

        .btn-primary{
            border-radius: 7px;
            border: 1px solid #25477B;
            width: 150px;
        }

        .btn-primary:hover{
            background: #3A6CB9;
            box-shadow: -10px 10px 4px 0px #3A6CB9;
        }

        #submit-button:disabled {
            cursor: not-allowed;
        }

        .select2-container--default .select2-selection--single {
            height: 38px;
        }

        .form-control:focus::placeholder {
            text-align: left;
        }

        #institut {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- <div class="progress" style="background: #25477B">
            <div class="progress-bar" role="progressbar" style="width: 33.33%;" aria-valuenow="33.33" aria-valuemin="0" aria-valuemax="100"></div>
        </div> --}}
        <div class="d-flex flex-row flex-column mt-5">
            <form class="align-self-center" id="registration-form" action="/pelamar-register" method="post">
                <!-- Langkah 1 -->
                
                <div class="step step-1">
                    {{-- <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> --}}
                    <h2 class="text-center mb-5" style="color: #25477B; font-weight: 700;">Buat foto profilmu</h2>
                    <h5 class="text-center mb-2 p-3 align-self-center" style="color: #292929; border-radius: 7px; border: 1px solid #E7E7E7; background: #C9DEFD;">
                        Digunakan untuk mencari rekomendasi pekerjaan yang<br>pas untukmu
                    </h5>
                    <div class="form-row">
                        <div class="form-group col-md-12 text-center">
                            <img id="file-preview" class="rounded-circle" height="200px" style="max-width: 200px">
                            <img src="/images/Windows_10_Default_Profile_Picture.svg.png" id="upload" height="200px" style="max-width: 200px" class="rounded-circle" alt="upload">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="file" class="form-control" id="upload-file" name="upload-file">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" style="background: #25477B" id="submit-button" disabled>Selesai</button>
                </div>
            </form>
        </div>
        
        <footer class="align-self-end">
            <h6 class="text-center" style="color: #c1c1c1; margin-top: 50px">&copy; <script>document.write(new Date().getFullYear());</script> <a href="/">JobFinder</a></h6>
        </footer>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/upload.js"></script>
    {{-- <script src="/js/reg.js"></script> --}}
    {{-- <script src="/js/reg2.js"></script> --}}
    <script>
        const file = document.getElementById('upload-file');

        function checkForm() {
            if (file.value !== '') {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        }

        file.addEventListener('input', checkForm);
    </script>
    
</body>
</html>
