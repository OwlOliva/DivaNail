@extends('layouts.admin_layout')

@section('title','Все статьи')

@section('content')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Все статьи</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>/.col -->
        </div><!-- /.row -->
        @if(session('success'))
        <div class="alert alert-success" role="alert">
          <button type="button" data-dismiss="alert" aria-hidden="true" class="close">x</button>
          <h4><i class="icons fa fa-check"></i>{{session('success')}}</h4>
        
        </div>
        @endif
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects" >
                    <thead>
                     <tr> <th style="width: 5%"> ID  </th>
                          <th style="width: 20%"> Путь к фото </th>
                          <th style="width: 30%"> фото </th>
                          <th style="width: 40%">  </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($works as $work)
                     <tr> <td> {{ $work['id']}} </td>
                        <td> {{ $work['img']}} </td>
                        <td class="img1"> <img src="{{ $work['img']}}" alt=""> </td>
                          <td class="project-actions text-right">
                             <a class="btn btn-info btn-sm" href="{{ route('works.edit',$work['id']) }}">
                                 <i class="fas fa-pencil-alt">
                                 </i>
                                Редактировать
                              </a>

                           

                             <form action="{{ route('works.destroy',$work['id']) }}" method="POST"    style="display: inline-block">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash">    </i>
                                            Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach



                            
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>

@endsection