@include('admin.header')

<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                You can add new categories here.
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
        <div class="col-8">
            <form action="{{url('add_category_confirm')}}" method="post">
                @csrf
                <div class="row align-items-center">
                    <div class="col-6">
                        <label for="category_name">Category Name*</label>
                        <input type="text" name="category_name" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col-3 align-self-end text-end">
                        <button class="btn btn-secondary p-button">SAVE</button>
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