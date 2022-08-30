@extends('layouts.admin_layout')

@section('title','Добавить категорию')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить категорию</h1>
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
                    <form action="{{ route('freeplace.store') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')  
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                            <label for="mast">Мастер</label>
                            <select name="mast" id="">
                            @foreach($masters as $master)
                           
                            <option value="{{ $master->id}}" >{{ $master->name}}</option>
                           
                            @endforeach
                            </select>
                           
                          </div>
                          
                        </div>
                          <div class="form-group">
                            <label for="time">время</label>
                            <input type="datetime" name="time" id="time">
                            
                          </div>
                          
                        </div>
                         

                         
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </section>
@endsection