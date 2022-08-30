@extends('layouts.admin_layout')

@section('title','редактировать категорию')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">радактировать категорию {{ $contact['id'] }}</h1>
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
                    <form action="{{ route('contact.update',$contact['id']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="tel" class="form-control" value="{{ $contact['telephone'] }}" id="exampleInputCategorie" placeholder="Введите название категории" required>
                          </div>
                          <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{ $contact['email'] }}" placeholder="Введите электронную почту" required minlength="10" maxlength="50" required>
                          </div>
                          <div class="form-group">
                            <label for="address">Адрес</label>
                            <input type="text" name="address" class="form-control" value="{{ $contact['address'] }} " id="address" placeholder="Введите фдрус" required minlength="10" maxlength="50" required>
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