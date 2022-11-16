@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                'About Me' section settings.
            </div>
            @if(session()->has('message'))
            <div class="alert-div alert alert-primary alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif
        </div>
    </div>
    @foreach($info as $info)
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{url('/edit_aHome_confirm')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="alert alert-secondary" role="alert">
                            About Me (Home)
                        </div>
                    </div>
                    <div class="col-6">
                        <label>Current About Me Image</label>
                        <img src="/db_img/about/{{$info->img_url}}" alt="#" class="img-des">
                    </div>
                    <div class="col-6">
                        <label for="image">About Me Image</label>
                        <input type="file" name="image" class="form-control" accept=".png, .jpg, .jpeg">
                        <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
                    </div>
                    <div class="col-12">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$info->title}}" autocomplete="off">
                    </div>
                    <div class="col-12">
                        <label for="about_text">About Me Text</label>
                        <textarea class="width-des" name="about_text" id="" cols="30" rows="5">{{$info->text}}</textarea class="width-des">
                    </div>
                    <div class="col-12 px-5 pt-4 text-center">
                        <input type="submit" value="SAVE" class=" px-5 btn btn-outline-secondary">
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach
</div>
<!-- CONTENT FINISH -->
</div>
</section>

</div>
</body>
</html>