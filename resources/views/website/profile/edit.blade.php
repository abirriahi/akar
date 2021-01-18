@extends('layouts.app')

@section('title')

تعديل معلومات الشخصية للعضو

    {{ $user->name }}

@endsection

@section('header')
    {!! Html::style('cus/buall.css') !!}

@endsection


@section('content')

    <div class="container">
        <div class="row profile">


            <div class="col-md-9">

                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}"> الرئيسية </a></li>
                    <li class="active"><a href="">                     تعديل معلومات الشخصية للعضو

                            {{ $user->name }} </a></li>


                </ol>

                <div class="profile-content">
                    <h2>
                        تعديل الاميل واسم المستخدم
                    </h2>
                    <hr>
                    {!! Form::model($user , ['route' => ['user.editSetting' , $user->id] , 'method' => 'PATCH']) !!}
                        @include('admin.user.form' , ['showforuser' => 1])
                    {!! Form::close() !!}


                    <hr>

                    {{-- checnge passsword  --}}


                    <h2>
تعديل كلمة المرور
                    </h2>
                    <hr>


                    {!! Form::open( ['url' => '/user/changePassword' , 'method' => 'post']) !!}



                    <div class="text2{{ $errors->has('password') ? ' has-error' : '' }}">


                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="ادخل كلمة المرور القديمة " >
                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                             </span>
                            @endif
                        </div>
<div class="clearfix"></div>
<br>


                        <div class="col-md-12">
                            <input type="password" class="form-control" name="newpassword" placeholder=" ادخل كلمة المرور الجديدة " >
                            @if ($errors->has('newpassword'))
                                <span class="help-block">
                                <strong>{{ $errors->first('newpassword') }}</strong>
                             </span>
                            @endif
                        </div>


                        <div class="clearfix"></div>
                        <br>








                        <div class="col-md-12">
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-btn fa-user" style="color:#ffffff"></i>
                                تغير كلمة المرو
                            </button>
                        </div>



                    </div>





                    {!! Form::close() !!}


                </div>
            </div>

            @include('website.bu.pages')

        </div>
    </div>
    <br>
    <br>

@endsection
