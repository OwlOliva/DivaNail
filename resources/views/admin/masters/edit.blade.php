@extends('layouts.admin_layout')

@section('title','редактировать категорию')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">радактировать категорию {{ $master['name'] }}</h1>
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
                    <form action="{{ route('masters.update',$master['id']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input type="text" name="name" class="form-control" value="{{ $master['name'] }}" id="exampleInputCategorie" placeholder="Введите название категории" required>
                          </div>
                          <div class="form-group">
                            <label for="img">Фотография мастера</label><br>
                            <img src="/{{ $master['photo'] }}" alt="картинка" srcset style="width:30%;">
                            <input type="file" name="imgRed"  class="form-control" require>
                            <input type="hidden" name="imgHidden" value="{{ $master['photo'] }}" >
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