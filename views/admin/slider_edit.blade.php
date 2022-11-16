@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                You can change your sliders here.
            </div>
            @if(session()->has('message'))
            <div class="alert-div alert alert-primary alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        @if($data)
        <div class="col-8">
            <form action="{{url('/edit_slider_confirm',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-6">
                        <label for="c_slider">Current Logo</label>
                        <img src="/db_img/slider/{{$data->slider_url}}" alt="#" class="img-des" name="c_slider">
                    </div>
                    <div class="col-6">
                        <label for="slider">Image</label>
                        <input type="file" name="slider" id="slider" class="form-control" accept=".png, .jpg, .jpeg">
                        <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
                    </div>
                    <div class="col-6">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$data->title}}" autocomplete="off">
                    </div>
                    <div class="col-6">
                        <label for="slide_text">Text</label>
                        <input type="text" name="slide_text" class="form-control" value="{{$data->text}}" autocomplete="off">
                    </div>
                    <div class="col-6">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control" placeholder="(optional)" value="{{$data->link}}" autocomplete="off">
                    </div>
                    <div class="col-6">
                        <label for="color_name">Color (Optional)</label>
                        <input type="color" name="color_name" class="form-control" value="{{$data->color}}">
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto pt-3">
                        <button class="btn btn-outline-secondary">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
        @endif
    </div>
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>