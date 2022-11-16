@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-11 offset-1 content">
    <div class="row ">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                About Settings.
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <table class="table table-striped table-hover tbl">
                <thead>
                    <tr class="headText">
                        <th colspan="4">About Me Section (Home)</th>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->title}}</td>
                        <td width="650">{{$subAbout}} ...</td>
                        <td>
                            <img src="db_img/about/{{$data->img_url}}" class="about-img">
                        </td>
                        <td>
                            <a href="{{url('edit_aboutHome')}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12">
            <table class="table table-striped table-hover tbl">
                <thead>
                    <tr class="headText">
                        <th colspan="5">Meet Me Section</th>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Sign</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->meet_title}}</td>
                        <td width="600">{{$subMeet}} ...</td>
                        <td>{{$data->sign}}</td>
                        <td width="150">
                            <a href="{{url('edit_aboutMeet')}}" style="cursor:pointer">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <table class="table table-striped table-hover tbl">
                <thead>
                    <tr class="headText">
                        <th colspan="7">About Me Section Details</th>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Subtitle</th>
                        <th>Subtext</th>
                        <th>Background<br>Image</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->detail_title}}</td>
                        <td width="350">{{$subDetail}} ...</td>
                        <td>{{$data->detail_subtitle}}</td>
                        <td width="350">{{$subText}} ...</td>
                        <td>
                            <img src="db_img/about/{{$data->detail_img}}" class="aDetail-img">
                        </td>
                        <td>
                            <img src="db_img/about/{{$data->dt_about_img}}" class="aDetail-img">
                        </td>
                        <td>
                            <a href="{{url('edit_aboutDetails')}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- CONTENT FINISH -->
</div>
</section>

</div>
</body>
</html>