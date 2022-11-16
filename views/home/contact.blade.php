<!-- Head -->
@include('home.header')

<body>
    <!-- HEADER -->
    <div class="container-fluid blog-details">
        <header id="header">
            <div class="row contact-page">
                <img src="db_img/contact/{{$contact->bg_img}}" alt="#image" class="contact-img">
                <!-- Nav -->
                @include('home.navbar')
                <!-- Nav -->
                <div class="col-7"></div>
                <div class="col-4 contact-us">
                    <div class="row contact-us-item">
                        <div class="col-12 text-center">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="col-5">
                            <label for="name">Name*</label>
                            <br>
                            <input type="text" id="name" autocomplete="off">
                        </div>
                        <div class="col-5">
                            <label for="email">E-mail*</label>
                            <br>
                            <input type="email" id="email" autocomplete="off">
                        </div>
                        <div class="col-10">
                            <label for="subject">Subject*</label>
                            <br>
                            <input type="text" id="subject" autocomplete="off">
                        </div>
                        <div class="col-10">
                            <label for="message">Message*</label>
                            <br>
                            <textarea name="message" id="message" cols="10" rows="5"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- CONTACT DETAIL -->
        <section id="contact-info">
            <div class="row contact-info">
                <div class="col-12 contact-item">
                    <h4>Contact Information</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, mollitia?</p>
                </div>
                <div class="col-auto">
                    <a href="{{$contact->fb_link}}">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{$contact->ins_link}}">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{$contact->tweet_link}}">
                        <i class="fa-brands fa-square-twitter"></i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{$contact->admin_mail}}">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--CONTACT DETAIL -->

        <!-- Footer Section -->
        @include('home.footer')
</body>
</html>