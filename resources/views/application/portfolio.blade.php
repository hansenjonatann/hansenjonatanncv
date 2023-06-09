@extends('layouts.app')

@section('title', 'Portfolio')

@section('portfolio')
    <section id="work" class="portfolio-mf sect-pt4 route bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a text-white">
                            Portfolio
                        </h3>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/password-generator.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/password-generator.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Password Generator</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Developer</span> / <span class="w-date">18 Sep.
                                            2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="https://hj-codin-password-generator.hansenjonatan.repl.co/"> <span
                                                class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/personal-linktree.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/personal-linktree.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Personal Link Tree</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Developer</span> / <span class="w-date">18 Sep.
                                            2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="https://hansenjonatan-personallinktree.vercel.app/"> <span
                                                class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
