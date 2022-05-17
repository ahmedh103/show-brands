<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="#" title="Sleek Dashboard">
      

          <span class="brand-name text-truncate">Admin Dashboard</span>
        </a>
      </div>

      <!-- begin sidebar scrollbar -->
      <div class="" data-simplebar style="height: 100%;">
        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          <li class="has-sub active expand">
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
              aria-expanded="false" aria-controls="dashboard">
              <i class="mdi mdi-view-dashboard-outline"></i>
              <span class="nav-text">Home</span> <b class="caret"></b>
            </a>

            <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
              <div class="sub-menu">
                <li class="active">
                  <a class="sidenav-item-link" href="{{route('home.slider')}}">
                    <span class="nav-text">Slider</span>
                  </a>
                </li>
                <li class="active">
                  <a class="sidenav-item-link" href="{{route('home.about')}}">
                    <span class="nav-text">Home About</span>
                  </a>
                </li>
                <li class="active">
                  <a class="sidenav-item-link" href="{{route('multi.image')}}">
                    <span class="nav-text">Home portoflio</span>
                  </a>
                </li>
                <li class="active">
                  <a class="sidenav-item-link" href="{{route('all.brand')}}">
                    <span class="nav-text">Home Brand</span>
                  </a>
                </li>

               
              </div>
            </ul>
          </li>

          <li class="has-sub ">
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
              aria-expanded="false" aria-controls="app">
              <i class="mdi mdi-pencil-box-multiple"></i>
              <span class="nav-text">Contact page</span> <b class="caret"></b>
            </a>

            <ul class="collapse " id="app" data-parent="#sidebar-menu">
              <div class="sub-menu">
                <li class="active">
                  <a class="sidenav-item-link" href="{{route('admin.contact')}}">
                    <span class="nav-text">Contact Profile</span>
                  </a>
                </li>

                <li class="active">
                  <a class="sidenav-item-link" href="{{route('admin.message')}}">
                    <span class="nav-text">Contact Message</span>
                  </a>
                </li>

              </div>
            </ul>
          </li>

          <!-- <li class="section-title">
            UI Elements
          </li> -->

        
          <!-- <li class="section-title">
            Documentation
          </li> -->
        </ul>
      </div>

   
    </div>
  </aside>