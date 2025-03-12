<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Say Fel Falah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="Free HTML Templates" name="keywords"/>
    <meta content="Free HTML Templates" name="description"/>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    {{--    <link--}}
    {{--        href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"--}}
    {{--        rel="stylesheet"--}}
    {{--    />--}}

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet"
    />


    {{--    Icon Bootstrap 5 --}}
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{--    swiper--}}
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>

<body>
<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-primary" style="font-size: 35px">
            <img src="{{ asset('assets/img/IconFalahNoBg.png')}}" alt="">
            <span class="text-primary">Sayf El Falah</span>
        </a>
        <!-- Tombol Toggle untuk Mode HP -->
        <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu Navbar -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#program" class="nav-item nav-link">Program</a>
                <a href="#blog" class="nav-item nav-link">Blog</a>
            </div>
            <a href="https://wa.me/6285217176495?text=Assalamualaikum%20Ustadz,%20Saya%20ingin%20bertanya%20tentang%20Pendaftaran%20Pondok%20/%20atau%20tentang%20pondok%20secara%20Keseluruhan%20..." class="btn btn-primary px-4">Daftar</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Header Start -->
<div id="home" class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
            <h4 class="text-white mb-4 mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">Selamat Datang di</h4>
            <h1 class="display-3 font-weight-bold text-white mb-5" data-aos="fade-up" data-aos-delay="200">
                Pondok Pesantren Sayf El Falah
            </h1>
            <h5 class="text-white mb-2 mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="300">VISI PONPES MODERN
                SELFA</h5>
            <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="300">
                Menjadi lembaga pendidikan Islam terdepan yang mencetak
                generasi beriman dan bertakwa kepada Allah, serta memiliki
                karakter yang kuat dan dapat dipercaya (Al-Qowiyyul Amiin).
            </p>
        </div>
        <!-- Gambar Statis -->
        <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="500">
            <img class="img-fluid hover-zoom mt-4 mb-3" src="{{ asset('assets/img/Header-Ponpes2.svg') }}"
{{--                 alt="Pondok Pesantren" style="max-width: 100%; border-radius: 20px;">--}}
            alt="Pondok Pesantren">

        </div>

    </div>
</div>

{{--<!-- Header End -->--}}

<!-- About Start -->
<div id="about" class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Header "Tentang Pondok" dipindahkan ke atas gambar di mode mobile -->
            <div class="col-12 d-md-none text-center mb-3">
                <p class="section-title px-5">
                    <span class="px-2">Tentang Pondok</span>
                </p>
            </div>

            <!-- Gambar -->
            <div class="col-lg-5 order-2 order-md-1" data-aos="fade-right" data-aos-delay="100">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/img/falah-kolase.png') }}" alt="" />
            </div>

            <!-- Konten -->
            <div class="col-lg-7 order-1 order-md-2" data-aos="fade-left" data-aos-delay="200">
                <h1 class="mb-4">Mencetak generasi pemimpin yang berjiwa rabbani, qurani, dan qiyadi</h1>
                <h5>MISI PONDOK SELFA :</h5>
                <div class="row pt-2 pb-4">
                    <div class="col-12 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom">
                                <i class="bi bi-check-circle-fill text-primary mr-3"></i>Membentuk santri yang sehat jasmani dan rohani berdasarkan Quran dan Sunnah.
                            </li>
                            <li class="py-2 border-bottom">
                                <i class="bi bi-check-circle-fill text-primary mr-3"></i>Mencetak santri yang mandiri, kreatif, inovatif, dan memiliki jiwa kepemimpinan untuk berperan aktif di tengah masyarakat.
                            </li>
                            <li class="py-2 border-bottom">
                                <i class="bi bi-check-circle-fill text-primary mr-3"></i>Menjadi lembaga pendidikan Islam yang dekat dan bermanfaat bagi seluruh lapisan masyarakat.
                            </li>
                            <li class="py-2 border-bottom">
                                <i class="bi bi-check-circle-fill text-primary mr-3"></i>Menyelenggarakan pendidikan yang berkualitas dengan metode dan sarana yang selalu mengikuti perkembangan zaman dengan menjunjung tinggi nilai-nilai keislaman.
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
            </div>
        </div>
    </div>
</div>

<!-- About End -->

<!-- Program Start -->
<div id="program" class="container-fluid pt-5">
    <div class="text-center pb-2">
        <p class="section-title px-5" data-aos="fade-up" data-aos-delay="200">
            <span class="px-2">Program</span>
        </p>
        <h1 class="mb-4">Apa saja Program Pondok ?</h1>
    </div>
    <div class="container pb-5">
        <div class="row justify-content-center">
            <!-- Program 1 -->
            <div class="col-lg-4 col-md-6 pb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex flex-column bg-program border-top rounded mb-4 h-100 colom"
                     style="padding: 30px">
                    <i class="bi bi-book h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4 flex-grow-1">
                        <h4>Tahfidzul Qur'an</h4>
                        <p class="m-0">
                            Program menghafal Al-Qur'an dengan metode yang sistematis dan terstruktur, didukung oleh
                            guru-guru yang berpengalaman untuk memastikan hafalan santri berkualitas dan lancar.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program 2 -->
            <div class="col-lg-4 col-md-6 pb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex flex-column bg-program border-top rounded mb-4 h-100 colom"
                     style="padding: 30px">
                    <i class="bi bi-translate h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4 flex-grow-1">
                        <h4>Bahasa</h4>
                        <p class="m-0">
                            Program penguasaan bahasa Arab dan Inggris sebagai alat untuk memahami ilmu agama dan
                            komunikasi global, dilengkapi dengan praktik langsung dan lingkungan yang mendukung.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program 3 -->
            <div class="col-lg-4 col-md-6 pb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex flex-column bg-program border-top rounded mb-4 h-100 colom"
                     style="padding: 30px">
                    <i class="bi bi-journal-text h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4 flex-grow-1">
                        <h4>Kitabiyah / Diniyah</h4>
                        <p class="m-0">
                            Pembelajaran kitab-kitab klasik (turats) dan ilmu-ilmu keislaman seperti fiqh, hadits,
                            tafsir, dan akidah untuk membentuk dasar keilmuan santri yang kuat.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program 4 -->
            <div class="col-lg-4 col-md-6 pb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex flex-column bg-program border-top rounded mb-4 h-100 colom"
                     style="padding: 30px">
                    <i class="bi bi-people h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4 flex-grow-1">
                        <h4>Leadership / Nisaiyyah</h4>
                        <p class="m-0">
                            Program pembinaan kepemimpinan dan karakter khusus untuk santri putri, mengembangkan soft
                            skills, tanggung jawab, dan jiwa kepemimpinan yang Islami.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program 5 -->
            <div class="col-lg-4 col-md-6 pb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex flex-column bg-program border-top rounded mb-4 h-100 colom"
                     style="padding: 30px">
                    <i class="bi bi-cash-coin h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4 flex-grow-1">
                        <h4>Santri Preneur</h4>
                        <p class="m-0">
                            Program kewirausahaan untuk melatih santri menjadi pribadi mandiri dan kreatif, dengan
                            pembekalan keterampilan bisnis berbasis syariah dan etika Islam.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program 6 -->
            <div class="col-lg-4 col-md-6 pb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex flex-column bg-program border-top rounded mb-4 h-100 colom"
                     style="padding: 30px">
                    <i class="bi bi-gear h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4 flex-grow-1">
                        <h4>Mulazamah Sains Quran</h4>
                        <p class="m-0">
                            Program integrasi antara ilmu sains modern dan Al-Qur'an, mengajarkan santri untuk memahami
                            fenomena alam dan teknologi melalui perspektif Al-Qur'an.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program 7 -->
            <div class="col-lg-4 col-md-6 pb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex flex-column bg-program border-top rounded mb-4 h-100 colom"
                     style="padding: 30px">
                    <i class="bi bi-award h1 text-primary mb-3"></i> <!-- Ganti ikon ke "award" -->
                    <div class="pl-4 flex-grow-1">
                        <h4>Ekstrakurikuler Sunnah & Lainnya</h4>
                        <ul class="m-0 ps-3">
                            <li>🏹 Memanah</li>
                            <li>🐎 Berkuda</li>
                            <li>🏊‍♂️ Berenang</li>
                            <li>⚽ Futsal</li>
                            <li>🥾 Tracking</li>
                            <li>🏕️ Camping</li>
                            <li>🎬 Movie Time (mengambil hikmah)</li>
                            <li>🤸‍♂️ Senam</li>
                            <li>🏕️ Pramuka</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{--<!-- Program Start -->--}}


