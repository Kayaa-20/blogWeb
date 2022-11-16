@include('admin.header')

<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                You can edit categories here.
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
        @if($info)
        <div class="col-8">
            <form action="{{url('edit_category_confirm',$info->id)}}" method="post">
                @csrf
                <div class="row align-items-center">
                    <div class="col-6">
                        <label for="category_name">Category Name*</label>
                        <input type="text" name="category_name" class="form-control" value="{{$info->category_name}}" autocomplete="off" required>
                    </div>
                    <div class="col-3 align-self-end text-end">
                        <button class="btn btn-secondary px-5">SAVE</button>
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