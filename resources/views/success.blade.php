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
        <div class="bg-white rounded-custom-top content row justify-content-center m-0">
            <div class="col-11 d-flex justify-content-center align-items-center flex-column"
                style="padding-bottom: 7rem;">
                <div class="success-checkmark mb-3">
                    <div class="check-icon ">
                        <span class="icon-line line-tip"></span>
                        <span class="icon-line line-long"></span>
                        <div class="icon-circle"></div>
                        <div class="icon-fix"></div>
                    </div>
                </div>
                <span class="text-success text-center">Terima kasih Basudara!</span>
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
    <script>
        // Buka tab baru untuk WhatsApp setelah 1,2 detik
        setTimeout(() => {

            // window.open("https://chat.whatsapp.com/BZEKLTPoW0rIL1wGZHLstk", "_blank");

            window.location.href = "https://chat.whatsapp.com/BZEKLTPoW0rIL1wGZHLstk";

            setTimeout(() => {
                window.location.href = "{{route('home')}}";
            }, 1500);
        }, 1300);
    </script>

</body>

</html>