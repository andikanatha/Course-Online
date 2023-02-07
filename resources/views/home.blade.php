@extends('layouts.main')

@section('content')

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Memperbaiki hidup melalui belajar</h5>
                        <h1>Bangun karirmu sebagai expert dalam bidangnya</h1>
                        <p>Belajar sesuai keinginanmu dengan program pembelajaran daring yang fleksibel. Tingkatkan diri dan keahlianmu dengan mudah dan efisien, Raih kesuksesan dan tingkatkan potensimu.</p>
                        <a href="{{ route('courses.index') }}" class="btn_1">Lihat Kursus </a>
                        {{-- <a href="#" class="btn_2">Get Started </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Fitur <br> Menajubkan</h2>
                        <p>Buat pengalaman yang menajubkan melalui fitur-fitur yang dapat memudahkan anda dalam belajar.</p>
                        <a href="#" class="btn_1">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Pembelajaran fleksibel</h4>
                            <p>Fitur Pembelajaran Fleksibel mempersembahkan kesempatan untuk belajar kapan saja dan di mana saja.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Pembelajaran dari para ahli</h4>
                            <p>Fitur Pembelajaran dari para ahli memberikan pengalaman belajar berkualitas tinggi dan dapatkan wawasan dan teknik terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Pembelajaran daring inovatif</h4>
                            <p>Belajar inovatif, mudah, dan efektif bersama guru dan teknologi terbaru. Capai potensi terbaik dan jadilah ahli.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Kursus</p>
                    <h2>Kursus Terbaru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($newestCourses as $course)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ optional($course->photo)->getUrl() ?? asset('img/no_image.png') }}" class="special_img" alt="">
                        <div class="special_cource_text">
                            @foreach($course->disciplines as $discipline)
                                <a href="{{ route('courses.index') }}?discipline={{ $discipline->id }}" class="btn_4 mr-1 mb-1">{{ $discipline->name }}</a>
                            @endforeach
                            <h4>{{$course->getPrice() }}</h4>
                            <a href="{{ route('courses.show', $course->id) }}"><h3>{{ $course->name }}</h3></a>
                            <p>{{ Str::limit($course->description, 100) }}</p>
                            @if($course->institution)
                                <div class="author_info">
                                    <div class="author_img">
                                        <img src="{{ optional($course->institution->logo)->thumbnail ?? asset('img/no_image.png') }}" alt="" class="rounded-circle">
                                        <div class="author_info_text">
                                            <p>Institusi</p>
                                            <h5><a href="{{ route('courses.index') }}?institution={{ $course->institution->id }}">{{ $course->institution->name }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Fitur </h5>
                        <h2>Sistem Pembelajaran Pendidik Tingkat Lanjut kami</h2>
                        <p>Fitur masa depan membawa revolusi baru dalam cara belajar dan meningkatkan keahlian. Teknologi canggih dan interaksi yang baik dengan guru memastikan pemahaman yang baik dan peningkatan keahlian yang signifikan untuk anda.</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Belajar dimana saja</h4>
                                    <p>meberikan fitur belajar baik secara luring dan daring secara tidak terbatas dan dapat dimulai kapan saja.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Guru Ahli</h4>
                                    <p>Memberikan para ahli yang berpengalaman sesaui dengan kemapuan bidan yang anda pilih.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="img/advance_feature_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->


<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Institusi</p>
                    <h2>Para institusi</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($randomInstitutions as $institution)
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ optional($institution->logo)->url ?? asset('img/no_image.png') }}" class="card-img-top" alt="{{ $institution->name }}">
                            <div class="card-body">
                                <a href="{{ route('courses.index') }}?institution={{ $institution->id }}">
                                    <h5 class="card-title">{{ $institution->name }}</h5>
                                </a>
                                <p>{{ Str::limit($institution->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Testimoni</p>
                        <h2>Pengalaman luar biasa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Saya khusus mendedikasikan waktu saya untuk belajar ngoding. Di ACG Course belajarnya step by step, library-nya up-to-date. Kalau ada eror, nggak bingung. Di sini saya juga belajar untuk nggak asal coding. CV pun jadi bagus. Saya jadi percaya diri.</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>"Sebelum mengikuti online course ini, saya merasa kurang yakin dengan kemampuan saya. Namun, setelah mengikuti program ini, saya merasa lebih percaya diri dan memiliki pengetahuan yang lebih baik. Terima kasih atas pengalaman yang menakjubkan ini.</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Program pembelajaran daring ini membantu saya meningkatkan keahlian saya dengan cara yang sangat mudah dan menyenangkan. Saya sangat merekomendasikan program ini bagi siapa saja yang ingin belajar dan berkembang.</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_2.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Menjadi bagian dari komunitas pembelajaran daring ini merupakan pengalaman yang sangat positif bagi saya. Guru-guru yang mengajar sangat membantu dan memberikan dukungan yang dibutuhkan. Terima kasih atas pengalaman yang luar biasa ini.</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Ini adalah online course terbaik yang pernah saya ikuti. Instruktur sangat berkualitas dan sangat membantu dalam memahami materi yang sulit.</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_3.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Online course ini sangat berguna bagi saya dalam meningkatkan keterampilan dan pengetahuan saya. Materi yang diberikan sangat detail dan instruktur sangat membantu.</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

@endsection
