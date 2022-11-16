@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    @if($data)
    <div class="row ">
        <div class="col-12 alert alert-secondary" role="alert">

            <div class="row align-items-center">
                <div class="col-10">
                    You can see the post details here.
                </div>
                <div class="col-2 text-end">
                    <a href="{{url('edit_post',$data->id)}}" class="btn btn-success">Edit</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Title -->
    <div class="row my-3 my-3">
        <div class="col-6">
            <p>Title</p>
        </div>
        <div class="col-6">
            <p>
                {{$data->post_title}}
            </p>
        </div>
    </div>

    <!-- Subtitle -->
    <div class="row my-3">
        <div class="col-6">
            <p>Subtitle</p>
        </div>
        <div class="col-6">
            <p>
                {{$data->post_subtitle}}
            </p>
        </div>
    </div>

    <!-- Description -->
    <div class="row my-3">
        <div class="col-6">
            <p>Post Description</p>
        </div>
        <div class="col-6">
            <p>
                {{$data->post_description}}
            </p>
        </div>
    </div>

    <!-- Text -->
    <div class="row my-3">
        <div class="col-6">
            <p>Text</p>
        </div>
        <div class="col-6">
            <div style="overflow-y:auto;height:auto;max-height:200px;">
                <p>
                    {{$data->post_text}}
                </p>
            </div>
        </div>
    </div>

    <!-- Background Image -->
    <div class="row my-3">
        <div class="col-6">
            <p>Background Image</p>
        </div>
        <div class="col-6">
            <img src="/db_img/posts/{{$data->bg_img}}" alt="" class="post-img">
        </div>
    </div>

    <!-- First Image -->
    <div class="row my-3">
        <div class="col-6">
            <p>First Image</p>
        </div>
        <div class="col-6">
            <img src="/db_img/posts/{{$data->first_img}}" alt="" class="post-img">
        </div>
    </div>

    <!-- Second Image -->
    <div class="row my-3">
        <div class="col-6">
            <p>Second Image</p>
        </div>
        <div class="col-6">
            <img src="/db_img/posts/{{$data->second_img}}" alt="" class="post-img">
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