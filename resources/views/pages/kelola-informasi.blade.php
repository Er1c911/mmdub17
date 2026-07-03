<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Informasi - Admin</title>
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
        .nav-actions {
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        .btn-back {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        .btn-back:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }
        .page-header {
            margin-bottom: 3rem;
        }
        .page-header h1 {
            font-size: 2.5rem;
            color: #6F627F;
            margin-bottom: 0.5rem;
            font-weight: 800;
            letter-spacing: -1px;
        }
        .page-header p {
            color: #8B7B94;
            font-size: 1rem;
            font-weight: 500;
        }
        .content-card {
            background: white;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(111, 98, 127, 0.08);
            border: 1px solid rgba(111, 98, 127, 0.05);
            margin-bottom: 2rem;
        }
        .form-group {
            margin-bottom: 2rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: #6F627F;
            font-size: 1rem;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1rem;
            color: #333;
            transition: all 0.3s ease;
        }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #6F627F;
            box-shadow: 0 0 0 3px rgba(111, 98, 127, 0.1);
        }
        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }
        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn {
            padding: 0.9rem 2rem;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            letter-spacing: 0.3px;
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
        .info-box {
            background: linear-gradient(135deg, rgba(111, 98, 127, 0.05) 0%, rgba(212, 165, 116, 0.05) 100%);
            border-left: 4px solid #6F627F;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }
        .info-box p {
            color: #666;
            line-height: 1.7;
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
            .page-header h1 {
                font-size: 1.8rem;
            }
            nav {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            .form-actions {
                flex-direction: column;
            }
            .btn {
                width: 100%;
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
            .page-header h1 {
                font-size: 1.5rem;
            }
            .content-card {
                padding: 1.5rem;
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
        <div class="nav-actions">
            <a href="{{ route('admin') }}" class="btn-back">← Kembali ke Dashboard</a>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1>📋 Kelola Informasi</h1>
            <p>Kelola informasi dan konten penting website Losari MMD UB 17</p>
        </div>

        <div class="info-box">
            <p>📌 <strong>Catatan:</strong> Setiap perubahan yang Anda lakukan akan disimpan dan ditampilkan secara langsung di website. Pastikan untuk memverifikasi informasi sebelum menyimpan.</p>
        </div>

        <form method="POST" action="{{ route('kelola-informasi') }}" enctype="multipart/form-data">
            @csrf
            <div class="content-card">
                <h3 style="color: #6F627F; margin-bottom: 1.5rem; font-weight: 700;">➕ Tambah Informasi Baru</h3>

                @if ($errors->any())
                    <div class="info-box" style="background-color: #fee; border-left-color: #c33;">
                        <p style="color: #c33;"><strong>⚠️ Error:</strong></p>
                        <ul style="margin-left: 1.5rem; color: #c33;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="info-box" style="background-color: #efe; border-left-color: #3c3;">
                        <p style="color: #3c3;">✅ {{ session('success') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="judul">Judul Informasi <span style="color: red;">*</span></label>
                    <input type="text" id="judul" name="judul" placeholder="Masukkan judul informasi" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi <span style="color: red;">*</span></label>
                    <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi lengkap informasi..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="gambar">Upload Gambar (Opsional)</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*" style="padding: 0.8rem; border: 2px dashed #6F627F; background-color: #f9f9f9;">
                    <small style="color: #888; display: block; margin-top: 0.5rem;">Format: JPG, PNG, GIF (Max 5MB)</small>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">✅ Tambah Informasi</button>
                </div>
            </div>
        </form>

        <div class="content-card">
            <h3 style="color: #6F627F; margin-bottom: 1.5rem; font-weight: 700;">📋 Daftar Informasi</h3>

            @if ($informasiItems->isEmpty())
                <p style="color: #8B7B94; text-align: center; padding: 2rem;">Belum ada informasi. Tambahkan informasi baru di atas untuk memulai.</p>
            @else
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem;">
                    @foreach ($informasiItems as $item)
                        <div style="background: #f9f9f9; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(111, 98, 127, 0.08); transition: all 0.3s ease;">
                            @if ($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" style="width: 100%; height: 180px; object-fit: cover; display: block;">
                            @else
                                <div style="width: 100%; height: 180px; background: linear-gradient(135deg, #6F627F 0%, #8B7B94 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">📷</div>
                            @endif
                            <div style="padding: 1.5rem;">
                                <h4 style="color: #6F627F; margin-bottom: 0.8rem; font-weight: 700; font-size: 1.1rem;">{{ $item->judul }}</h4>
                                <p style="color: #666; font-size: 0.9rem; line-height: 1.5; margin-bottom: 1rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $item->deskripsi }}</p>
                                <div style="display: flex; gap: 0.8rem;">
                                    <a href="{{ route('edit-informasi', $item->id) }}" class="btn btn-primary" style="flex: 1; padding: 0.6rem; font-size: 0.85rem; text-align: center;">✏️ Edit</a>
                                    <a href="{{ route('delete-informasi', $item->id) }}" class="btn btn-secondary" style="flex: 1; padding: 0.6rem; font-size: 0.85rem; text-align: center;" onclick="return confirm('Yakin ingin menghapus informasi ini?');">🗑️ Hapus</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
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