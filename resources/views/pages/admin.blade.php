<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Losari</title>
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
            background: linear-gradient(135deg, #f5f3f0 0%, #faf8f6 100%);
            min-height: 100vh;
        }
        nav {
            background: linear-gradient(135deg, #6F627F 0%, #8B7B94 100%);
            padding: 1.2rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 8px 32px rgba(111, 98, 127, 0.2);
            display: flex;
            align-items: center;
            justify-content: space-between;
            backdrop-filter: blur(10px);
        }
        .nav-brand {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }
        .nav-brand-logo {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .nav-brand-text {
            display: flex;
            flex-direction: column;
            gap: 0.2rem;
        }
        .nav-brand-text span:first-child {
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .nav-brand-text span:last-child {
            font-size: 0.75rem;
            font-weight: 500;
            opacity: 0.85;
            letter-spacing: 0.3px;
        }
        .admin-badge {
            background: linear-gradient(135deg, #D4A574 0%, #c99764 100%);
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 25px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(212, 165, 116, 0.3);
            text-transform: uppercase;
        }
        .container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }
        .dashboard-header {
            margin-bottom: 3rem;
        }
        .dashboard-header h1 {
            font-size: 3rem;
            color: #6F627F;
            margin-bottom: 0.5rem;
            font-weight: 800;
            letter-spacing: -1px;
        }
        .dashboard-header p {
            color: #8B7B94;
            font-size: 1.1rem;
            font-weight: 500;
        }
        .welcome-section {
            background: linear-gradient(135deg, #6F627F 0%, #8B7B94 100%);
            color: white;
            padding: 3rem;
            border-radius: 20px;
            margin-bottom: 3rem;
            box-shadow: 0 15px 40px rgba(111, 98, 127, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }
        .welcome-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }
        .welcome-content {
            position: relative;
            z-index: 1;
        }
        .welcome-section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .welcome-section p {
            font-size: 1rem;
            opacity: 0.95;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            max-width: 600px;
        }
        .divisi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }
        .divisi-badge {
            background-color: rgba(255, 255, 255, 0.15);
            padding: 1rem;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
        }
        .divisi-badge:hover {
            background-color: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px);
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        .stat-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(111, 98, 127, 0.08);
            border: 1px solid rgba(111, 98, 127, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #6F627F 0%, #D4A574 100%);
        }
        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(111, 98, 127, 0.15);
        }
        .stat-label {
            color: #8B7B94;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.8rem;
        }
        .stat-value {
            font-size: 2.8rem;
            font-weight: 800;
            color: #6F627F;
            letter-spacing: -1px;
        }
        .section-title {
            font-size: 1.5rem;
            color: #6F627F;
            margin-bottom: 2rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 1rem;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #D4A574 0%, #6F627F 100%);
            border-radius: 2px;
        }
        .admin-sections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .admin-card {
            background: white;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(111, 98, 127, 0.08);
            border: 1px solid rgba(111, 98, 127, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .admin-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #6F627F 0%, #D4A574 100%);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        .admin-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(111, 98, 127, 0.15);
        }
        .admin-card:hover::before {
            transform: scaleX(1);
        }
        .admin-card h3 {
            color: #6F627F;
            font-size: 1.4rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .admin-card p {
            color: #8B7B94;
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 1.8rem;
        }
        .admin-card-actions {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }
        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            letter-spacing: 0.3px;
            position: relative;
            overflow: hidden;
        }
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.3s ease;
            z-index: -1;
        }
        .btn:hover::before {
            left: 100%;
        }
        .btn-primary {
            background: linear-gradient(135deg, #6F627F 0%, #8B7B94 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(111, 98, 127, 0.2);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(111, 98, 127, 0.3);
        }
        .btn-secondary {
            background: linear-gradient(135deg, #D4A574 0%, #c99764 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(212, 165, 116, 0.2);
        }
        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(212, 165, 116, 0.3);
        }
        footer {
            background: linear-gradient(135deg, #6F627F 0%, #8B7B94 100%);
            color: white;
            text-align: left;
            padding: 2rem;
            margin-top: 3rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 -8px 32px rgba(111, 98, 127, 0.1);
        }
        footer p {
            font-weight: 400;
            letter-spacing: 0.5px;
            opacity: 0.9;
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
            .container {
                padding: 1.5rem;
            }
            .dashboard-header h1 {
                font-size: 2rem;
            }
            nav {
                padding: 1rem;
                flex-direction: column;
                gap: 1rem;
            }
            .admin-badge {
                align-self: center;
            }
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
            .admin-sections {
                grid-template-columns: 1fr;
            }
            .welcome-section {
                padding: 2rem;
            }
            .welcome-section h2 {
                font-size: 1.5rem;
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
            .container {
                padding: 1rem;
            }
            .dashboard-header h1 {
                font-size: 1.5rem;
            }
            .stat-value {
                font-size: 2rem;
            }
            .btn {
                padding: 0.6rem 1rem;
                font-size: 0.85rem;
            }
            .stats-grid {
                grid-template-columns: 1fr;
            }
            .divisi-grid {
                grid-template-columns: repeat(2, 1fr);
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
        <span class="admin-badge">🔒 Admin Panel</span>
    </nav>

    <div class="container">
        <div class="dashboard-header">
            <h1>Dashboard Admin</h1>
            <p>Kelola konten dan data website Losari MMD UB 17</p>
            <a href="{{ route('kelola-informasi') }}" class="btn btn-primary" style="margin-top: 1rem;">
                📋 Kelola Informasi
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