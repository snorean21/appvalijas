<!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    	<!-- Sidebar Toggle (Topbar) -->
    		<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        		<i class="fa fa-bars"></i>
      		</button>
		<!-- Topbar Navbar -->
        	<ul class="navbar-nav ml-auto">
        		@guest
        			<li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
	            	<div class="topbar-divider d-none d-sm-block"></div>
	            	<!-- Nav Item - User Information -->
            		<li class="nav-item dropdown no-arrow">
              			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                			<span class="mr-2 d-none d-lg-inline text-gray-600">{{ Auth::user()->name }}</span>
                			<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              			</a>
              			<!-- Dropdown - User Information -->
	            		<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
			                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
			                </a>
			                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
		              	</div>
	            	</li>
				@endguest
        	</ul>
    </nav>
<!-- End of Topbar -->