<div id="blog" class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-4">
            <p class="section-title px-5">
                <span class="px-2 text-uppercase text-primary fw-bold">Latest Blog</span>
            </p>
            <h1 class="mb-4 fw-bold">Latest Articles From Blog</h1>
        </div>
        <div class="row pb-3 justify-content-center">
            @foreach($blogs as $blog)
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg mb-4 rounded-lg overflow-hidden blog-card">
                        <div class="position-relative">
                            <img class="card-img-top" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                            <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-1 rounded-bottom">
                                Blog
                            </div>
                        </div>
                        <div class="card-body bg-light text-center p-4 d-flex flex-column">
                            <h4 class="fw-bold">{{ $blog->title }}</h4>
                            <div class="d-flex justify-content-center mb-3">
                                @if($blog->instagram_link)
                                    <small>
                                        <a href="{{ $blog->instagram_link }}" target="_blank" class="text-primary text-decoration-none">
                                            <i class="bi bi-instagram"></i> Instagram
                                        </a>
                                    </small>
                                @endif
                            </div>
                            <p class="text-muted flex-grow-1">
                                {{ Str::limit($blog->content, 100, '...') }}
                            </p>
                            <a href="" class="btn btn-primary mt-auto px-4 mx-auto">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{--<!-- Blog End -->--}}


