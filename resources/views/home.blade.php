{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('content')
<section class="hero text-center">
    <div class="container">
        <img src="{{ asset('image/profile.jpg') }}" alt="Foto Profil" class="profile-img">
        <h1 class="fw-bold">Ilham Setyamuhti</h1>
        <p class="lead">Backend Engineer | Laravel Developer</p>
    </div>

    <!-- Media Sosial -->
    <div class="social-icons">
        <a href="https://github.com/ilstya" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://linkedin.com/in/ilhamsetyamuhti" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://twitter.com/#" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</section>
    <div class="skills">
        <h3>Keahlian Saya</h3>
        <div class="icons">
            <i class="fab fa-laravel"></i>
            <i class="fab fa-php"></i>
            <i class="fas fa-database"></i>
            <i class="fas fa-cogs"></i>
            <i class="fas fa-vial"></i>
        </div>
   </div>

    <section id="about" class="section text-center">
        <div class="container">
            <h2 class="fw-bold">Tentang Saya</h2>
            <p>
                Saya adalah seorang <strong>Backend Engineer</strong> dengan pengalaman dalam
                <strong>Laravel, Java, dan teknologi backend lainnya</strong>.
                Saya memiliki keahlian dalam <strong>membangun API, mengelola database, dan mengembangkan sistem backend menggunakan Laravel</strong>.
            </p>
            <p>
                Selain itu, saya juga seorang <strong>desainer media sosial yang kreatif dan serbaguna, blogger, copywriter, serta front-end designer</strong>.
                Saya memiliki gelar <strong>Sarjana Teknologi Informasi dari Universitas Teknologi Yogyakarta</strong>
                dan telah menghasilkan konten yang menarik, dengan lebih dari <strong>15.000 tampilan di blog pribadi</strong>.
            </p>
        </div>
    </section>

    <section id="projects" class="projects text-center">
        <div class="container">
            <h2 class="fw-bold">Proyek</h2>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project['title'] }}</h5>
                                <p class="card-text">{{ $project['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">REST API Laravel</h5>
                <p class="card-text">Membangun REST API</p>
                <a href="https://github.com/username/repo" class="btn btn-primary" target="_blank">Lihat di GitHub</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sistem Manajemen Pengguna</h5>
                <p class="card-text">Membuat sistem CRUD dengan Laravel dan MySQL</p>
                <a href="https://github.com/username/repo" class="btn btn-primary" target="_blank">Lihat di GitHub</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Otomasi Testing dengan Selenium</h5>
                <p class="card-text">pengujian otomatis menggunakan Selenium dan Cucumber</p>
                <a href="https://github.com/ilstya/QAporto" class="btn btn-primary" target="_blank">Lihat di GitHub</a>
            </div>
        </div>
    </section>

@endsection
