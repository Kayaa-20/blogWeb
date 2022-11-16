@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                About Settings.
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
            <form action="{{url('/edit_aMeet_confirm')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-12 pt-4">
                        <div class="alert alert-secondary" role="alert">
                            Meet Me
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="meet_title">Meet Me Title*</label>
                        <input type="text" name="meet_title" class="form-control" value="{{$info->meet_title}}" autocomplete="off" required>
                    </div>
                    <div class="col-12">
                        <label for="meet_text">Meet Me Text*</label>
                        <textarea class="width-des" name="meet_text" id="" cols="30" rows="5" required>{{$info->meet_text}}</textarea class="width-des">
                    </div>
                    <div class="col-12">
                        <label for="sign">Sign(You can write your name)</label>
                        <input type="text" name="sign" class="form-control" value="{{$info->sign}}" autocomplete="off" placeholder="(optional)">
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