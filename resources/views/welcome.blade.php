@extends('layouts.app')

@section('title')
  
@endsection



@section('header')
 {!! Html::style('cus/buall.css') !!}
<style>
    .banner{
        background: url("{{ checkIfImageIsexist(getSetting('main_slider')  , '/public/website/slider/' , '/website/slider/') }}") no-repeat center;
        min-height: 500px;
        width: 100%;
        -webkit-background-size: 100%;
        -moz-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-bottom: 100px;
    }
  body{
    background: #F1F3FA;
  }
</style>


@endsection


@section('content')


<div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1 >
          اهلا بك في
          {{ getSetting() }}

      </h1>
      <p>

          {!! Form::open(['url' => 'search' , 'method' => 'get'])  !!}
          <div class="row">
            <div class="col-lg-3">
                {!! Form::text("bu_price_from" , null , ['class' => 'form-control' , 'placeholder' => ' سعر العقار من  ']) !!}
            </div>
            <div class="col-lg-3">
                {!! Form::text("bu_price_to" , null , ['class' => 'form-control' , 'placeholder' => ' سعر العقار الي  ']) !!}
            </div>

            <div class="col-lg-3">
                {!! Form::select("rooms" , roomnumber() ,null , ['class' => 'form-control select2' , 'placeholder' => ' عدد الغرف  ']) !!}
            </div>
            <div class="col-lg-3">
                {!! Form::select("bu_type" , bu_type() ,null , ['class' => 'form-control' , 'placeholder' => ' نوع العقار ']) !!}
            </div>
        </div>
<br>
        <div class="row">
            <div class="col-lg-3">
                {!! Form::submit(" ابحث " , ['class' =>' btn  ' ,'style' => 'width:100%']) !!}
            </div>
            <div class="col-lg-3">
                {!! Form::select("bu_plcae",bu_place() , null, ['class' => 'form-control ', ]) !!}

            </div>
            <div class="col-lg-3">
                {!! Form::select("bu_rent" , bu_rent() ,null , ['class' => 'form-control' , 'placeholder' => ' نوع العملية ']) !!}
            </div>
            <div class="col-lg-3">
                {!! Form::text("bu_square" ,null , ['class' => 'form-control' , 'placeholder' => ' المساحة ']) !!}
            </div>

        </div>












            {!! Form::close() !!}





      </p>
      <a class="banner_btn" href=" {{ url('/user/create/bullding') }}">  {{ trans('home.ajouter') }}
 </a> </div>
  </div>
</div>


  <br>
  <div class="container">
    <div class="row profile">
      
   
    <div class="col-lg-9">
      <div class="profile-content">
            @include('website.bu.sharefile')
      </div>
  
    </div>
      @include('website.bu.pages')
       </div>
    
    <div class="clearfix"> 
      
    </div>
      
  </div>
@endsection


@section('footer')

@endsection
