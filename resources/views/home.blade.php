@extends('layots/app')
@section('content')
    <!-- Ana Sayfa -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <h1>Hoş Geldiniz!</h1>
            <p>Bu, basit bir blogun ana sayfasıdır. İşte son makaleler:</p>

            <!-- Blog Makaleleri -->
            <div class="card">
                <img src="https://placehold.co/1280x720" class="card-img-top" alt="Makale 1">
                <div class="card-body">
                    <h5 class="card-title">Makale 1 Başlığı</h5>
                    <p class="card-text">Makale 1 içeriği burada yer alır. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="blog-detay.html" class="btn btn-primary">Devamını Oku</a>
                </div>
            </div>

            <div class="card mt-4">
                <img src="https://placehold.co/1280x720" class="card-img-top" alt="Makale 2">
                <div class="card-body">
                    <h5 class="card-title">Makale 2 Başlığı</h5>
                    <p class="card-text">Makale 2 içeriği burada yer alır. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="blog-detay.html" class="btn btn-primary">Devamını Oku</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
