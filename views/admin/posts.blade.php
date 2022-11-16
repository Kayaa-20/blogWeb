@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12 alert alert-secondary" role="alert">
            <div class="row align-items-center">
                <div class="col-10">
                    Posts Listing...
                </div>
                <div class="col-2 text-end">
                    <a href="{{url('add_post')}}" class="btn btn-outline-success">
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
                <th>Title</th>
                <th>Text</th>
                <th>Background<br>Image</th>
                <th>First Image</th>
                <th colspan='3'></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $info)
            <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->post_title}}</td>
                <?php
                $post_text = $info->post_text;
                $subText = substr($post_text, 0, 100);
                ?>
                <td width="450">{{$subText}} ...</td>
                <td>
                    <img src="/db_img/posts/{{$info->bg_img}}" alt="#" class="img-des">
                </td>
                <td>
                    <img src="/db_img/posts/{{$info->first_img}}" alt="#" class="img-des">
                </td>
                <td class="i-width">
                    <a href="{{url('edit_post',$info->id)}}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
                <td class="i-width">
                    <a href="{{url('delete_post',$info->id)}}">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
                <td class="i-width">
                    <a href="{{url('detail',$info->id)}}">
                        <i class="fa-solid fa-circle-info"></i>
                        <sub>Detail</sub>
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