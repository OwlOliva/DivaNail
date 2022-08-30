@extends('layouts.admin_layout')

@section('title','Добавить статью')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Статья {{ $post['id'] }}</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
        @if(session('success'))
        <div class="alert alert-success" role="alert">
          <button type="button" data-dismiss="alert" aria-hidden="true" class="close"></button>
          <h4><i class="icons fa fa-check"></i>{{session('success')}}</h4>
        
        </div>@endif
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container-fluid">
    <h1>{{ $post['title'] }}</h1>
<img width="500px" src="/{{ $post['img'] }}" alt="">
@foreach($categories as $categori)
                        @if( $categori['id']==$post['cat_id'])
                        <h4> <b>Категория :</b> {{ $categori['title'] }} </h4>
                          @endif
                          @endforeach
        <p>
          {{ $post['text'] }}
        <p>

      <div>
        <span>Дата создания: {{$post['created_at']}}</span><br>
        <span>Дата изменения:  {{$post['updated_at']}}</span>
      </div>

</div>
</section>
@endsection