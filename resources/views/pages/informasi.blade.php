<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi - Losari</title>
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
        .page-header p {
            position: relative;
            z-index: 1;
            font-size: 1.1rem;
            opacity: 0.8;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }
        .info-box {
            background: white;
            color: #333;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(111, 98, 127, 0.08);
            border-left: 5px solid #D4A574;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
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
        .info-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #6F627F 0%, #8B7B94 100%);
        }
        .info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(111, 98, 127, 0.12);
        }
        .info-box h3 {
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            color: #6F627F;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .info-box p {
            opacity: 1;
            font-size: 0.95rem;
            line-height: 1.7;
            color: #555;
        }
        .info-box ul {
            margin-left: 1.5rem;
            margin-top: 1rem;
        }
        .info-box li {
            margin-bottom: 0.7rem;
            color: #555;
            line-height: 1.6;
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
            .page-header {
                padding: 2rem 0;
                margin-bottom: 2rem;
            }
            .page-header h1 {
                font-size: 2rem;
            }
            .page-header p {
                font-size: 0.95rem;
            }
            .info-grid {
                gap: 1.5rem;
                margin-top: 1.5rem;
            }
            .info-box {
                padding: 1.5rem;
            }
            .info-box h3 {
                font-size: 1.1rem;
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
            .page-header {
                padding: 1rem 0;
            }
            .page-header h1 {
                font-size: 1.5rem;
            }
            .info-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            .info-box {
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

    <div class="container">
        <div class="page-header">
            <h1>Informasi</h1>
        </div>

        <div class="info-grid">
            @forelse ($informasiItems as $item)
                <div class="info-box">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" style="max-width: 85%; height: auto; border-radius: 10px; margin: 0 auto 1.5rem; display: block;">
                    @endif
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ $item->deskripsi }}</p>
                </div>
            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 5rem 2rem;">
                    <div style="background: white; border-radius: 20px; padding: 4rem 2rem; box-shadow: 0 10px 40px rgba(111, 98, 127, 0.1); border: 2px solid rgba(111, 98, 127, 0.1); max-width: 500px; margin: 0 auto;">
                        <div style="font-size: 5rem; margin-bottom: 1.5rem; opacity: 0.6;">📭</div>
                        <h2 style="font-size: 1.8rem; color: #6F627F; margin-bottom: 0.8rem; font-weight: 700; letter-spacing: -0.5px;">Belum ada informasi</h2>
                        <p style="font-size: 1rem; color: #8B7B94; line-height: 1.6; margin-bottom: 1.5rem;">Mohon maaf, saat ini belum ada informasi yang tersedia. Informasi akan ditampilkan segera setelah ditambahkan.</p>
                        <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #6F627F 0%, #D4A574 100%); margin: 0 auto;"></div>
                    </div>
                </div>
            @endforelse
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
