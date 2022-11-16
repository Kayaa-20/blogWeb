@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-4 box">
            <h2>Welcome to Admin Panel!</h2>
            <p>You can edit all settings here</p>
        </div>
        <div class="col-4 box ms-3">
            <div class="row align-items-center">
                <div class="col-8 align-self-center">
                    <!-- <i class="fa-solid fa-chart-line fa-3x"></i> -->
                    <img src="{{asset('img/application.png')}}" alt="#" class="icon">
                    <h2>All Posts</h2>
                </div>
                <div class="col-4">
                    <span>{{$allPosts}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>