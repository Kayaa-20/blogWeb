@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                Contact Settings.
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
    <form action="{{url('edit_contactInfo_confirm')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="fb_link">Facebook Link</label>
                <input class="width-des" type="text" name="fb_link" id="fb_link" value="{{$data->fb_link}}" autocomplete="off">
            </div>
            <div class="col-6">
                <label for="ins_link">Instagram Link</label>
                <input class="width-des" type="text" name="ins_link" id="ins_link" value="{{$data->ins_link}}" autocomplete="off">
            </div>
            <div class="col-6">
                <label for="tweet_link">Twitter Link</label>
                <input class="width-des" type="text" name="tweet_link" id="tweet_link" value="{{$data->tweet_link}}" autocomplete="off">
            </div>
            <div class="col-6">
                <label for="mail">Admin E-mail</label>
                <input class="width-des" type="text" name="mail" id="mail" value="{{$data->admin_mail}}" autocomplete="off">
            </div>
            <div class="col-12">
                <label for="desc_text">Description Text</label>
                <textarea class="width-des" name="desc_text" id="" cols="30" rows="3">{{$data->description}}</textarea>
            </div>
            <div class="col-12 text-center pt-3">
                <button class="btn btn-outline-secondary px-5">SAVE</button>
            </div>
            @endif
        </div>
    </form>
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>