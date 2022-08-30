<form action="{{route('recorde')}}" method="POST">
@method('GET')
@csrf
<input type="hidden" name="serviceId" value="{{ $serv}}">
<input type="hidden" name="masterId" value="{{ $mast}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />

    @foreach($freeplace as $frp)

        <input type="radio" name="timeId" id="timeId{{$frp['id']}}" value="{{$frp['id']}}">
        <label for="timeId{{$frp['id']}}" style="color:white;">
        {{$frp->time}}
        </label><br>
    @endforeach

<input type="submit" value="Записаться">
</form>










$mast = $_POST['master'];
        dd($mast);
        // $valueDay = $request->valueDay;
        $valueDay = $_POST['valueDay'];
        $freeplace = Freeplace::all()->where('day', '=', $valueDay)->where('id_master', '=', $mast);
        // $serv = $request->serviceId;
         return  response()->json(array('freeplace' => $freeplace), 200);