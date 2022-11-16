@include('admin.header')

<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                You can add new slider item here.
            </div>
            @if(session()->has('message'))
            <div class="alert-div alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{url('/add_slider_confirm')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-12">
                        <label for="slider">Image</label>
                        <input type="file" name="slider" id="slider" class="form-control" accept=".png, .jpg, .jpeg">
                        <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
                    </div>
                    <div class="col-12">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-12">
                        <label for="slide_text">Text</label>
                        <input type="text" name="slide_text" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-12">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control" placeholder="(optional)" autocomplete="off">
                    </div>
                    <div class="col-12">
                        <label for="color_name">Color (Optional)</label>
                        <input type="color" name="color_name" class="form-control">
                    </div>
                    <div class="col-12 pt-4 text-center">
                        <button class="btn btn-outline-secondary p-button">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>