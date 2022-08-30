@extends('layouts.layout')
@section('title','Мастера')

@section('content')

<div class="container">

<div class="row">
    <div class="col-lg-6  text-center">
        <h2 class="mt-4" style="color:white;">Выберите удобнный день для записи</h2>
        <div class="light mt-5">

    <div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">январь</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>ПН</div>
                <div>ВТ</div>
                <div>СР</div>
                <div>ЧТ</div>
                <div>ПТ</div>
                <div>СБ</div>
                <div>ВС</div>
            </div>
            <div class="calendar-days"></div>
        </div>
        
        <div class="month-list"></div>
    </div>
</div>



    </div>

    <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
        <!-- display: flex;
    flex-direction: column;
    /* align-items: stretch; */
    justify-content: center; -->
        
<form action="{{route('recorde')}}" method="POST">
@method('GET')
@csrf
<input type="hidden" name="serviceId" value="{{ $serv}}">
<input type="hidden" name="masterId" value="{{ $mast}}" id="master">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />

   
<div id="servi">

</div>
      
    

<input type="submit" value="Записаться">
</form>
    </div>
</div>


</div>




{{$freeplace}}
    <script src="../js/app.js"></script>
    @section('custom_js')
    <script>
//         $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

        $(document).ready(function(){
            $('.inp').on('click',function(){
               
                let valueDay = $(this).data('record');
                
                let mast = $('#master').attr("value");
                $('#servi').html('');
                console.log(mast)

                $.ajax({
                    url: "{{route('recod')}}",
                    type: "POST",
                    dataType: 'JSON',
                    data: { valueDay: valueDay,master:mast  },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:(data)=>{
                        // $('#servi').html('Yf ds,hfyysq ltym ytn cdj');
                        console.log(data);
                        if(data.length == 0){
                            $('#servi').html('<p class="h3">На выбранный день нет свободного времени</p>');
                        }
                     else
                     {
                         $.each(data, (function(key, value){
                            // $.each(value, (function(key, value){
                                
                                
                                    $('#servi').append(`<input type="radio" name="timeId" id="timeId${value.id}" value="${value.id}"><label for="timeId${value.id}" style="color:white;">  ${value.time} </label><br> `);
                               
                                
                                
                            // console.log(value.time);
                           
                        // })) 
                            
                           
                        // })) 
                        }));
                     }
                         
                         // $('#servi').append(key + " " + value); // используем указанный контекст
                    }
                    

                     });
                    })
                   
                })
    </script>
    @endsection










@endsection
