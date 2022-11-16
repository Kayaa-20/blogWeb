<!-- Head -->
@include('home.header')

<body>
    <!-- HEADER -->
    <div class="container-fluid blog-details">
        <header id="header">
            <div class="row detail-page">
                <img src="/db_img/posts/{{$post->bg_img}}" alt="#Background Image" class="detail-img">
                <div class="col-12">
                    <!-- Nav -->
                    @include('home.navbar')
                    <!-- Nav -->
                </div>
            </div>
        </header>

        <!-- POST-DETAIL -->
        <section id="post-detail">
            <div class="row detail-item">
                <div class="col detail-text">
                    <div class="row">
                        <div class="col ">
                            <h4>{{$post->post_title}}</h4>
                            <p>{{$post->post_text}}</p>
                        </div>
                        <div class="col-12 post-img">
                            <img src="/db_img/posts/{{$post->first_img}}" alt="">
                        </div>
                        <div class="col-12">
                            <h6>{{$post->post_subtitle}}</h6>
                            <p>{{$post->post_subtext}}</p>
                        </div>
                        <div class="col-12 post-img">
                            <img src="/db_img/posts/{{$post->second_img}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--POST DETAIL -->

        <!-- Footer Section -->
        @include('home.footer')
</body>
</html>