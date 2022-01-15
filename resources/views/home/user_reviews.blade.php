
    <div class="table-responsive pt-12">
        <table class="table table-bordered ">
            <thead>
            <tr>
                <th>id</th>
                <th>Place</th>
                <th>Subject</th>
                <th>Reviews</th>
                <th>Rate</th>
                <th>Status</th>
                <th>Delete</th></tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)
                <tr class="table-info">
                    <td>{{$rs->id}}</td>
                    <td><a href="{{route('place',['id'=>$rs->place->id])}}" target="_blank">{{$rs->place->title}}</a></td>
                    <td>{{$rs->subject}}</td>
                    <td>{{$rs->review}}</td>
                    <td>{{$rs->rate}}</td>
                    <td>{{$rs->status}}</td>
                    <td>{{$rs->created_at}}</td>
                    <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"> <img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png"></a> </td>
                </tr>
            @endforeach
            @include('home.message')
            </tbody>
        </table>
    </div>






