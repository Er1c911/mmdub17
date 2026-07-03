<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkap - Losari</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #FAF8F6;
            background-image: repeating-linear-gradient(
                90deg,
                transparent,
                transparent 2px,
                rgba(111, 98, 127, 0.02) 2px,
                rgba(111, 98, 127, 0.02) 4px
            ),
            repeating-linear-gradient(
                0deg,
                transparent,
                transparent 2px,
                rgba(111, 98, 127, 0.02) 2px,
                rgba(111, 98, 127, 0.02) 4px
            );
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 2rem;
        }
        nav {
            background-color: #6F627F;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 20px rgba(111, 98, 127, 0.15);
            display: flex;
            align-items: center;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 3rem;
            margin-left: auto;
        }
        nav a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            position: relative;
        }
        nav a:hover {
            color: #D4A574;
        }
        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #D4A574;
            transition: width 0.3s ease;
        }
        nav a:hover::after {
            width: 100%;
        }
        nav a.active {
            color: #D4A574;
        }
        nav a.active::after {
            width: 100%;
        }
        .secondary-nav {
            background-color: #8B7B94;
            padding: 0.8rem 2rem;
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
            box-shadow: 0 2px 10px rgba(111, 98, 127, 0.1);
        }
        .secondary-nav a {
            color: white;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
            position: relative;
            letter-spacing: 0.3px;
        }
        .secondary-nav a:hover {
            color: #D4A574;
        }
        .secondary-nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #D4A574;
            transition: width 0.3s ease;
        }
        .secondary-nav a:hover::after {
            width: 100%;
        }
        .secondary-nav a.active {
            color: #D4A574;
        }
        .secondary-nav a.active::after {
            width: 100%;
        }
        .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            text-decoration: none;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }
        .nav-brand-logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
        }
        .nav-brand-text {
            display: flex;
            flex-direction: column;
            gap: 0.1rem;
        }
        .nav-brand-text span:first-child {
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .nav-brand-text span:last-child {
            font-size: 0.7rem;
            font-weight: 500;
            opacity: 0.9;
            letter-spacing: 0.3px;
        }
        .page-header {
            background: transparent;
            color: #6F627F;
            padding: 1.5rem 0;
            border-radius: 0;
            margin-bottom: 0.5rem;
            box-shadow: none;
            text-align: center;
            position: relative;
            overflow: visible;
        }
        .page-header::before {
            display: none;
        }
        .page-header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            letter-spacing: -1px;
            position: relative;
            z-index: 1;
        }
        .page-header p {
            color: #8B7B94;
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }
        .carousel-gallery {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        .carousel-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .carousel-container {
            max-width: 300px;
            margin: 0.8rem auto;
            position: relative;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(111, 98, 127, 0.15);
            border: 3px solid #6F627F;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .carousel-container:hover {
            box-shadow: 0 8px 30px rgba(111, 98, 127, 0.3);
            transform: translateY(-3px);
            border-color: #D4A574;
        }
        .carousel-slide {
            display: none;
        }
        .carousel-slide.active {
            display: block;
        }
        .carousel-slide img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 15px;
        }
        .carousel-counter {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(111, 98, 127, 0.85);
            color: white;
            padding: 0.3rem 0.6rem;
            border-radius: 5px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .carousel-info {
            text-align: center;
            margin-top: 0.5rem;
            padding: 0 1rem;
        }
        .carousel-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: #6F627F;
            margin: 0.2rem 0;
        }
        .carousel-faculty {
            font-size: 0.95rem;
            color: #8B7B94;
            margin: 0.1rem 0;
            font-weight: 500;
        }
        footer {
            background-color: #6F627F;
            color: white;
            text-align: left;
            padding: 1.5rem 2rem;
            margin-top: 2rem;
            border-top: 3px solid #D4A574;
            box-shadow: 0 -4px 20px rgba(111, 98, 127, 0.15);
        }
        footer p {
            font-weight: 300;
            letter-spacing: 0.5px;
            margin-bottom: 1.5rem;
        }
        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: nowrap;
        }
        .footer-top p {
            margin-bottom: 0;
            flex: 0 1 auto;
            min-width: 0;
        }
        .footer-top a {
            color: white;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.3s ease, text-decoration 0.3s ease;
            position: relative;
        }
        .footer-top a:hover {
            color: #D4A574;
            text-decoration: underline;
        }
        .footer-logos {
            display: flex;
            gap: 2rem;
            align-items: center;
            margin-top: 1.5rem;
            flex-wrap: wrap;
        }
        .footer-logos img {
            height: 50px;
            width: auto;
            object-fit: contain;
            opacity: 0.9;
            transition: opacity 0.3s ease, transform 0.3s ease, filter 0.3s ease;
            cursor: pointer;
        }
        .footer-logos img:hover {
            opacity: 1;
            transform: scale(1.1);
            filter: drop-shadow(0 4px 8px rgba(111, 98, 127, 0.25));
        }
        @media (max-width: 768px) {
            .secondary-nav {
                gap: 1.5rem;
                padding: 0.8rem 1rem;
            }
            .secondary-nav a {
                font-size: 0.85rem;
            }
            nav ul {
                gap: 1.5rem;
                flex-wrap: wrap;
                margin-left: auto;
            }
            nav a {
                font-size: 0.8rem;
            }
            .nav-brand-logo {
                width: 35px;
                height: 35px;
            }
            .nav-brand-text span:first-child {
                font-size: 0.75rem;
            }
            .nav-brand-text span:last-child {
                font-size: 0.6rem;
            }
            .container {
                padding: 2rem 1rem;
            }
            .page-header {
                padding: 2rem 0;
                margin-bottom: 2rem;
            }
            .page-header h1 {
                font-size: 2rem;
            }
            .carousel-gallery {
                gap: 1.5rem;
            }
            footer {
                padding: 2rem 1rem;
            }
            .footer-top {
                flex-direction: column;
                gap: 0.5rem;
                align-items: flex-start;
            }
            .footer-logos {
                justify-content: flex-start;
            }
        }
        @media (max-width: 480px) {
            .secondary-nav {
                gap: 0.8rem;
                padding: 0.8rem 0.5rem;
            }
            .secondary-nav a {
                font-size: 0.75rem;
            }
            nav ul {
                gap: 0.8rem;
                margin-left: auto;
            }
            nav a {
                font-size: 0.7rem;
            }
            .nav-brand {
                gap: 0.5rem;
            }
            .nav-brand-logo {
                width: 30px;
                height: 30px;
            }
            .nav-brand-text span:first-child {
                font-size: 0.65rem;
            }
            .nav-brand-text span:last-child {
                font-size: 0.55rem;
            }
            .container {
                padding: 1rem;
            }
            .page-header {
                padding: 1rem 0;
            }
            .page-header h1 {
                font-size: 1.5rem;
            }
            .carousel-gallery {
                gap: 1rem;
                flex-direction: column;
                align-items: center;
            }
            footer {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('beranda') }}" class="nav-brand">
            <img src="{{ asset('images/logommd.jpg') }}" alt="Logo MMD UB" class="nav-brand-logo">
            <div class="nav-brand-text">
                <span>MMD UB</span>
                <span>17 LOSARI</span>
            </div>
        </a>
        <ul>
            <li><a href="{{ route('beranda') }}" @if(Route::currentRouteName() === 'beranda') class="active" @endif>Beranda</a></li>
            <li><a href="{{ route('tentang') }}" @if(Route::currentRouteName() === 'tentang') class="active" @endif>Tentang</a></li>
            <li><a href="{{ route('kordes') }}" @if(in_array(Route::currentRouteName(), ['kordes', 'sakukan', 'acara', 'humas', 'perkap-konsum', 'pdd'])) class="active" @endif>Tim</a></li>
            <li><a href="{{ route('informasi') }}" @if(Route::currentRouteName() === 'informasi') class="active" @endif>Informasi</a></li>
            <li><a href="{{ route('peta') }}" @if(Route::currentRouteName() === 'peta') class="active" @endif>Lokasi</a></li>
            <li><a href="{{ route('kontak') }}" @if(Route::currentRouteName() === 'kontak') class="active" @endif>Kontak</a></li>
        </ul>
    </nav>

    <div class="secondary-nav">
        <a href="{{ route('kordes') }}" @if(Route::currentRouteName() === 'kordes') class="active" @endif>Kordes</a>
        <a href="{{ route('sakukan') }}" @if(Route::currentRouteName() === 'sakukan') class="active" @endif>Sekben</a>
        <a href="{{ route('acara') }}" @if(Route::currentRouteName() === 'acara') class="active" @endif>Acara</a>
        <a href="{{ route('humas') }}" @if(Route::currentRouteName() === 'humas') class="active" @endif>Humas</a>
        <a href="{{ route('perkap-konsum') }}" @if(Route::currentRouteName() === 'perkap-konsum') class="active" @endif>Perkap & Konsum</a>
        <a href="{{ route('pdd') }}" @if(Route::currentRouteName() === 'pdd') class="active" @endif>PDD</a>
    </div>

    <div class="container">
        <div class="page-header">
            <h1>Perkap & Konsum</h1>
        </div>

        <div class="carousel-gallery">
            <!-- Sekretaris Carousel -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <div class="carousel-slide active">
                        <img src="{{ asset('images/perkap-konsum/eric_1.png') }}" alt="Perkap & Konsum Foto 1">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('images/perkap-konsum/eric_2.png') }}" alt="Perkap & Konsum Foto 2">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('images/perkap-konsum/eric_3.png') }}" alt="Perkap & Konsum Foto 3">
                    </div>
                </div>
                <div class="carousel-info">
                    <p class="carousel-name">Eric</p>
                    <p class="carousel-faculty">FILKOM - 24</p>
                </div>
            </div>

            <!-- Bendahara Carousel -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <div class="carousel-slide active">
                        <img src="{{ asset('images/perkap-konsum/firdaus_1.png') }}" alt="Perkap & Konsum Foto 1">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('images/perkap-konsum/firdaus_2.png') }}" alt="Perkap & Konsum Foto 2">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('images/perkap-konsum/firdaus_3.png') }}" alt="Perkap & Konsum Foto 3">
                    </div>
                </div>
                <div class="carousel-info">
                    <p class="carousel-name">Firdaus</p>
                    <p class="carousel-faculty">FPIK - 24</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-top">
            <p>&copy; 2026 MMD UB - Kelompok 17, Kelurahan Losari</p>
            <p>Designed & Maintained by <a href="https://github.com/Er1c911" target="_blank" rel="noopener noreferrer">Eric</a></p>
        </div>
        <div class="footer-logos">
            <img src="{{ asset('images/logo/Kemendikbud.png') }}" alt="Kemendikbud Logo" title="Kementerian Pendidikan">
            <img src="{{ asset('images/logo/UB.png') }}" alt="UB Logo" title="Universitas Brawijaya">
            <img src="{{ asset('images/logo/dikti.png') }}" alt="DIKTI Logo" title="DIKTI">
            <img src="{{ asset('images/logo/drpm.png') }}" alt="DRPM Logo" title="DRPM">
            <img src="{{ asset('images/logo/mmd.png') }}" alt="MMD Logo" title="MMD">
        </div>
    </footer>

    <script>
        // Initialize carousel counters for each carousel
        let currentSlides = {
            carousel1: 0,
            carousel2: 0
        };

        // Get all carousel containers
        const carouselContainers = document.querySelectorAll('.carousel-container');

        carouselContainers.forEach((container, index) => {
            const slides = container.querySelectorAll('.carousel-slide');
            const totalSlides = slides.length;
            const counterElement = container.querySelector('.carousel-counter span');
            const carouselKey = 'carousel' + (index + 1);

            function nextSlide() {
                currentSlides[carouselKey] = (currentSlides[carouselKey] + 1) % totalSlides;
                slides.forEach(slide => slide.classList.remove('active'));
                slides[currentSlides[carouselKey]].classList.add('active');
                if (counterElement) {
                    counterElement.textContent = currentSlides[carouselKey] + 1;
                }
            }

            // Rotate every 1 second (1000 milliseconds)
            setInterval(nextSlide, 1000);
        });
    </script>
</body>
</html>
