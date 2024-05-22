<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light" style="font-size: 102%; color: gold; font-family: 'Style Script', cursive; font-weight: bold;">Jewellery Shop Management Sys.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         

          <li  class="nav-item nav-link {{ Request::is('home') ? 'nav-link active' : ''}}" style="{{ Request::is('home') ? 'background-color: #17a2b8; !important' : ''}}">
            <a href="{{url('/home')}}" >
              <i class="nav-icon fas fa-gauge" {{ Request::is('home') ? 'color: white; !important' : ''}}"></i>
              <p style="{{ Request::is('home') ? 'color: white; !important' : ''}}">
                Dashboard
              </p>
            </a>
          </li>
          <li class=" nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa-solid fa-bangladeshi-taka-sign"></i>
              <p>
                Sales
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa-solid fa-sheet-plastic"></i>
              <p>
                Sales List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa-solid fa-book-open-reader"></i>
              <p>
                Add Booking
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa-solid fa-book-bookmark"></i>
              <p>
                Booking List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa-solid fa-users"></i>
              <p>
                Customers
              </p>
            </a>
          </li>

      
          <li class="nav-item @if(Request::is('employee')) menu-open @endif">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-wallet"></i>
              <p>
                Payroll Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link {{ Request::is('employee') ? 'nav-link active' : ''}}" style="{{ Request::is('employee') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('employee') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('employee') ? 'color: white; !important' : ''}}">Employees</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payrolls</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report</p>
                </a>
              </li>
            </ul>
          </li>

          <li  class="nav-item nav-link {{ Request::is('product') ? 'nav-link active' : ''}}" style="{{ Request::is('product') ? 'background-color: #17a2b8; !important' : ''}}">
            <a href="{{url('/product')}}" >
              <i class="nav-icon fa-regular fa-gem" {{ Request::is('product') ? 'color: white; !important' : ''}}"></i>
              <p style="{{ Request::is('product') ? 'color: white; !important' : ''}}">
                Products
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-diamond"></i>
              <p>
                Advance and Due
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Transaction</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier Transaction</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fa-solid fa-arrow-trend-up"></i> --}}
              <i class="nav-icon fa-solid fa-window-restore"></i>
              <p>
                Stock
              </p>
            </a>
          </li>

          <li class="nav-item @if(Request::is('product_category_list')) menu-open 
          @elseif(Request::is('today_rate_list')) menu-open
          @elseif(Request::is('sale_type')) menu-open 
          @elseif(Request::is('zone')) menu-open 
          @elseif(Request::is('supplier')) menu-open 
          @elseif(Request::is('customer_category')) menu-open 
          @elseif(Request::is('payment_method')) menu-open 
          @elseif(Request::is('terms_and_conditions')) menu-open
          @elseif(Request::is('booking_terms_and_conditions')) menu-open
          @endif">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-gears"></i>
              <p>
                Sale Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{route('product_category_list')}}" class="nav-link {{ Request::is('product_category_list') ? 'nav-link active' : ''}}" style="{{ Request::is('product_category_list') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('product_category_list') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('product_category_list') ? 'color: white; !important' : ''}}">Product Category</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{route('today_rate_list')}}" class="nav-link {{ Request::is('today_rate_list') ? 'nav-link active' : ''}}" style="{{ Request::is('today_rate_list') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('today_rate_list') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('today_rate_list') ? 'color: white; !important' : ''}}">Today Rate</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{route('sale_type.index')}}" class="nav-link {{ Request::is('sale_type') ? 'nav-link active' : ''}}" style="{{ Request::is('sale_type') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('sale_type') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('sale_type') ? 'color: white; !important' : ''}}">Sale Type</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{route('zone.index')}}" class="nav-link {{ Request::is('zone') ? 'nav-link active' : ''}}" style="{{ Request::is('zone') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('zone') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('zone') ? 'color: white; !important' : ''}}">Zones</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{route('supplier.index')}}" class="nav-link {{ Request::is('supplier') ? 'nav-link active' : ''}}" style="{{ Request::is('supplier') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('supplier') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('supplier') ? 'color: white; !important' : ''}}">Suppliers</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{route('customer_category.index')}}" class="nav-link {{ Request::is('customer_category') ? 'nav-link active' : ''}}" style="{{ Request::is('customer_category') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('customer_category') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('customer_category') ? 'color: white; !important' : ''}}">Customer Category</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{route('payment_method.index')}}" class="nav-link {{ Request::is('payment_method') ? 'nav-link active' : ''}}" style="{{ Request::is('payment_method') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('payment_method') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('payment_method') ? 'color: white; !important' : ''}}">Payment Methods</p>
                </a>
              </li>
                     
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wage Settings</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{route('terms_and_conditions.index')}}" class="nav-link {{ Request::is('terms_and_conditions') ? 'nav-link active' : ''}}" style="{{ Request::is('terms_and_conditions') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('terms_and_conditions') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('terms_and_conditions') ? 'color: white; !important' : ''}}">Terms & Conditions</p>
                </a>
              </li>


              <li class="nav-item ">
                <a href="{{route('booking_terms_and_conditions.index')}}" class="nav-link {{ Request::is('booking_terms_and_conditions') ? 'nav-link active' : ''}}" style="{{ Request::is('booking_terms_and_conditions') ? 'background-color: #17a2b8; !important' : ''}}">
                  <i class="far fa-circle nav-icon" style="{{ Request::is('booking_terms_and_conditions') ? 'color: white; !important' : ''}}"></i>
                  <p style="{{ Request::is('booking_terms_and_conditions') ? 'color: white; !important' : ''}}">Booking T&C</p>
                </a>
              </li>
           
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles & Permissions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
          </li>


     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>