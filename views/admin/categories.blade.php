@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12 alert alert-secondary" role="alert">
            <div class="row align-items-center">
                <div class="col-10">
                    Categories Listing...
                </div>
                <div class="col-2 text-end">
                    <a href="{{url('add_category')}}" class="btn btn-outline-success">
                        <i class="fa-solid fa-plus"></i> Add
                    </a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th colspan='2'></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $info)
            <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->category_name}}</td>
                <td width="200">
                    <a href="{{url('edit_category',$info->id)}}" class="me-4">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <a onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_category',$info->id)}}">
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