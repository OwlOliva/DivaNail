@extends('layouts.layout')

@section('title','О нас')

@section('content')


<h1>Авторизция</h1>
<hr>
    @if($errors->any())
        <div class="row justify-content-center">
            <div class="col-md-8 alert alert-danger">
                <ul>
                    @foreach($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif



        <div class="row justify-content-center ">
            <div class="col-md-10">
                <form action="{{ route('login_admin') }}" method="post" class="foot">
                @csrf
                    <div class="col-md-6 login">
                        <label for="login" class="col-md-4 col-form-label text-md-end">Login</label>
                        <div class="col-mb-6">
                            <input type="text" id="login" name='login' class="form-control" require pattern="^[A-Za-z0-9\-]+">
                        </div>
                    </div>
                    <div class="col-md-6 login">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
                        <div class="col-md-6">
                            <input type="password" id="password" name='password' class="form-control" require pattern="^[A-Za-z0-9\-]+">
                        </div>
                    </div>

                    <div class="row b-0">
                        <div class="col-md-8">
                            <button type='submit'  name="btnLogin">Войти</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        
@endsection