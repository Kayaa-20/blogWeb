@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="offset-1 col-11 content">
    <div class="row">
        <div class="col-12 alert alert-secondary" role="alert">
            <div class="row align-items-center">
                <div class="col-10">
                    Slider Settings.
                </div>
                <div class="col-2 text-end">
                    <a href="{{url('add_slider')}}" class="btn btn-outline-success">
                        <i class="fa-solid fa-plus"></i> Add
                    </a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover table-secondary">
        <thead id="tbl-head">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Text</th>
                <th>Link</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody id="tbl-body">
            @foreach($data as $info)
            <tr>
                <td>{{$info->id}}</td>
                <td class="slide-des">
                    <img src="/db_img/slider/{{$info->slider_url}}" class="img-des" alt="none">
                </td>
                <td>{{$info->title}}</td>
                <td>{{$info->text}}</td>
                <td>{{$info->link}}</td>
                <td>
                    <a href="{{url('edit_slider',$info->id)}}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
                <td>
                    <a onclick="return confirm('Are you sure to delete this')" href="{{url('delete_slider',$info->id)}}">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {!!$data->withQueryString()->links('pagination::bootstrap-5')!!}
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>