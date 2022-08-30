@extends('layouts.admin_layout')

@section('title','Все категории')

@section('content')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Все категории</h1>
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
                <table class="table table-striped projects">
                    <thead>
                     <tr> <th style="width: 5%"> ID  </th>
                          <th> мастер  </th>
                          <th > время  </th>
                          <th > клиент  </th>
                          <th > телефон  </th>
                          <th style="width: 30%">  </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($recording as $record)
                     <tr> <td> {{ $record['id']}} </td>
                        <td> {{ $record['id_master']}} </td>
                        <td> {{ $record['time']}} </td>
                        <td> {{ $record['name_user']}} </td>
                        <td> {{ $record['tel_user']}} </td>
                        <td>
                             <a class="btn btn-info btn-sm" href="{{ route('recording.edit',$record['id'])}}">
                                 <i class="fas fa-pencil-alt">
                                 </i>
                                Редактировать
                              </a>
                             <form action="{{ route('recording.destroy',$record['id'])}}" method="POST"    style="display: inline-block">
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