<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('back/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ucfirst(auth()->user()->name)}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <hr>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">التحكم في الموقع</li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>الإعدادات</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/admin/mainsettings')}}"><i class="fa fa-circle-o"></i> إعدادات عامة</a></li>
            <li><a href="{{url('/admin/mainsettings/slider')}}"><i class="fa fa-circle-o"></i> إعدادات الشرائح الرئيسية</a></li>
          </ul>
        </li>
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i> <span>الأقسام</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> كل الأقسام</a></li>
            <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i>إضافة قسم</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i> <span>المقالات</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('posts.index')}}"><i class="fa fa-circle-o"></i> كل المقالات</a></li>
            <li><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i>إضافة مقال</a></li>
          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>المستخدمين</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> كل المستخدمين</a></li>
            <li><a href="{{route('users.create')}}"><i class="fa fa-circle-o"></i>إضافة مستخدم</a></li>
          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments-o"></i> <span>التعليقات</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/admin/comments')}}"><i class="fa fa-circle-o"></i> كل التعليقات</a></li>
          </ul>
        </li>







     </ul>
    </section>
    <!-- /.sidebar -->
  </aside>