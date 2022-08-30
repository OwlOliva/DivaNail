@extends('layouts.admin_layout')

@section('title','редактировать категорию')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">радактировать категорию {{ $freeplace['id'] }}</h1>
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
                    <form action="{{ route('freeplace.update',$freeplace['id']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                        <div class="card-body">
                        <div class="form-group">
                            <label for="mast">Мастер</label>
                            <select name="mast" id="">
                            @foreach($masters as $master)
                            @if( $master->id ==  $freeplace->id_master)
                            <option value="{{ $master->id}}" selected="selected">{{ $master->name}}</option>
                            @else
                            <option value="{{ $master->id}}" >{{ $master->name}}</option>
                            @endif
                            
                            @endforeach
                            </select>
                           
                          </div>
                          
                        </div>
                          <div class="form-group">
                            <label for="time">время</label>
                            <input type="datetime" name="time" id="time" value="{{ $freeplace->time }}">
                            
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