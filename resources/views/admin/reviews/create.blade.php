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
                    <form action="{{ route('stock.store') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')  
                    @csrf
                    <div class="card-body">
                          <div class="form-group">
                            <label for="tel">Заголовок</label>
                            <input type="text" name="title" class="form-control" id="tel" placeholder="Введите телефон" required minlength="10" maxlength="50">
                          </div>
                          <div class="form-group">
                            <label for="email">Размер скидки</label>
                            <input type="number" name="discount" class="form-control" id="email" placeholder="Введите электронную почту" required minlength="10" maxlength="50">
                          </div>
                          <div class="form-group">
                            <label for="address">Описание</label>
                            <input type="text" name="descr" class="form-control" id="address" placeholder="Введите фдрус" required minlength="10" maxlength="50">
                          </div>
                          <div class="form-group">
                            <label for="img">Изображение </label>
                            <input type="file" name="img"  class="form-control" require>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="data_st">Дата начала акции </label>
                            <input type="date" name="data_st" id="data_st" require>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="data_end">Дата окончания акции </label>
                            <input type="date" name="data_end" id="data_end" require>
                            
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