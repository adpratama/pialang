<a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
          </g>
        </svg>
      </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item w-100">
        <a class="nav-link" href="calendar.html">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">Partner</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
          <li class="nav-item active">
            <a class="nav-link pl-3" href="{{route('clients.index')}} "><span class="ml-1 item-text">Client</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{route('insurance.index')}}"><span class="ml-1 item-text">Insurance</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{route('insured.index')}}"><span class="ml-1 item-text">Insured</span></a>
          </li>
        </ul>
      </li>
    </ul>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item w-100">
        <a class="nav-link" href="{{route('placing.index')}} ">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">Placing Slip</span>
        </a>
      </li>
      <li class="nav-item w-100">
        <a class="nav-link" href="{{route('quotation.index')}} ">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">Quotation Slip</span>
        </a>
      </li>
      <li class="nav-item w-100">
        <a class="nav-link" href="{{route('tes.index')}} ">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">Instruct Cover</span>
        </a>
      </li>
      <li class="nav-item w-100">
        <a class="nav-link" href="calendar.html">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">Invoice</span>
        </a>
      </li>
      <li class="nav-item w-100">
        <a class="nav-link" href="calendar.html">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">Report</span>
        </a>
      </li>
      <li class="nav-item w-100">
        <a class="nav-link" href="calendar.html">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">Tools</span>
        </a>
      </li>
    </ul>
    {{-- <div class="btn-box w-100 mt-4 mb-1">
      <button type="button" class="btn mb-2 btn-primary btn-lg btn-block">
        <i class="fe fe-log-out fe-12 mr-2"></i><span class="small">Logout</span>
      </button>
    </div> --}}
  </nav>