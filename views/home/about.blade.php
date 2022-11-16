<!-- Head -->
@include('home.header')

<!-- HEADER -->
<div class="row about-section ">
    <img src="db_img/about/{{$data->detail_img}}" alt="" class="about-page">
    <div class="col-12">
        <!-- Navbar -->
        @include('home.navbar')
    </div>
    <div class="col-12">
        <div class="row about-item">
            <div class="col-3 about-content">
                <h4>{{$data->meet_title}}</h4>
                <p>{{$data->meet_text}}</p>
                <h6>{{$data->sign}}</h6>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>
</header>

<!-- New Works -->
<section>
    <div class="row blank">
        <div class="col-2">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- New Works  -->

<!-- Details -->
<section>
    <div class="row detail">
        <div class="col-4 detail-content">
            <h3>{{$data->detail_title}}</h3>
            <p>{{$data->detail_text}}</p>
            <h5>{{$data->detail_subtitle}}</h5>
            <p>{{$data->detail_subtext}}</p>
        </div>
        <div class="col-5 border">
            <img src="db_img/about/{{$data->detail_img}}" alt="#doesn't find!">
        </div>
    </div>
</section>
<!-- Details -->

<!-- FOLLOW ME -->
<section>
    <div class="row follow-me">
        <div class="col-12">
            <h3>Follow me on<br><b>INSTAGRAM</b></h3>
        </div>
        <div class="col-2">
            <img src="db_img/contact/{{$ins->ins_img1}}" alt="">
        </div>
        <div class="col-2">
            <img src="db_img/contact/{{$ins->ins_img2}}" alt="">
        </div>
        <div class="col-2">
            <img src="db_img/contact/{{$ins->ins_img3}}" alt="">
        </div>
        <div class="col-2">
            <img src="db_img/contact/{{$ins->ins_img4}}" alt="">
        </div>
        <div class="col-2">
            <img src="db_img/contact/{{$ins->ins_img5}}" alt="">
        </div>
        <div class="col-2">
            <img src="db_img/contact/{{$ins->ins_img6}}" alt="">
        </div>
    </div>
</section>
<!-- FOLLOW ME -->

<!-- Footer Section -->
@include('home.footer')
</body>
</html>