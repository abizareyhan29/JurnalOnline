<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li style="margin-left:20px;">
          @if(Auth::user()->photo!='')
          <img src="{{url('img/profile/'.Auth::user()->photo)}}" height="50" width="50" style="border-radius:25px;" />
          @else
          <img src="{{url('img/default.png')}}" height="50" width="50" style="border-radius:25px;" />
          @endif
        </li>
        <li><a href="#"> @ {{ Auth::user()->username }}</a></li>
      <!-- <a href="#">Semua Project<span class="sr-only">(current)</span></a></li> -->
        <li><a href="{{ url('usersetting')}}">Edit Akun</a></li>
        <li><a href="{{ route('projects.index') }}">Projects</a></li>
        <!-- <li><a href="#">Todos</a></li> -->
    </ul>
    <ul class="nav nav-sidebar">
        <!-- <li><a href="">Account</a></li>
        <li><a href="">Help</a></li> -->
        <li><a href="{{ route('auth.logout') }}">Sign Out</a></li>
    </ul>
</div>
