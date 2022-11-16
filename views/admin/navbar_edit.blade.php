@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                Navbar Settings.
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
            <form action="{{url('/edit_nav_confirm',$info->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center justify-content-center">
                    <div class="col-8 py-0">
                        <label>Current Logo</label>
                        <img src="/db_img/{{$info->logo}}" alt="#" class="logo">
                    </div>
                    <div class="col-8">
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" id="logo" class="form-control">
                    </div>
                    <div class="col-8">
                        <label for="title_1">Area Name</label>
                        <input type="text" name="title_1" class="form-control" value="{{$info->title_1}}" autocomplete="off">
                    </div>
                    <!-- <div class="col-6">
                        <label for="link_1">Area Link</label>
                        <input type="text" name="link_1" class="form-control" value="{{$info->link_1}}" autocomplete="off">
                    </div> -->
                    <div class="col-8">
                        <label for="title_2">Area Name</label>
                        <input type="text" name="title_2" class="form-control" value="{{$info->title_2}}" autocomplete="off">
                    </div>
                    <!-- <div class="col-6">
                        <label for="link_2">Area Link</label>
                        <input type="text" name="link_2" class="form-control" value="{{$info->link_2}}" autocomplete="off">
                    </div> -->
                    <div class="col-8">
                        <label for="title_3">Area Name</label>
                        <input type="text" name="title_3" class="form-control" value="{{$info->title_3}}" autocomplete="off">
                    </div>
                    <!-- <div class="col-6">
                        <label for="link_3">Area Link</label>
                        <input type="text" name="link_3" class="form-control" value="{{$info->link_3}}" autocomplete="off">
                    </div> -->
                    <div class="col-8">
                        <label for="title_4">Area Name</label>
                        <input type="text" name="title_4" class="form-control" value="{{$info->title_4}}" autocomplete="off">
                    </div>
                    <!-- <div class="col-6">
                        <label for="link_4">Area Link</label>
                        <input type="text" name="link_4" class="form-control" value="{{$info->link_4}}" autocomplete="off">
                    </div> -->
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