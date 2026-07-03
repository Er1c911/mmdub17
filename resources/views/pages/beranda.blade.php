<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Losari</title>
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
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }
        .hero {
            background: transparent;
            color: #6F627F;
            padding: 4rem 0;
            text-align: center;
            border-radius: 0;
            margin-bottom: 4rem;
            box-shadow: none;
            position: relative;
            overflow: visible;
        }
        .hero::before {
            display: none;
        }
        .hero-logo {
            margin-bottom: 2rem;
            display: inline-block;
        }
        .logo-img {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #6F627F 0%, #8B7B94 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            box-shadow: 0 5px 20px rgba(111, 98, 127, 0.2);
            position: relative;
            z-index: 1;
            border: 3px solid #D4A574;
        }
        .logo-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 50%;
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            letter-spacing: -1px;
            position: relative;
            z-index: 1;
        }
        .hero p {
            font-size: 1.3rem;
            opacity: 0.8;
            position: relative;
            z-index: 1;
            font-weight: 300;
            letter-spacing: 0.3px;
        }
        section {
            margin-bottom: 3rem;
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(111, 98, 127, 0.08);
            background-image: repeating-linear-gradient(
                90deg,
                transparent,
                transparent 1px,
                rgba(111, 98, 127, 0.03) 1px,
                rgba(111, 98, 127, 0.03) 2px
            ),
            repeating-linear-gradient(
                0deg,
                transparent,
                transparent 1px,
                rgba(111, 98, 127, 0.03) 1px,
                rgba(111, 98, 127, 0.03) 2px
            );
        }
        section h2 {
            color: #6F627F;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        section p {
            color: #555;
            line-height: 1.8;
            font-size: 1rem;
        }
        footer {
            background-color: #6F627F;
            color: white;
            text-align: left;
            padding: 3rem 2rem;
            margin-top: 4rem;
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
                font-size: 0.9rem;
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
            .hero {
                padding: 2rem 0;
                margin-bottom: 2rem;
            }
            .logo-img {
                width: 80px;
                height: 80px;
                font-size: 2rem;
            }
            .hero h1 {
                font-size: 2rem;
                margin-bottom: 0.8rem;
            }
            .hero p {
                font-size: 0.95rem;
            }
            section {
                padding: 1.5rem;
                margin-bottom: 1.5rem;
            }
            section h2 {
                font-size: 1.3rem;
                margin-bottom: 1rem;
            }
            section p {
                font-size: 0.9rem;
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
                font-size: 0.8rem;
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
            .hero {
                padding: 1rem 0;
            }
            .logo-img {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
            .hero h1 {
                font-size: 1.5rem;
            }
            .hero p {
                font-size: 0.85rem;
            }
            section {
                padding: 1rem;
                margin-bottom: 1rem;
            }
            section h2 {
                font-size: 1.1rem;
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
            <li><a href="{{ route('kordes') }}" @if(in_array(Route::currentRouteName(), ['kordes', 'sekben', 'acara', 'humas', 'perkap-konsum', 'pdd'])) class="active" @endif>Tim</a></li>
            <li><a href="{{ route('informasi') }}" @if(Route::currentRouteName() === 'informasi') class="active" @endif>Informasi</a></li>
            <li><a href="{{ route('peta') }}" @if(Route::currentRouteName() === 'peta') class="active" @endif>Lokasi</a></li>
            <li><a href="{{ route('kontak') }}" @if(Route::currentRouteName() === 'kontak') class="active" @endif>Kontak</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="hero">
            <div class="hero-logo">
                <div class="logo-img">
                    <img src="{{ asset('images/logommd.jpg') }}" alt="Logo MMD UB Losari">
                </div>
            </div>
            <h1>MMD UB LOSARI</h1>
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
</body>
</html>
