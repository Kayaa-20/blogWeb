@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                Contact Settings
            </div>
        </div>
    </div>
    <div class="row"> @foreach($data as $data)
        <div class="col">

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th colspan='7'>Contact Information</th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Facebook<br>Link</th>
                        <th>Instagram<br>Link</th>
                        <th>Tweeter<br>Link</th>
                        <th>Admin<br>Mail</th>
                        <th>Description<br>Text</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->fb_link}}</td>
                        <td>{{$data->ins_link}}</td>
                        <td>{{$data->tweet_link}}</td>
                        <td>{{$data->admin_mail}}</td>
                        <td>{{$data->description}}</td>
                        <td>
                            <a href="{{url('edit_contactInfo',$data->id)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th colspan='8'>IMAGES</th>
                    </tr>
                    <tr>
                        <th>Background Image</th>
                        <th colspan='7'>Instagram Images</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="/db_img/contact/{{$data->bg_img}}" alt="" class="img-des">
                        </td>
                        <td>
                            <img src="/db_img/contact/{{$data->ins_img1}}" alt="" class="img-des">
                        </td>
                        <td>
                            <img src="/db_img/contact/{{$data->ins_img2}}" alt="" class="img-des">
                        </td>
                        <td>
                            <img src="/db_img/contact/{{$data->ins_img3}}" alt="" class="img-des">
                        </td>
                        <td>
                            <img src="/db_img/contact/{{$data->ins_img4}}" alt="" class="img-des">
                        </td>
                        <td>
                            <img src="/db_img/contact/{{$data->ins_img5}}" alt="" class="img-des">
                        </td>
                        <td>
                            <img src="/db_img/contact/{{$data->ins_img6}}" alt="" class="img-des">
                        </td>
                        <td>
                            <a href="{{url('edit_contactImg',$data->id)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
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