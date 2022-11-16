<!-- Head -->
@include('home.header')
<body>
    <!-- HEADER -->
    <div class="container-fluid">
        <header id="header">
            <!-- Nav -->
            @include('home.navbar')
            <!-- Nav -->

            <!-- Slider -->
            <div class="row slider">
                <div class="col sliderItem">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <?php $i = 0; ?>
                            @foreach($sliders as $slider)
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i}}" class="{{ $loop->first ? 'active' : '' }}"></button>
                            <?php $i++; ?>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($sliders as $slider)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="db_img/slider/{{$slider->slider_url}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{$slider->title}}</h5>
                                    <p>{{$slider->text}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Slider -->
        </header>
        <!-- HEADER -->

        <!-- ABOUT Section -->
        <section id="about">
            <div class="row about">
                <div class="col-4">
                    <img src="db_img/about/{{$about->img_url}}" alt="" class="imgCol">
                </div>
                <div class="col-5 about-content">
                    <h3><b>ABOUT </b> ME</h3>
                    <h5>{{$about->title}} </h5>
                    <p>{{$about->text}} </p>
                    <a href="{{url('/about')}}" id="about-btn">More About Me</a>
                </div>
            </div>
        </section>
        <!-- ABOUT Section -->

        <!-- LATEST POST Section -->
        <section id="latest-posts">
            <div class="row latest-posts">
                <div class="col-auto text">
                    <div class="text-item">
                        <h3>LATEST <b>POSTS</b></h3>
                    </div>
                </div>
                @foreach($posts as $post)
                <div class="col-auto overlayDiv">
                    <img src="db_img/posts/{{$post->bg_img}}" id="overlayImg-1" alt="">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>New Post<br>{{$post->post_title}}</h3>
                            <p>{{$post->post_description}}</p>
                            <button type="button">Read More</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- LATEST POST Section -->

        <!-- DISCOVER Section-->
        <section id="discover">
            <div class="row discover">
                <div class="col-12 post-title">
                    <h3>DISCOVER</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, quod.</p>
                </div>
                <div class="col">
                    <div class="row overlayRow">
                        <div class="col-auto overlay">
                            <img src="db_img/posts/{{$post_1->bg_img}}" alt="">
                            <div class="overlay-content">
                                <a href="#">
                                    <h4>{{$post_1->post_title}}</h4>
                                </a>
                                <p>{{$post_1->post_description}}</p>
                            </div>
                        </div>
                        <div class="col-auto overlay">
                            <img src="db_img/posts/{{$post_2->bg_img}}" alt="">
                            <div class="overlay-content">
                                <a href="#">
                                    <h4>{{$post_2->post_title}}</h4>
                                </a>
                                <p>{{$post_2->post_description}}</p>
                            </div>
                        </div>
                        <div class="col-auto overlay">
                            <img src="db_img/posts/{{$post_3->bg_img}}" alt="">
                            <div class="overlay-content">
                                <a href="#">
                                    <h4>{{$post_3->post_title}}</h4>
                                </a>
                                <p>{{$post_3->post_description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row overlayRow">
                        <div class="col-auto overlay">
                            <img src="db_img/posts/{{$post_4->bg_img}}" alt="">
                            <div class="overlay-content">
                                <a href="#">
                                    <h4>{{$post_4->post_title}}</h4>
                                </a>
                                <p>{{$post_4->post_description}}</p>
                            </div>
                        </div>
                        <div class="col-auto overlay">
                            <img src="db_img/posts/{{$post_5->bg_img}}" alt="">
                            <div class="overlay-content">
                                <a href="#">
                                    <h4>{{$post_5->post_title}}</h4>
                                </a>
                                <p>{{$post_5->post_description}}</p>
                            </div>
                        </div>
                        <div class="col-auto overlay">
                            <img src="db_img/posts/{{$post_6->bg_img}}" alt="">
                            <div class="overlay-content">
                                <a href="#">
                                    <h4>{{$post_6->post_title}}</h4>
                                </a>
                                <p>{{$post_6->post_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DISCOVER Section-->

        <!-- CONTACT Section -->
        <section id="contact">
            <div class="row contact">
                <div class="col">
                    <h3><b>FOLLOW</b> ME</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, corporis.</p>
                </div>
                <div class="col-12">
                    <div class="row followRow">
                        <div class="col-auto followCol">
                            <a href="{{$contact->fb_link}}">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </div>
                        <div class="col-auto followCol">
                            <a href="{{$contact->ins_link}}">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="col-auto followCol">
                            <a href="{{$contact->tweet_link}}">
                                <i class="fa-brands fa-square-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTACT Section -->

        <!-- Footer Section -->
        @include('home.footer')
</body>
</html>