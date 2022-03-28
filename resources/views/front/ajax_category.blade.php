@foreach($categoryAddvertisement as $row)


<table class="table">
    <tr class="mt-5">
        <th>
            @if(!empty($row['main_image']))
            <img class="img" src="{{asset('images/'.$row['main_image'])}}" height="180px"
                width="180px">
            @else
            <img class="img" src="{{asset('images/blanck.png')}}" height="180px" width="180px">
            @endif
        </th>
        <td>
            <div>
                <p>{{$row['title']}}</p>
                <p>{{$row['id']}}</p>

                <p>{{$row['cat_id']}}</p>
            </div>
            <div style="margin-left: 80%;">${{$row['price']}}</div>
            <div><i class="fas fa-user fa-fw"></i>Quintion</div>

            <div><i class="fas fa-tachometer-alt fa-fw"></i><span style="color:red;">
                    <h5>{{$row['title']}}</h5>
                    <h4> {{$gs->website_currency}}.{{$row['price']}}</h4>

                </span>
            </div>
            <form method="post" action="{{route('front.watch')}}"> @csrf<button type="submit"
                    style="margin: 0;">
                    <div> <input type="hidden" name="ads_id" value="{{$row['id']}}"><i
                            class="icon-star "></i>Watch this
                    </div>
                </button></form>

        </td>
        <td>
            <p>
                <a href="{{route('front.categories.cateory.details',$row['id'])}}"><button
                        type="button"
                        style="background-color:rgb(41, 156, 30);margin-top:100%;margin-left: 30%;">
                        view</button></a>
            </p>

        </td>
    </tr>
</table>

@endforeach