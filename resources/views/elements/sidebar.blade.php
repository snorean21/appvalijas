<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
		<!-- Sidebar - Brand -->
      		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        		<div class="sidebar-brand-icon rotate-n-15">
        			<i class="fas fa-laugh-wink"></i>
        		</div>
        		<div class="sidebar-brand-text mx-3">App Valijas</div>
      		</a>
	    <!-- Divider -->
	    	<hr class="sidebar-divider">
	    	</hr>
	    <!-- Nav Item - Pages Collapse Menu -->
		    <li class="nav-item">
		        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
		    		<i class="fas fa-suitcase"></i>
		        	<span>Entrada Valija</span>
		        </a>
		        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
		        	<div class="bg-white py-2 collapse-inner rounded">
		            	<a class="collapse-item" href="{{ route('entrada_index') }}">Inicio</a>
		        	</div>
		        </div>
		    </li>
      	<!-- Nav Item - Utilities Collapse Menu -->
      		<li class="nav-item">
        		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
		        	<i class="fas fa-luggage-cart"></i>
		        	<span>Salida Valija</span>
        		</a>
		        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			        <div class="bg-white py-2 collapse-inner rounded">
			            <a class="collapse-item" href="{{ route('salida_index') }}">Inicio</a>
			        </div>
		        </div>
    		</li>
    	<!-- Nav Item - Utilities Collapse Menu -->
      		<li class="nav-item">
        		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
		        	<i class="fas fa-text-width"></i>
		        	<span>Descripciones</span>
        		</a>
		        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
			        <div class="bg-white py-2 collapse-inner rounded">
			            <a class="collapse-item" href="{{ route('descripcion_index') }}">Inicio</a>
			        </div>
		        </div>
    		</li>
      	<!-- Sidebar Toggler (Sidebar) -->
	      	<div class="text-center d-none d-md-inline">
	        	<button class="rounded-circle border-0" id="sidebarToggle"></button>
	      	</div>
	</ul>
<!-- End of Sidebar -->
