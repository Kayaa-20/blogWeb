@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                You can edit 'contact' section.
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
    <form action="{{url('edit_contactImg_confirm')}}" method="post" enctype="multipart/form-data">
        <div class="row align-items-center">
            @csrf
            <!-- BG IMAGE -->
            <div class="col-6 pt-3">
                <label for=""><ins>Current Image:</ins></label><br>
                <img class="c-img pt-2" src="/db_img/contact/{{$data->bg_img}}" alt="#">
            </div>
            <div class="col-6 pt-3">
                <label for="bg_img">Choose Background Image</label><br>
                <input type="file" name="bg_img" id="" accept=".png, .jpg, .jpeg">
                <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
            </div>

            <!-- INS 1 -->
            <div class="col-6 pt-3">
                <label for=""><ins>Current Image:</ins></label><br>
                <img class="c-img pt-2" src="/db_img/contact/{{$data->ins_img1}}" alt="#">
            </div>
            <div class="col-6 pt-3">
                <label for="ins_img1">Choose Image</label><br>
                <input type="file" name="ins_img1" id="" accept=".png, .jpg, .jpeg">
                <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
            </div>

            <!-- INSTAGRAM 2 -->
            <div class="col-6 pt-3">
                <label for=""><ins>Current Image:</ins></label><br>
                <img class="c-img pt-2" src="/db_img/contact/{{$data->ins_img2}}" alt="#">
            </div>
            <div class="col-6 pt-3">
                <label for="ins_img2">Choose Image</label><br>
                <input type="file" name="ins_img2" id="" accept=".png, .jpg, .jpeg">
                <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
            </div>

            <!-- INS 3 -->
            <div class="col-6 pt-3">
                <label for=""><ins>Current Image:</ins></label><br>
                <img class="c-img pt-2" src="/db_img/contact/{{$data->ins_img3}}" alt="#">
            </div>
            <div class="col-6 pt-3">
                <label for="ins_img3">Choose Image</label><br>
                <input type="file" name="ins_img3" id="" accept=".png, .jpg, .jpeg">
                <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
            </div>

            <!-- INS 4 -->
            <div class="col-6 pt-3">
                <label for=""><ins>Current Image:</ins></label><br>
                <img class="c-img pt-2" src="/db_img/contact/{{$data->ins_img4}}" alt="#">
            </div>
            <div class="col-6 pt-3">
                <label for="ins_img4">Choose Image</label><br>
                <input type="file" name="ins_img4" id="" accept=".png, .jpg, .jpeg">
                <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
            </div>

            <!-- INST 5 -->
            <div class="col-6 pt-3">
                <label for=" class=" c-img pt-2""><ins>Current Image:</ins></label><br>
                <img class="c-img pt-2" src="/db_img/contact/{{$data->ins_img5}}" alt="#">
            </div>
            <div class="col-6 pt-3">
                <label for="ins_img5">Choose Image</label><br>
                <input type="file" name="ins_img5" id="" accept=".png, .jpg, .jpeg">
                <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
            </div>

            <!-- INS 6 -->
            <div class="col-6 pt-3">
                <label for=""><ins>Current Image:</ins></label><br>
                <img class="c-img pt-2" src="/db_img/contact/{{$data->ins_img6}}" alt="#">
            </div>
            <div class="col-6 pt-3">
                <label for="ins_img6">Choose Image</label><br>
                <input type="file" name="ins_img6" id="" accept=".png, .jpg, .jpeg">
                <label style="font-size:10px; color:grey;">Only .png, .jpg, .jpeg files acceptable</label>
            </div>

            <div class="col-12 text-center pt-4 pb-3">
                <button class="btn btn-outline-secondary p-button">SAVE</button>
            </div>
        </div>
    </form>
    @endif
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>