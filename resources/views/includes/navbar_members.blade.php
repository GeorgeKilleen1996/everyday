<header>
	 <div class="navigationBar">
	    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	    <div class="container">
	        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
	            <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarCollapse">
	            <div class="navbar-nav">
	            	<a href="/home" class="nav-item nav-link"><span class="material-icons">home</span></a>
	            </div>
	            <div class="navbar-nav nav-fill w-100" style="padding-right:80px;padding-left:80px;">
	                <a href="/members/planner" class="nav-item nav-link">Planner</a>
	                <a href="/members/finances" class="nav-item nav-link">Finances</a>
	                <a href="/members/portfolio" class="nav-item nav-link">Portfolio</a>
	                <a href="/members/health" class="nav-item nav-link">Health</a>
	                <a href="/members/pokemon" class="nav-item nav-link">Pokemon</a>
	            </div>
	            <div class="navbar-nav ml-auto">
	            	<a href="#" class="nav-item nav-link"><span class="material-icons">account_circle</span></a>
	                <a href="{{route('logout')}}" class="nav-item nav-link"><span class="material-icons">logout</span></a>
	            </div>
	        </div>
	        </div>
	    </nav>
	</div>
	<div class="subBanner">
		<span>Welcome to the members section, <strong><a href="/members/account/{{Auth::user()->id}}">{{Auth::user()->fname}} {{Auth::user()->lname}}</a></strong>!</span>
	</div>
</header>