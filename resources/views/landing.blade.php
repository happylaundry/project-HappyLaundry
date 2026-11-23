<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Laundry</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Kdam+Thmor+Pro&family=Original+Surfer&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy: #1e1b6e;
            --purple: #5b1a6b;
            --cyan: #19d3e0;
            --cyan-soft: #ccfbfb;
            --pink: #f06ee8;
            --pink-soft: #fbd3f7;
            --border: #8b93c9;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--navy);
            background: #fff;
            line-height: 1.5;
        }

        img { max-width: 100%; display: block; }

        .font-script { font-family: 'Original Surfer', cursive; font-weight: 400; }
        .font-title  { font-family: 'Kdam Thmor Pro', sans-serif; }

        /* ---------- Navbar ---------- */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 32px;
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
        }
        .navbar .logo img { height: 36px; width: auto; }
        .navbar .logo span {
            font-family: 'Original Surfer', cursive;
            color: var(--pink);
            font-size: 1.1rem;
        }
        .nav-links { display: flex; align-items: center; gap: 24px; font-size: .85rem; font-weight: 500; }
        .nav-links a { color: var(--navy); text-decoration: none; }
        .nav-links a:hover { text-decoration: underline; }
        .nav-links .btn-register {
            background: var(--pink-soft);
            padding: 4px 12px;
            border-radius: 6px;
            font-size: .8rem;
        }
        a:focus-visible, button:focus-visible { outline: 3px solid var(--cyan); outline-offset: 2px; }

        /* ---------- Hero ---------- */
        .hero {
            position: relative;
            min-height: 440px;
            display: grid;
            place-items: center;
            padding: 48px 24px;
            margin: 8px 16px 0;
            border-radius: 16px;
            overflow: hidden;
            background: linear-gradient(135deg, #e8d9f5, #cdeffa);
        }
        .hero-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(3px);
            opacity: .85;
        }
        .hero-card { position: relative; text-align: center; max-width: 560px; }
       .hero-icon {
            width: 80px;
            height: 80px;
            object-fit: contain;
            display: block;
            margin: 0 auto 15px;

            background: transparent;
            border: none;
            box-shadow: none;
        }
        .hero-text {
            background: rgba(255, 255, 255, .55);
            backdrop-filter: blur(4px);
            border-radius: 10px;
            padding: 10px 24px;
        }
        .hero h1 { font-size: 1.4rem; color: var(--purple); }
        .hero p  { font-size: .75rem; color: var(--navy); }

        /* ---------- Section heading ---------- */
        .section-title { text-align: center; font-size: 1.6rem; color: var(--navy); margin-bottom: 32px; }

        /* ---------- Services ---------- */
        .services { padding: 48px 24px; max-width: 1000px; margin: 0 auto; }
        .cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .card {
            border: 2px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            text-align: center;
            background: #fff;
        }
        .card-img {
            height: 180px;
            background: linear-gradient(135deg, #d9e4ff, #f2d9ff);
        }
        .card-img img { width: 100%; height: 100%; object-fit: cover; }
        .card-body { padding: 16px 12px 18px; }
        .card-body h3 { font-size: 1.1rem; color: var(--purple); font-weight: 400; }
        .card-body p  { font-size: 1.1rem; color: var(--purple); }

        /* ---------- How it works ---------- */
        .how { background: var(--cyan-soft); padding: 48px 24px 64px; }
        .steps {
            max-width: 760px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 48px 64px;
        }
        .step { text-align: center; }
        .step-num {
            position: relative;
            width: 56px;
            height: 56px;
            margin: 0 auto 12px;
            border-radius: 50%;
            background: var(--cyan);
            color: var(--navy);
            display: grid;
            place-items: center;
            font-size: 1.4rem;
        }
        .step-num::after {
            content: "";
            position: absolute;
            top: -8px;
            right: -16px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--cyan);
        }
        .step h3 { font-size: 1rem; color: var(--purple); margin-bottom: 8px; font-weight: 400; }
        .step p  { font-size: .78rem; color: var(--navy); max-width: 280px; margin: 0 auto; }

        /* ---------- Contact ---------- */
        .contact {
            padding: 56px 24px 64px;
            text-align: center;
            background: linear-gradient(to bottom, #fff 0%, #f5a6f0 60%, #f06ee8 100%);
        }
        .contact .section-title { font-size: 2rem; }
        .contact-logo { height: 36px; width: auto; margin: 0 auto 16px; }
        .contact address { font-style: normal; font-size: .9rem; color: var(--navy); max-width: 440px; margin: 0 auto 16px; }
        .contact .phone { font-size: .9rem; color: var(--navy); }
        .contact a { color: inherit; text-decoration: none; }
        .contact a:hover { text-decoration: underline; }

        /* ---------- Responsive ---------- */
        @media (max-width: 720px) {
            .navbar { padding: 10px 16px; }
            .nav-links { gap: 12px; }
            .cards { grid-template-columns: 1fr; max-width: 340px; margin: 0 auto; }
            .steps { grid-template-columns: 1fr; gap: 36px; }
            .hero { min-height: 340px; }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <a href="#home" class="logo" aria-label="Happy Laundry">
            <img src="{{ asset('images/logo.png') }}" alt="Happy Laundry"
                 onerror="this.replaceWith(Object.assign(document.createElement('span'),{textContent:'Happy Laundry'}))">
        </a>
        <nav class="nav-links">
            <a href="#home">Home</a>
            <a href="#service">Service</a>
            <a href="#contact">Contact</a>
            <a href="#" class="btn-register">Register &rarr;</a>
        </nav>
    </header>

    <main>
        <!-- Hero -->
        <section id="home" class="hero">
            <img class="hero-bg" src="{{ asset('images/hero.jpg') }}" alt="" onerror="this.remove()">
            <div class="hero-card">
                <img
                    class="hero-icon"
                    src="{{ asset('images/hero-icon.png') }}"
                    alt="Logo Happy Laundry"
                    >
                <div class="hero-text">
                    <h1 class="font-title">Pakaian Bersih, Hati pun Happy!</h1>
                    <p class="font-title">Pesan penjemputan dari rumah, pantau status cucian, dan bayar dengan Tunai atau QRIS.</p>
                </div>
            </div>
        </section>

        <!-- Our Services -->
        <section id="service" class="services">
            <h2 class="section-title font-script">Our Services</h2>
            <div class="cards">
                <article class="card">
                    <div class="card-img">
                        <img src="{{ asset('images/cuci-setrika.jpg') }}" alt="Cuci dan setrika" onerror="this.remove()">
                    </div>
                    <div class="card-body font-title">
                        <h3>Cuci + Setrika</h3>
                        <p>Rp6.500/kg</p>
                    </div>
                </article>

                <article class="card">
                    <div class="card-img">
                        <img src="{{ asset('images/setrika.jpg') }}" alt="Setrika saja" onerror="this.remove()">
                    </div>
                    <div class="card-body font-title">
                        <h3>Setrika Saja</h3>
                        <p>Rp4.500/kg</p>
                    </div>
                </article>

                <article class="card">
                    <div class="card-img">
                        <img src="{{ asset('images/express.jpg') }}" alt="Layanan express" onerror="this.remove()">
                    </div>
                    <div class="card-body font-title">
                        <h3>Express</h3>
                        <p>Rp10.000/kg</p>
                    </div>
                </article>
            </div>
        </section>

        <!-- How It Works -->
        <section class="how">
            <h2 class="section-title font-script">How It Works?</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-num font-script">1</div>
                    <h3 class="font-title">Daftar &amp; Pilih Layanan</h3>
                    <p>Buat akun atau masuk ke website, lalu pilih jenis layanan (Cuci dan Setrika, Setrika Saja atau Express) beserta jadwal penjemputan.</p>
                </div>
                <div class="step">
                    <div class="step-num font-script">2</div>
                    <h3 class="font-title">Kurir Menjemput Cucian</h3>
                    <p>Kurir datang ke rumahmu sesuai jadwal, menimbang cucian, dan mencatat pesananmu.</p>
                </div>
                <div class="step">
                    <div class="step-num font-script">3</div>
                    <h3 class="font-title">Proses Cuci Higienis</h3>
                    <p>Pakaianmu dicuci terpisah memakai deterjen berkualitas, dikeringkan, dan disetrika rapi dengan pewangi.</p>
                </div>
                <div class="step">
                    <div class="step-num font-script">4</div>
                    <h3 class="font-title">Antar Kembali ke Rumah</h3>
                    <p>Cucian yang sudah bersih, rapi, dan wangi siap diantar kembali ke depan pintumu tepat waktu.</p>
                </div>
            </div>
        </section>

        <!-- Our Contact -->
        <section id="contact" class="contact">
            <h2 class="section-title font-script">Our Contact</h2>
            <img class="contact-logo" src="{{ asset('images/logo.png') }}" alt="Happy Laundry" onerror="this.remove()">
            <address class="font-title">
                Jl. Beringin Raya No. 112, Blok C, Kel. Helvetia Tengah, Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20124
            </address>
            <p class="phone font-title"><a href="https://wa.me/62895676767">62+ 89567676767</a></p>
        </section>
    </main>

</body>
</html>
