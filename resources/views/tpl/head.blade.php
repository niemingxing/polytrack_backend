<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@if(isset($tdk)){{$tdk["title"]}}@endif</title>

<link rel="icon" href="/favicon.ico">

<meta name="theme-color" content="rgb(0 122 255)">
<meta name="_foundr" content="94c850312782eb473efa53c1d9098f0f">
<meta name="description" content="@if(isset($tdk)){{$tdk["description"]}}@endif" />
<meta name="keywords" content="@if(isset($tdk)){{$tdk["keywords"]}}@endif" />
<meta property="og:title" content="@if(isset($tdk)){{$tdk["title"]}}@endif" />
<meta property="og:image" content="" />
<meta property="og:description" content="@if(isset($tdk)){{$tdk["description"]}}@endif" />
<link rel="canonical" href="https://polytrack.info" />
<!-- Require stylesheet load from local -->
<!-- <link href="./dist/css/tailwind.min.css" rel="stylesheet"> -->
<!-- <link href="./dist/css/fontawesome-all.min.css" rel="stylesheet"> -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BBMX099H8G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BBMX099H8G');
</script>
<!-- Required stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=66552af92b0bca00199fbefb&product=inline-share-buttons&source=platform" async="async"></script>
<style>
    .dropdown-menu {
        display: none;
        opacity: 0;
        transform: scale(0.9);
        transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
    }
    .dropdown-menu.show {
        display: block;
        opacity: 1;
        transform: scale(1);
    }
    #hamburger {
        z-index: 10000;
    }
    @media (max-width: 1023px) {
        #navbar {
            position: fixed;
            left: 100%;
            z-index: 9999;
            transition: left 0.3s ease-in-out;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('#dropdownButton').click(function(event) {
            event.stopPropagation();
            $('#dropdownMenu').toggleClass('show');
        });

        $(document).click(function(event) {
            if (!$(event.target).closest('#dropdownButton').length) {
                $('#dropdownMenu').removeClass('show');
            }
        });
        document.getElementById('hamburger').addEventListener('click', function() {
            var navbar = document.getElementById('navbar');
            if (navbar.style.left === '0%') {
                navbar.style.left = '100%';
            } else {
                navbar.style.left = '0%';
            }
        });
    });
</script>