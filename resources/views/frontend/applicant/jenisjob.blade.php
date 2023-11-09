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
            <form class="align-self-center" id="registration-form" action="/upload">
                <!-- Langkah 1 -->
                
                <div class="step step-1">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h2 class="text-center mb-5" style="color: #25477B; font-weight: 700;">Jenis pekerjaan yang dicari</h2>
                    <h5 class="text-center mb-5 p-3 align-self-center" style="color: #292929; border-radius: 7px; border: 1px solid #E7E7E7; background: #C9DEFD;">
                        Digunakan untuk mencari rekomendasi pekerjaan yang<br>pas untukmu
                    </h5>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select class="selectpicker form-control" name="location" id="jenis_pekerjaan" data-live-search="true" value="" required>
                                <option value="">Pilih Lokasi</option>
                                <option value="location1">Pekerjaan 1</option>
                                <option value="location2">Pekerjaan 2</option>
                                <option value="location3">Pekerjaan 3</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary next float-right" style="background: #25477B" type="button">Selanjutnya</button>
                </div>
    
                <!-- Langkah 2 -->
                
                <div class="step step-2">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h2 class="text-center mb-5" style="color: #25477B; font-weight: 700;">Tentukan preferensi pekerjaan mu</h2>
                    <h5 class="text-center mb-5 p-3 align-self-center" style="color: #292929; border-radius: 7px; border: 1px solid #E7E7E7; background: #C9DEFD;">
                        Digunakan untuk mencari rekomendasi pekerjaan yang<br>pas untukmu
                    </h5>

                    <label for="tipekerja">Ekspektasi gaji bulanan</label>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="tipekerja" id="" value="checkedValue" checked>
                                    Display value
                              </label>
                            </div>
                        </div>
                    </div>

                    <label for="mingaji">Ekspektasi gaji bulanan</label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="min-gaji" placeholder="Min." name="mingaji" value="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="max-gaji" placeholder="Max." name="maxgaji" value="" required>
                        </div>
                    </div>

                    <label for="kota">Preferensi kota kerja</label>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="kota" placeholder="Nama Tempat" name="kota" value="" required>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary btn-previous prev" type="button">Kembali</button>
                    <button class="btn btn-primary next float-right" style="background: #25477B" type="button">Selanjutnya</button>
                </div>
    
                <!-- Langkah 3 -->
                <div class="step step-3">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h2 class="text-center mb-5" style="color: #25477B; font-weight: 700;">Tambahkan skill yang kamu kuasai</h2>
                    <h5 class="text-center mb-5 p-3 align-self-center" style="color: #292929; border-radius: 7px; border: 1px solid #E7E7E7; background: #C9DEFD;">
                        Digunakan untuk mencari rekomendasi pekerjaan yang<br>pas untukmu
                    </h5>

                    <label for="kota">5 - 10 skill yang paling kamu kuasai</label>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select class="form-select select2" multiple="multiple" id="tags" style="width: 100%;">
                                <option value="tag1">Javascript</option>
                                <option value="tag2">CSS</option>
                                <option value="tag3">Tag 3</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-previous prev" type="button">Kembali</button>
                    <button class="btn btn-primary next float-right" style="background: #25477B" type="button">Selanjutnya</button>
                </div>

                <!-- Langkah 4 -->
                <div class="step step-4">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h2 class="text-center mb-5" style="color: #25477B; font-weight: 700;">Background pendidikan terakhirmu</h2>
                    <h5 class="text-center mb-5 p-3 align-self-center" style="color: #292929; border-radius: 7px; border: 1px solid #E7E7E7; background: #C9DEFD;">
                        Beritahu latar pendidikanmu untuk mendapatkan 23%<br>wawancara lebih banyak
                    </h5>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select class="selectpicker form-control" name="institut" id="institut" data-live-search="true" value="" required>
                                <option value="">Pilih Institusi</option>
                                <option value="">PNP</option>
                                <option value="">UNAND</option>
                                <option value="">UNP</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select class="selectpicker form-control" name="gelar" id="gelar" data-live-search="true" value="" required>
                                <option value="">Gelar</option>
                                <option value="">D4</option>
                                <option value="">D4</option>
                                <option value="">D4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select class="selectpicker form-control" name="gelar" id="gelar" data-live-search="true" value="" required>
                                <option value="">Bidang Studi</option>
                                <option value="">Studi</option>
                                <option value="">Studi</option>
                                <option value="">Studi</option>
                            </select>
                        </div>
                    </div>

                    <label for="mingaji">Tanggal Mulai</label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <select class="selectpicker form-control" name="bulanmulai" id="tahun-mulai" data-live-search="true" value="" required>
                                <option value="">Bulan</option>
                                <option value="">Januari</option>
                                <option value="">Februari</option>
                                <option value="">Maret</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="selectpicker form-control" name="tahunmulai" id="tahun-mulai" data-live-search="true" value="" required>
                                <option value="">Tahun</option>
                                <option value="">2000</option>
                                <option value="">3000</option>
                                <option value="">4000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pend" id="" value="checkedValue">
                                    Saya masih bersekolah disini
                              </label>
                            </div>
                        </div>
                    </div>

                    <label for="mingaji">Tanggal Berakhir</label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <select class="selectpicker form-control" name="bulanakhir" id="bulan-berakhir" data-live-search="true" value="" required>
                                <option value="">Bulan</option>
                                <option value="">Januari</option>
                                <option value="">Februari</option>
                                <option value="">Maret</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="selectpicker form-control" name="tahunakhir" id="tahun-berakhir" data-live-search="true" value="" required>
                                <option value="">Tahun</option>
                                <option value="">2000</option>
                                <option value="">3000</option>
                                <option value="">4000</option>
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-previous prev" type="button">Kembali</button>
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
    <script src="/js/reg.js"></script>
    <script src="/js/reg2.js"></script>
    
</body>
</html>
