@extends('layouts.admin_layout')

@section('title','редактировать статью')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">радактировать статью {{ $work['id'] }}</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
        @if(session('success'))
        <div class="alert alert-success" role="alert">
          <button type="button" data-dismiss="alert" aria-hidden="true" class="close"></button>
          <h4><i class="icons fa fa-check"></i>{{session('success')}}</h4>
        
        </div>@endif
      </div><!-- /.container-fluid -->
    </div>

    <section class="conteiner">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <form action="{{ route('works.update',$work['id']) }}" method="POST" enctype="multipart/form-data">
                     @method('PUT')
                     @csrf
                    
                        <div class="card-body">
                          
                          <div class="form-group">
                            <label for="img">Изображение статьи</label><br>
                            <img src="/{{ $work['img'] }}" alt="картинка" srcset style="widthn:30%;">
                            <input type="file" name="imgRed"  class="form-control" require>
                            <input type="hidden" name="imgHidden" value="{{ $work['img'] }}" >
                          </div>
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </section>
    @endsection