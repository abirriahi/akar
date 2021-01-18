<li ><a href="{{ url('/adminpanel') }}"><i class="fa fa-home"></i> <span>
            رئيسية التحكم
        </span> </a></li>
<li ><a href="{{ url('/adminpanel/sitesetting') }}"><i class="fa fa-gears"></i>
    <span>
        اعددات رئيسية
    </span>
    </a></li>

{{-- users --}}

<li class="treeview">
  <a href="#">
    <i class="fa fa-users "></i>

    <span> التحكم في الاعضاء </span>

    <i class="fa fa-angle-right pull-left"></i>

  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{ url('/adminpanel/users/create') }}"><i class="fa fa-circle-o"></i>  اضف عضو </a></li>
    <li><a href="{{ url('/adminpanel/users') }}"><i class="fa fa-circle-o"></i> كل الاعضاء </a></li>
  </ul>
</li>



{{-- Bu --}}

<li class="treeview">
    <a href="#">
        <i class="fa fa-building"></i>

        <span> التحكم في العقارات </span>

        <i class="fa fa-angle-right pull-left"></i>

    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{ url('/adminpanel/bu/create') }}"><i class="fa fa-circle-o"></i> اضف عقار  </a></li>
        <li><a href="{{ url('/adminpanel/bu') }}"><i class="fa fa-circle-o"></i> كل العقاراتء </a></li>
    </ul>
</li>




{{-- contact --}}

<li><a href="{{ url('/adminpanel/contact') }}"><i class="fa fa-envelope-o"></i>
    <span>
        الرسائل
    </span>
    </a></li>

{{-- contact --}}

<li><a href="{{ url('/adminpanel/buYear/statics') }}"><i class="fa fa-bar-chart"></i>
    <span>
        احصائيات اضافة العقار
    </span>
    </a></li>





