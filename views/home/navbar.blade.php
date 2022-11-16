<div class="row navigation">
    <div class="col navItem">
        <ul class="justify-content-center">
            <li><a href="{{url('/')}}" class="nav-line">{{$nav->title_1}}</a></li>
            <li><a href="{{url('/about')}}" class="nav-line">{{$nav->title_2}}</a></li>
            <li>
                <a href="{{url('/')}}">
                    <img src="/db_img/{{$nav->logo}}" class="logo-des" alt="LOGO">
                </a>
            </li>
            <li><a href="{{url('/posts')}}" class="nav-line">{{$nav->title_3}}</a></li>
            <li><a href="{{url('/contact')}}" class="nav-line">{{$nav->title_4}}</a></li>
            <li>
                <a href="#" id="toggle"><i class="fa-solid fa-bars"></i></a>
            </li>
        </ul>
    </div>
    <div class="sideCol">
        <ul>
            <li><a href="{{url('/')}}">{{$nav->title_1}}</a></li>
            <li><a href="{{url('/about')}}">{{$nav->title_2}}</a></li>
            <li><a href="{{url('/posts')}}">{{$nav->title_3}}</a></li>
            <li><a href="{{url('/contact')}}">{{$nav->title_4}}</a></li>
        </ul>
    </div>
</div>