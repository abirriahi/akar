@extends('admin.layouts.layout')


@section('content')


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                لوحة تحكم الموقع الرئيسية
                <small>الاصدار  2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/adminpanle')}}"><i class="fa fa-dashboard"></i> الرئيسةس </a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> عدد الرسائل في الموقع </span>
                            <span class="info-box-number"> {{ $contactUsCount}}</span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-building"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">عدد العقارات المفعلة</span>
                            <span class="info-box-number"> {{ $buCountactive  }}</span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-building-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> العقارات الغير مفعلة </span>
                            <span class="info-box-number"> {{ $buWating}}</span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> عدد اعضاء الموقع </span>
                            <span class="info-box-number">  {{ $usersCount}} </span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                العقارات خلال السنه الحاليه

                            </h3>
                            <div class="box-tools pull-left">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <div class="btn-group">
                                    <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <strong>

                                             رسم بياني يوضح اضافة العقارات خلال السنه
                                        </strong>
                                    </p>
                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" style="height: 180px;"></canvas>
                                    </div><!-- /.chart-responsive -->
                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- ./box-body -->

                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                    <!-- MAP & BOX PANE -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                اماكن العقارات
                            </h3>
                            <div class="box-tools pull-left">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="row">
                                <div class="col-md-9 col-sm-8">
                                    <div class="pad">
                                        <!-- Map will be created here -->
                                        <div id="world-map-markers" style="height: 325px;"></div>
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-md-3 col-sm-4">
                                    <div class="pad box-pane-right bg-green" style="min-height: 280px">
                                        <div class="description-block margin-bottom">

                                            <h5 class="description-header">{{$buCountactive}}</h5>
                                            <span class="description-text"> العقارات
                                                <br>
                                                المفعلة </span>
                                        </div><!-- /.description-block -->
                                        <div class="description-block margin-bottom">

                                            <h5 class="description-header">{{ $buWating }}</h5>
                                            <span class="description-text">العقارات
                                            <br>
                                                الغير مفعلة
                                            </span>
                                        </div><!-- /.description-block -->
                                        <div class="description-block">

                                            <h5 class="description-header">{{ $buCountactive + $buWating }}</h5>
                                            <span class="description-text">
                                                كل
                                                <br>

العقارات
</span>
                                        </div><!-- /.description-block -->
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    <div class="row">


                        {{-- orderthis ---}}

                        <div class="col-md-6">
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title"> اخر رسائل الموقع </h3>
                                    <div class="box-tools pull-left">
                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-margin">
                                            <thead>
                                            <tr>
                                                <th> الاي دي</th>
                                                <th>اسم المرسل</th>
                                                <th>اميل المرسل</th>
                                                <th>المشاهدة</th>
                                                <th>نوع الرسالة</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($lastesContactus  as $contactus)
                                            <tr>
                                                <td><a href="{{ url('/adminpanel/contact/'.$contactus->id.'/edit') }}">{{$contactus->id }}</a></td>
                                                <td><a href="{{ url('/adminpanel/contact/'.$contactus->id.'/edit') }}">{{$contactus->contact_name }} </a></td>
                                                <td><span class="label label-success">{{$contactus->contact_email}}</span></td>
                                                <td>{!! $contactus->view == 0 ? ' <i class="fa fa-eye btn btn-danger"></i> ' : '<i class="fa fa-eye btn btn-warning"></i>' !!}</td>
                                                <td>{{contact()[$contactus->contact_type]}}</td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div><!-- /.table-responsive -->
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <a href="{{ url('/adminpanel/contact') }}" class="btn btn-sm btn-info btn-flat pull-left"> كل الرسائل </a>
                                    <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                                </div><!-- /.box-footer -->
                            </div><!-- /.box -->
                        </div>

                        <div class="col-md-6">
                            <!-- USERS LIST -->
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        اخر الاعضاء المسجلين
                                    </h3>
                                    <div class="box-tools pull-left">
                                        <span class="label label-danger"> ٨ اعضاء </span>
                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <ul class="users-list clearfix">

                                        @foreach($lastesUsers as $user)
                                        <li>
                                            <img src="/admin/dist/img/user1-128x128.jpg" alt="{{ $user->name }}" title="{{ $user->name }}">
                                            <a class="users-list-name" href="{{ url('/adminpanel/users/'.$user->id.'/edit')}}">{{ $user->name }}</a>
                                            <span class="users-list-date">{{ $user->created_at }}</span>
                                        </li>
                                            @endforeach

                                    </ul><!-- /.users-list -->
                                </div><!-- /.box-body -->
                                <div class="box-footer text-center">
                                    <a href="{{ url('/adminpanel/users')}}" class="uppercase">كل الاعضاء</a>
                                </div><!-- /.box-footer -->
                            </div><!--/.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->


                </div><!-- /.col -->

                <div class="col-md-4">

                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> اخر العقارات المضافة </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">

                                @foreach($lastesBu as $bu)
                                <li class="item">
                                    <div class="product-img">
                                        <img src="{{ checkIfImageIsexist($bu->image ,  '/public/website/thumb/' ,  '/website/thumb/') }}" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ url('/adminpanel/bu/'.$bu->id.'/edit') }}" class="product-title"> {{ $bu->bu_name }}  <span class="label label-warning pull-right"> {{ $bu->bu_price }} </span></a>
                        <span class="product-description">
                         {{ $bu->bu_small_dis }}
                        </span>
                                    </div>
                                </li><!-- /.item -->
                                @endforeach
                            </ul>
                        </div><!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="{{ url('/adminpanel/bu/')}} " class="uppercase">كل العقارات</a>
                        </div><!-- /.box-footer -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->


        </section><!-- /.content -->


@endsection


@section('footer')

    <script>

        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //-----------------------
        //- MONTHLY SALES CHART -
        //-----------------------

        // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var salesChart = new Chart(salesChartCanvas);

        var salesChartData = {
            labels: [
                    "يناير",
                    "فبراير",
                "مارس",
                "أبريل",
                "مايو",
                "يونيو",
                "يوليو",
                "أغسطس",
                "سبتمبر",
                "أكتوبر",
                "نوفمبر",
                "ديسمبر",


            ],
            datasets: [

                {
                    label: "Digital Goods",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [
                        @foreach($new as $c)
                        @if(is_array($c))
                        {{ $c['counting'] }},
                        @else
                        {{ $c }},
                        @endif

                    @endforeach
                ]
                }
            ]
        };

        /* jVector Maps
         * ------------
         * Create a world map with markers
         */
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: 'rgba(210, 214, 222, 1)',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 0.7,
                    cursor: 'pointer'
                },
                selected: {
                    fill: 'yellow'
                },
                selectedHover: {
                }
            },
            markerStyle: {
                initial: {
                    fill: '#00a65a',
                    stroke: '#111'
                }
            },
            markers: [
                    @foreach($mapping as $map)
                        {latLng: [{{ $map->bu_latitude }}, {{ $map->bu_langtuide }}], name: '{{ $map->bu_name }}'},
                    @endforeach
            ]
        });
    </script>
@endsection