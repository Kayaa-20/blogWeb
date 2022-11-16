<!-- Head -->
@include('home.header')

<body>
    <!-- HEADER -->
    <div class="container-fluid">
        <header id="header">
            <div class="row">
                <div class="col-12">
                    <!-- Nav -->
                    @include('home.navbar')
                    <!-- Nav -->
                </div>
                <div class="col-12 categories">
                    <ul class='category-item'>
                        @foreach($categories as $category)
                        <li>
                            <a href="{{url('category',$category->id)}}">{{$category->category_name}}</a>
                        </li>
                        @endforeach
                        <li>
                            <a href="{{url('posts')}}">All</a>
                        </li>
                    </ul>

                </div>
            </div>
        </header>

        <!-- ALL POSTS -->
        <section id="posts">
            <div class="row posts">
                @foreach($postCtg as $post)
                <div class="col-2 post-item">
                    <a href="{{url('post', $post->id)}}">
                        <div class="row">
                            <div class="col">
                                <img src="/db_img/posts/{{$post->bg_img}}" alt="">
                            </div>
                        </div>
                        <div class="row post-content">
                            <div class="col">
                                <h5>{{$post->post_title}}</h5>
                                <p>{{$post->post_description}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row post-pagi">
                <div class="col-auto">
                    {!!$postCtg->withQueryString()->links('pagination::bootstrap-5')!!}
                </div>
            </div>
        </section>
        <!-- ALL POSTS -->

        <!-- Footer Section -->
        @include('home.footer')
</body>

</html>