<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nusa INA</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/logo.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" />
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .content {
            height: 85vh;
        }

        .bg-info {
            height: 15vh;
        }
    </style>
</head>

<body>
    <div class="bg-info h-25">
        <div class="row justify-content-center align-items-center m-0 pt-4">
            <div class="col-11">
                <h5 class="text-white text-center">E-Nusaina</h5>
            </div>
        </div>
        <div class="bg-white rounded-custom-top content row justify-content-center m-0">
            <div class="col-11 d-flex flex-column pt-5">
                <div class="text-center">
                    <img src="/assets/images/logo.jpg" alt="logo" width="155">
                    <p class="mb-3">Salam Nusaina</p>
                    <p class="text-start">Jadikan Maluku Tengah yang lebih baik lagi. Bersama Ibrahim Ruhunussa dan Drg.
                        Liliane Aitonam, Katong menang!!
                    </p>

                    <div class="d-block">
                        <a href="{{ route('daftar') }}"
                            class="btn btn-simpan btn-info fw-bold shadow text-white mt-3 py-2 px-4 w-100">Daftar
                            Relawan</a>
                    </div>
                </div>
            </div>

            <div class="col-11 d-flex flex-column align-items-center">
                <a href="https://chat.whatsapp.com/BZEKLTPoW0rIL1wGZHLstk" class="text-decoration-none text-info">
                    <i class="fa-brands fa-whatsapp"></i>
                    Grup Nusaina
                </a>
            </div>
        </div>
        <div class="row fixed-bottom justify-content-center m-0">
            <div class="col-11 p-2">
                <small>Versi 1.10.24</small>
            </div>
        </div>

    </div>

    <script src="/assets/vendor/bootstrap/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
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
</body>

</html> 