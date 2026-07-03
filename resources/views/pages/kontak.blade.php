<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Losari</title>
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
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }
        .contact-info {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(111, 98, 127, 0.08);
            border-left: 5px solid #D4A574;
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
        .contact-info h2 {
            color: #6F627F;
            margin-bottom: 2rem;
            font-size: 1.5rem;
            font-weight: 700;
        }
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #ecf0f1;
        }
        .contact-item:last-child {
            border-bottom: none;
        }
        .contact-icon {
            font-size: 1.8rem;
            margin-right: 1.5rem;
            color: #6F627F;
            flex-shrink: 0;
        }
        .contact-details h4 {
            color: #6F627F;
            margin-bottom: 0.3rem;
            font-weight: 700;
        }
        .contact-details p {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .contact-form {
            background: linear-gradient(135deg, #6F627F 0%, #8B7B94 100%);
            color: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(111, 98, 127, 0.2);
            position: relative;
            overflow: hidden;
        }
        .contact-form::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        .contact-form h2 {
            margin-bottom: 2rem;
            color: #D4A574;
            position: relative;
            z-index: 1;
            font-size: 1.5rem;
            font-weight: 700;
        }
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.6rem;
            font-weight: 500;
            font-size: 0.95rem;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.85rem;
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.3);
        }
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        .btn-submit {
            background-color: #D4A574;
            color: #6F627F;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 0.95rem;
            position: relative;
            z-index: 1;
        }
        .btn-submit:hover {
            background-color: #E8C494;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 165, 116, 0.3);
        }
        .social-links {
            display: flex;
            gap: 1.5rem;
            margin-top: 2rem;
            position: relative;
            z-index: 1;
        }
        .social-links a {
            display: inline-block;
            width: 45px;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.25);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        .social-links a:hover {
            background-color: #D4A574;
            color: #6F627F;
            transform: translateY(-3px);
            border-color: #D4A574;
        }
        .hours-info {
            background-color: white;
            padding: 2rem;
            border-radius: 15px;
            margin-top: 2rem;
            border-left: 5px solid #D4A574;
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
        .hours-info h3 {
            color: #6F627F;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .hours-info p {
            margin-bottom: 0.6rem;
            color: #555;
            line-height: 1.7;
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
            .contact-content {
                gap: 2rem;
            }
            .contact-info {
                padding: 1.5rem;
            }
            .contact-info h2 {
                font-size: 1.2rem;
            }
            .contact-form {
                padding: 1.5rem;
            }
            .contact-form h2 {
                font-size: 1.2rem;
            }
            .form-group input,
            .form-group textarea {
                padding: 0.65rem;
            }
            .btn-submit {
                padding: 0.8rem 1.5rem;
            }
            .hours-info {
                padding: 1.5rem;
            }
            .hours-info h3 {
                font-size: 1rem;
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
            .contact-content {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .contact-info {
                padding: 1rem;
            }
            .contact-info h2 {
                font-size: 1.1rem;
                margin-bottom: 1rem;
            }
            .contact-item {
                margin-bottom: 1rem;
                padding-bottom: 1rem;
            }
            .contact-icon {
                font-size: 1.5rem;
                margin-right: 1rem;
            }
            .contact-form {
                padding: 1rem;
            }
            .contact-form h2 {
                font-size: 1.1rem;
            }
            .form-group {
                margin-bottom: 1rem;
            }
            .form-group label {
                font-size: 0.9rem;
            }
            .form-group input,
            .form-group textarea {
                padding: 0.6rem;
                font-size: 0.9rem;
            }
            .form-group textarea {
                min-height: 100px;
            }
            .btn-submit {
                padding: 0.7rem 1.2rem;
                font-size: 0.9rem;
            }
            .social-links {
                gap: 1rem;
            }
            .social-links a {
                width: 40px;
                height: 40px;
            }
            .hours-info {
                padding: 1rem;
            }
            .hours-info h3 {
                font-size: 0.95rem;
            }
            .hours-info p {
                font-size: 0.9rem;
            }
        }
        .whatsapp-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin: 3rem 0;
        }
        .whatsapp-btn {
            display: flex;
            align-items: center;
            gap: 2rem;
            background: linear-gradient(135deg, rgba(37, 211, 102, 0.1) 0%, rgba(37, 211, 102, 0.05) 100%);
            border: 2px solid #25D366;
            border-radius: 15px;
            padding: 2rem;
            text-decoration: none;
            color: #333;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.1);
        }
        .whatsapp-btn:hover {
            background: linear-gradient(135deg, #25D366 0%, #20BA5A 100%);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 10px 35px rgba(37, 211, 102, 0.3);
        }
        .whatsapp-logo {
            width: 80px;
            height: 80px;
            flex-shrink: 0;
            fill: #25D366;
            transition: all 0.3s ease;
        }
        .whatsapp-btn:hover .whatsapp-logo {
            fill: white;
            transform: scale(1.1);
        }
        .whatsapp-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .whatsapp-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #6F627F;
            margin-bottom: 0.5rem;
        }
        .whatsapp-btn:hover .whatsapp-info h3 {
            color: white;
        }
        .whatsapp-info p {
            font-size: 0.95rem;
            color: #555;
        }
        .whatsapp-btn:hover .whatsapp-info p {
            color: rgba(255, 255, 255, 0.9);
        }
        @media (max-width: 768px) {
            .whatsapp-buttons {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .whatsapp-btn {
                padding: 1.5rem;
                gap: 1.5rem;
            }
            .whatsapp-logo {
                width: 60px;
                height: 60px;
            }
            .whatsapp-info h3 {
                font-size: 1.2rem;
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
            <h1>Hubungi Kami</h1>
        </div>

        <div class="whatsapp-buttons">
            <a href="https://wa.me/62818211105" target="_blank" class="whatsapp-btn">
                <svg class="whatsapp-logo" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg">
                    <path fill="white" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3 18.7-68.1-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                </svg>
                <div class="whatsapp-info">
                    <h3>Rifa</h3>
                    <p>Hubungi via WhatsApp</p>
                </div>
            </a>

            <a href="https://wa.me/6285608190084" target="_blank" class="whatsapp-btn">
                <svg class="whatsapp-logo" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg">
                    <path fill="white" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3 18.7-68.1-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                </svg>
                <div class="whatsapp-info">
                    <h3>Fatina</h3>
                    <p>Hubungi via WhatsApp</p>
                </div>
            </a>
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
