<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim - Losari</title>
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
            padding: 4rem 2rem;
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
        .page-header {
            background: transparent;
            color: #6F627F;
            padding: 3rem 0;
            border-radius: 0;
            margin-bottom: 3rem;
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
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }
        .team-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(111, 98, 127, 0.08);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 5px solid #D4A574;
            position: relative;
            overflow: hidden;
        }
        .team-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #6F627F 0%, #8B7B94 50%, #6F627F 100%);
        }
        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(111, 98, 127, 0.15);
        }
        .team-card h3 {
            color: #6F627F;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
            font-weight: 700;
        }
        .team-card .position {
            color: #D4A574;
            font-weight: bold;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }
        .team-card p {
            color: #7f8c8d;
            font-size: 0.95rem;
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
            .secondary-nav {
                padding: 0.6rem 1rem;
                gap: 1rem;
            }
            .secondary-nav a {
                font-size: 0.85rem;
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
            .team-grid {
                gap: 1.5rem;
                margin-top: 1.5rem;
            }
            .team-card {
                padding: 1.5rem;
            }
            .team-card h3 {
                font-size: 1.1rem;
            }
            .team-card .position {
                font-size: 0.85rem;
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
            .secondary-nav {
                padding: 0.5rem 0.5rem;
                gap: 0.5rem;
            }
            .secondary-nav a {
                font-size: 0.75rem;
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
            .team-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            .team-card {
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
            <li><a href="{{ route('kordes') }}" @if(in_array(Route::currentRouteName(), ['kordes', 'sekben', 'acara', 'humas', 'perkap-konsum', 'pdd'])) class="active" @endif>Tim</a></li>
            <li><a href="{{ route('informasi') }}" @if(Route::currentRouteName() === 'informasi') class="active" @endif>Informasi</a></li>
            <li><a href="{{ route('peta') }}" @if(Route::currentRouteName() === 'peta') class="active" @endif>Lokasi</a></li>
            <li><a href="{{ route('kontak') }}" @if(Route::currentRouteName() === 'kontak') class="active" @endif>Kontak</a></li>
        </ul>
    </nav>

    <div class="secondary-nav">
        <a href="{{ route('kordes') }}">Kordes</a>
        <a href="{{ route('sekben') }}">Sekben</a>
        <a href="{{ route('acara') }}">Acara</a>
        <a href="{{ route('humas') }}">Humas</a>
        <a href="{{ route('perkap-konsum') }}">Perkap & Konsum</a>
        <a href="{{ route('pdd') }}">PDD</a>
    </div>

    <div class="container">
        <div class="page-header">
            <h1>Tim Kami</h1>
            <p>Profesional berpengalaman siap melayani Anda</p>
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
