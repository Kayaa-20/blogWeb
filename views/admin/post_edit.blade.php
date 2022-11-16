@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row py-3">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                Post Edit Page.
            </div>
            @if(session()->has('message'))
            <div class="alert-div alert alert-primary alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif
        </div>
    </div>
    @if($data)
    <div class="row py-3 justify-content-center">
        <div class="col-9">
            <form action="{{url('edit_post_confirm',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Title -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Title</p>
                    </div>
                    <div class="col-6">
                        <input name="title" type="text" value="{{$data->post_title}}" class="width-des" autocomplete="off">
                    </div>
                </div>

                <!-- Subtitle -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Subtitle</p>
                    </div>
                    <div class="col-6">
                        <input name="subtitle" type="text" value="{{$data->post_subtitle}}" class="width-des" autocomplete="off">
                    </div>
                </div>

                <!-- Description -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Post Description</p>
                    </div>
                    <div class="col-6">
                        <input name="description" type="text" value="{{$data->post_description}}" class="width-des" autocomplete="off">
                    </div>
                </div>

                <!-- Text -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Text</p>
                    </div>
                    <div class="col-6">
                        <textarea name="post_text" cols="30" rows="10" py-3 class="width-des">
                        {{$data->post_text}}
                        </textarea>
                    </div>
                </div>

                <!-- Background Image -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Current<br>Background Image</p>
                    </div>
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <img src="/db_img/posts/{{$data->bg_img}}" alt="" class="post-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <p>Choose New Background Image</p>
                    </div>
                    <div class="col-6">
                        <input type="file" name="post_bg" class="width-des" accept=".png, .jpg, .jpeg">
                        <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
                    </div>
                </div>

                <!-- First Image -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Current<br>First Image</p>
                    </div>
                    <div class="col-6 text-center">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <img src="/db_img/posts/{{$data->first_img}}" alt="" class="post-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <p>Choose First Image</p>
                    </div>
                    <div class="col-6">
                        <input type="file" name="first_img" class="width-des" accept=".png, .jpg, .jpeg">
                        <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
                    </div>
                </div>

                <!-- Second Image -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Current<br>Second Image</p>
                    </div>
                    <div class="col-6 text-center">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <img src="/db_img/posts/{{$data->second_img}}" alt="" class="post-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <p>Choose Second Image</p>
                    </div>
                    <div class="col-6">
                        <input type="file" name="second_img" id="postBg" class="width-des" accept=".png, .jpg, .jpeg">
                        <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
                    </div>
                </div>

                <div class="row py-5">
                    <div class="col text-center">
                        <button class="btn btn-outline-secondary p-button">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>