@include('admin.header')
<!-- CONTENT DIVISION -->
<div class="col-1"></div>
<div class="col-11 content">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                Navbar Settings.
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>TITLE</th>
                <!-- <th>LINK</th> -->
                <th>EDIT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>LOGO</td>
                <!-- <td>{{$data->link_1}}</td> -->
                <td>
                    <a href="{{url('/edit_nav')}}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title_1}}</td>
                <!-- <td>{{$data->link_1}}</td> -->
                <td>
                    <a href="{{url('/edit_nav')}}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title_2}}</td>
                <!-- <td>{{$data->link_2}}</td> -->
                <td>
                    <a href="{{url('/edit_nav')}}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title_3}}</td>
                <!-- <td>{{$data->link_3}}</td> -->
                <td>
                    <a href="{{url('/edit_nav')}}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title_4}}</td>
                <!-- <td>{{$data->link_4}}</td> -->
                <td>
                    <a href="{{url('/edit_nav')}}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- CONTENT FINISH -->

</div>
</section>

</div>
</body>
</html>