<!-- Footer Start -->
<div class="container-fluid bg-secondary text-white py-5 px-sm-3 px-md-5">
    <div class="row pt-5 d-flex justify-content-center">
        <!-- Kolom 1: Logo dan Deskripsi -->
        <div class="col-lg-4 col-md-6 mb-5">
            <a href="#" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
               style="font-size: 40px; line-height: 40px">
                <img src="{{ asset('assets/img/IconFalahNoBg.png') }}" alt="Logo" height="50">
                <span class="text-white">𝐒𝐀𝐘𝐅 𝐄𝐋 𝐅𝐀𝐋𝐀𝐇</span>
            </a>
            <p>
                Ayo Daftarkan Sekarang juga anak-anak anda untuk menjadi anak yang berkarakter islamiah
            </p>
            <div class="d-flex justify-content-start mt-4">
                {{--                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>--}}
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                   style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                {{--                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>--}}
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                   style="width: 38px; height: 38px"
                   href="https://www.instagram.com/pesantrensayfelfalah?igsh=dXJrcGN1eXl5aHBu"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Kolom 2: Get In Touch -->
        <div class="col-lg-4 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Hubungi Kami</h3>
            <div class="d-flex">
                <h4 class="fa fa-map-marker-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Address</h5>
                    <p>Jl. Wahidin Sudiro Husodo No.36, Bramen, Sekarsuli, Kec. Klaten Utara, Kabupaten Klaten, Jawa
                        Tengah 57438</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-envelope text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Email</h5>
                    <p>pesantrensayfelfalah@gmail.com</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-phone-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Phone</h5>
                    <a class="link" href="https://wa.me/6285217176495?text=Assalamualaikum%20Ustadz%20Furqan,%20%0AAfwan%20ingin%20bertanya%20tentang%20Seputar%20Pondok"><p>+6285217176459 (Ustad Furqan Syafrizal)</p></a>
                </div>
            </div>
        </div>


    </div>

    <!-- Footer Copyright -->
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2);">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-primary font-weight-bold" href="#">PESANTREN SAYFEL FALAH</a>. All Rights Reserved.
            Designed by <a class="text-primary font-weight-bold" href="https://htmlcodex.com">Raihan Hamdani</a>
        </p>
    </div>
</div>
{{--<!-- Footer End -->--}}


{{--<!-- Back to Top -->--}}
<button onclick="topFunction()" id="myBtn" class="btn btn-primary p-3">
    <i class="fa fa-angle-double-up"></i>
</button>

{{--<!-- JavaScript Libraries -->--}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>--}}
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>


<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true
    }); // Inisialisasi AOS
</script>


</body>
</html>
