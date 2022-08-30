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
                    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')  
                    @csrf
                    <div class="card-body">

                    <td> {{ $record['master']}} </td>
                        <td> {{ $record['time']}} </td>
                        <td> {{ $record['name_user']}} </td>
                        <td> {{ $record['tel_user']}} </td>




                          <div class="form-group">
                            <label for="master">Мастер</label>
                            <input type="text" name="master" class="form-control" id="master" placeholder="Введите телефон" required minlength="10" maxlength="50">
                          </div>
                          <div class="form-group">
                            <label for="time">время</label>
                            <input type="datetime" name="time" id="time">
                          </div>
                          
                          <div class="form-group">
                            <label for="name_user">Имя клиента</label>
                            <input type="text" name="name_user" class="form-control" id="name_user" placeholder="Введите фдрус" required minlength="10" maxlength="50">
                          </div>
                         <div class="form-group">
                            <label for="tel_user">Телефон клиента</label>
                            <input type="text" name="tel_user" class="form-control" id="tel_user" placeholder="Введите электронную почту" required minlength="10" maxlength="50">
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