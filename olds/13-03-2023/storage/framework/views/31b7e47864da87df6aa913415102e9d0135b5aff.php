<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOFT CACTUS - Agence de communication digitale</title>
    <link href="<?php echo e(asset('front/css/style.css')); ?>" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('imgs/logo-purple.png')); ?>" id="faviconTag" />
    <script>
        const faviconTag = document.getElementById("faviconTag");
        const isDark = window.matchMedia("(prefers-color-scheme: dark)");

        const changeFavicon = () => {
            if (isDark.matches) faviconTag.href = "<?php echo e(asset('imgs/logo-white.png')); ?>"
            else faviconTag.href = "<?php echo e(asset('imgs/logo-purple.png')); ?>"
        };
        changeFavicon();
        setInterval(changeFavicon, 1000);

        function myFunction(x) {
            x.classList.toggle("change");
        }


        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
</head>

<body><?php /**PATH C:\xampp\htdocs\SoftCactus\resources\views/frontOffice/partial/head.blade.php ENDPATH**/ ?>