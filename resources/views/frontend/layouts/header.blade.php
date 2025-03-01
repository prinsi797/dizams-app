<section class="top-area">
    <div class="header-area">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
            data-minus-value-mobile="55" data-speed="1000">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/favicon.png') }}" alt="Icon"
                            style="width: 40px; height: 30px; display: inline-block; vertical-align: middle;">
                        Di<span>zams</span>
                    </a>
                </div><!--/.navbar-header-->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class=" scroll active"><a href="{{ route('home') }}">home</a></li>
                        {{-- <li class="scroll"><a href="#works">how it works</a></li> --}}
                        {{-- <li class="scroll"><a href="#explore">explore</a></li> --}}
                        <li class="scroll"><a href="{{ route('jobs.opening') }}">Job Openings</a></li>
                        {{-- <li class="scroll"><a href="{{ route('home') }}">review</a></li> --}}
                        <li class="scroll"><a href="{{ route('resume') }}">Resume Writing</a></li>
                        <li class="scroll"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul><!--/.nav -->
                </div><!-- /.navbar-collapse -->
            </div><!--/.container-->
        </nav><!--/nav-->
        <!-- End Navigation -->
    </div><!--/.header-area-->
    <div class="clearfix"></div>

</section>
