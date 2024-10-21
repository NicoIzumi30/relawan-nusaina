<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nusa INA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/logo.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <style>
        .form-control:focus {
            border-color: transparent;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="bg-info h-25">
        <div class="row justify-content-center align-items-center m-0 pt-4">
            <div class="col-11 d-inline-flex justify-content-between">
                <a href="{{route('home')}}" class="text-decoration-none text-white">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
                <h5 class="text-white text-center">E-Nusaina</h5>
                <span class="text-info">-</span>
            </div>
        </div>
        <div class="bg-white rounded-custom-top content row justify-content-center m-0 ">
            <div class="col-11 pb-5 mb-5">
                <a href="{{route('home')}}"
                    class="btn btn-danger shadow text-white w-100 fw-bold mt-4 mb-5 py-3 rounded-5">Kembali</a>

                <form action="{{route('send')}}" method="post" enctype="multipart/form-data" id="form_tambah">
                    @csrf
                    <div class="row align-items-center justify-content-center mb-3">
                        <label for="nama" class="col-3 col-form-label">Nama</label>
                        <div class="col-8">
                            <input type="text" class="form-control border-0" id="nama" name="nama" placeholder="Nama Lengkap">
                            @if($errors->has('nama'))
                            <small class="text-danger">{{$errors->first('nama')}}</small>
                            @endif
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <label for="alamat" class="col-3 col-form-label">Alamat</label>
                        <div class="col-8">
                        <select name="kecamatan_id" id="kecamatan" class="form-control border-0 mb-1">
                                <option value="" disabled selected>Pilih Kecamatan</option>
                                @foreach ($kecamatans as $kecamatan)
                                    <option value="{{$kecamatan['id']}}">{{$kecamatan['nama_kecamatan']}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('kecamatan_id'))
                            <small class="text-danger">{{$errors->first('kecamatan_id')}}</small>
                            @endif
                            <select name="kelurahan_id" id="kelurahan" class="form-control border-0 mb-1">
                                <option value="" disabled selected>Pilih Kelurahan</option>
                            </select>
                            @if($errors->has('kelurahan_id'))
                            <small class="text-danger">{{$errors->first('kelurahan_id')}}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center mb-3">
                        <label for="telepon" class="col-3 col-form-label">Telepon</label>
                        <div class="col-8">
                            <input type="text" class="form-control border-0" name="telepon" id="telepon" placeholder="085*********">
                            @if($errors->has('telepon'))
                            <small class="text-danger">{{$errors->first('telepon')}}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center mb-3">
                        <label for="ktp" class="col-3 col-form-label">KTP</label>
                        <div class="col-8">
                            <input type="file" class="custom-file-input w-100" id="ktp" name="ktp" data-content="Upload Foto">
                            @if($errors->has('ktp'))
                            <small class="text-danger">{{$errors->first('ktp')}}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center mb-3">
                        <label for="nik" class="col-3 col-form-label">NIK</label>
                        <div class="col-8">
                            <input type="text" class="form-control border-0" name="nik" id="nik" placeholder="351************">
                            @if($errors->has('nik'))
                            <small class="text-danger">{{$errors->first('nik')}}</small>
                            @endif
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center mb-3">
                        <label for="tps" class="col-3 col-form-label">TPS</label>
                        <div class="col-8">
                        <select name="tps_id" id="tps" class="form-control border-0 mb-1">
                                <option value="" disabled selected>Pilih TPS</option>
                            </select>  
                            @if($errors->has('tps_id'))
                            <small class="text-danger">{{$errors->first('tps_id')}}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row justify-content-center mb-4">
                        <div class="col-11">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" required id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Dengan ini Beta secara sadar mendukung Ibrahim Ruhunussa dan Drg. Liliane Aitonam
                                    sebagai Bupati dan Wakil Bupati Maluku Tengah!!
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-block text-center">
                        <button type="submit"
                            class="btn btn-simpan btn-info fw-bold shadow text-white mt-3 py-2 px-4">Kirim</button>
                    </div>
                </form>
            </div>
            <div class="col-12 fixed-bottom bg-info rounded-custom-top p-2">
                <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=6281240588174">
                <div class="d-flex justify-content-center align-items-center gap-2">
                    <i class="fa-solid fa-phone-volume text-white"></i>
                    <div>
                        <p class="fw-bold text-center text-white mb-0">Hub Team IT</p>
                        <p class="fw-bold text-center text-white mb-0">E-Nusaina</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

    <script src="/assets/vendor/bootstrap/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.querySelector('.content > div');

            content.style.opacity = '0';
            content.style.transform = 'scale(0.95)';

            gsap.to(content, {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: "back.out(1.3)"
            });
        });
    </script>
    <script>
         $('#kecamatan').on('change', function () {
            const kecamatan = $(this).val();
            const url = '/get-kelurahan/' + kecamatan;
            $('#kelurahan').empty().append('<option value="">Pilih Kelurahan</option>');
            if (kecamatan) {
                $.get(url, function (kelurahanData) {
                    kelurahanData.forEach(function (kelurahan) {
                        $('#kelurahan').append('<option value="' + kelurahan.id + '">' + kelurahan.nama_kelurahan + '</option>');
                    });
                })
            }
        });
        $('#kelurahan').on('change', function () {
            const kelurahan = $(this).val();
            const url = '/get-tps/' + kelurahan;
            $('#tps').empty().append('<option value="">Pilih TPS</option>');
            if (kelurahan) {
                $.get(url, function (TpsData) {
                    TpsData.forEach(function (tps) {
                        $('#tps').append('<option value="' + tps.id + '">' + tps.nama_tps + '</option>');
                    });
                })
            } else {
            }
        }); 
        document.getElementById('ktp').addEventListener('change', function() {
            var fileName = this.files.length > 0 ? this.files[0].name : "Upload Foto";
            this.setAttribute('data-content', fileName);
        });
    </script>
</body>

</html> 