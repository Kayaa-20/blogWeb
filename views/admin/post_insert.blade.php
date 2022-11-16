@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row py-3">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                You can add new posts here.
            </div>
            @if(session()->has('message'))
            <div class="alert-div alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif
        </div>
    </div>
    <div class="row py-3 justify-content-center">
        <div class="col-9">
            <form action="{{url('add_post_confirm')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Category -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Category</p>
                    </div>
                    <div class="col-6">
                        <select name="category_id" id="">
                            @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Title -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Title</p>
                    </div>
                    <div class="col-6">
                        <input name="title" type="text" class="width-des" autocomplete="off">
                    </div>
                </div>

                <!-- Subtitle -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Subtitle</p>
                    </div>
                    <div class="col-6">
                        <input name="subtitle" type="text" class="width-des" autocomplete="off">
                    </div>
                </div>

                <!-- Description -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Post Description</p>
                    </div>
                    <div class="col-6">
                        <input name="description" type="text" class="width-des" autocomplete="off">
                    </div>
                </div>

                <!-- Text -->
                <div class="row py-3">
                    <div class="col-6">
                        <p>Text</p>
                    </div>
                    <div class="col-6">
                        <textarea name="post_text" cols="30" rows="10" py-3 class="width-des"></textarea>
                    </div>
                </div>

                <!-- Background Image -->
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
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>