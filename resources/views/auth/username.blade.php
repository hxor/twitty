<!doctype html>
<html>
	<head>
		<title>twitter</title>
		<meta charset="UTF-8" />
 		<link rel="stylesheet" href="{{ url('/') }}/assets/css/font/css/font-awesome.css"/>
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/style-complete.css"/>
	</head>
	<!--Helvetica Neue-->
<body>
<div class="wrapper">
<!-- nav wrapper -->
<div class="nav-wrapper">
	
	<div class="nav-container">	
		<div class="nav-second">
			<ul>
				<li><a href="#"<i class="fa fa-twitter" aria-hidden="true"></i></a></li>							
			</ul>
		</div><!-- nav second ends-->
	</div><!-- nav container ends -->

</div><!-- nav wrapper end -->

<!---Inner wrapper-->
<div class="inner-wrapper">
	<!-- main container -->
	<div class="main-container">
		<!-- step wrapper-->

        @if(Auth::user()->username == null)
            <div class="step-wrapper">
                <div class="step-container">
                    <form method="POST" action="{{ route('post.profile.username') }}">
                    {{ csrf_field() }}
                        <h2>Choose a Username</h2>
                        <h4>Don't worry, you can always change it later.</h4>
                        <div>
                            <input type="text" name="username" value="{{ old('username') }}" placeholder="Username"/>
                            @if ($errors->has('username'))
                                <div class="span-fp-error">{{ $errors->first('username') }}</div>
                            @endif
                        </div>
                        <div>
                            <ul>
                            <li><!-- error --></li>
                            </ul>
                        </div>
                        <div>
                            <input type="submit" name="next" value="Next"/>
                        </div>
                    </form>
                </div>
            </div>
            @else
            <div class='lets-wrapper'>
                <div class='step-letsgo'>
                    <h2>We're glad you're here, {{ Auth::user()->name }}</h2>
                    <p>Twitty is a constantly updating stream of the coolest, most important news, media, sports, TV, conversations and more--all tailored just for you.</p>
                    <br/>
                    <p>
                        Tell us about all the stuff you love and we'll help you get set up.
                    </p>
                    <span>
                        <a href="{{ route('home') }}" class='backButton'>Let's go!</a>
                    </span>
                </div>
            </div>
        @endif
		
	</div><!-- main container end -->

</div><!-- inner wrapper ends-->
</div><!-- ends wrapper -->

</body>
</html>
	