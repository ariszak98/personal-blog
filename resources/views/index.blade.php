@section('title', 'Welcome | Zakynthinos A.')

<x-layout>


    <!-- INTRO -->
    <section id="intro" class="s-intro">

        <div class="row s-intro__content width-sixteen-col">

            <div class="column lg-12 s-intro__content-inner grid-block">
                
                <div class="s-intro__content-text">
                    <div class="s-intro__content-pretitle text-pretitle">Hello, I'm Monica</div>
                    <h1 class="s-intro__content-title">
                    I create marketing <br>
                    strategies for your <br>
                    business that get <br>
                    results.
                    </h1>
                </div> <!-- s-intro__content-text -->

                <div class="s-intro__content-media"> 
                    <div class="s-intro__content-media-inner">                               
                        <img src="{{ asset('images/intro-bg.jpg') }}" srcset="{{ asset('images/intro-bg.jpg') }} 1x, {{ asset('images/intro-bg.jpg') }} 2x" alt="">
                        <div class="lines">                               
                            <span></span>                                  
                        </div>
                    </div>
                </div> <!-- s-intro__content-media -->                      

                <div class="s-intro__scroll-down">
                    <a href="#about" class="smoothscroll">
                        <div class="scroll-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                        </div>
                        <span>Scroll for more</span>
                    </a>
                </div> <!-- s-intro__scroll-down -->
                
            </div> <!-- s-intro__content-inner -->

        </div> <!-- s-intro__content -->

    </section> 
    <!-- END INTRO -->

    <!-- ABOUT -->
    <section id="about" class="s-about target-section">

        <div class="row s-about__content width-sixteen-col">
            <div class="column grid-block grid-section-split">

                <img src="{{ asset('images/geometric_shape.svg') }} " alt="" class="s-about__content-imgbg">

                <div class="section-header grid-section-split__header">
                    <div class="text-pretitle">About</div>                           
                    <h2 class="text-display-title">
                    An inspiring headline about yourself.
                    </h2>                           
                </div> <!-- end section-header -->

                <div class="s-about__content-main grid-section-split__primary">
                    <p class="attention-getter">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repellendus iste ipsam quod repellat. Hic tempora ullam aperiam 
                    ipsum optio magni vel inventore voluptatibus nisi maiores laboriosam 
                    fuga iure, velit eligendi ab vero minima? Quae ducimus ab dignissimos 
                    iure, eos consequatur est deleniti cum id aliquid neque.
                    </p>

                    <p class="attention-getter">
                    Autem tenetur commodi maiores. Lorem ipsum dolor sit, amet consectetur adipisicing elit.  
                    Est eligendi fugit, facilis velit reiciendis iure laudantium. Praesentium repellat 
                    corrupti dolor sit sint obcaecati. Modi aut quo molestiae a explicabo maiores necessitatibus 
                    nemo repellendus architecto? Corrupti numquam ullam nostrum, eveniet at doloribus blanditiis 
                    aliquid a est porro aspernatur pariatur culpa soluta nesciunt odio quasi maxime debitis illum.
                    </p>

                    <p class="attention-getter">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repellendus iste ipsam quod repellat. Hic tempora ullam aperiam 
                    ipsum optio magni vel inventore voluptatibus nisi maiores laboriosam 
                    fuga iure, velit eligendi ab vero minima? Quae ducimus ab dignissimos 
                    iure, eos consequatur est deleniti cum id aliquid neque.
                    </p>
                </div> <!-- end s-about__content-main -->

                <div class="s-about__content-btn grid-section-split__bottom">
                    <a href="about.html" class="btn btn--stroke u-fullwidth">More About Me</a>

                    <ul class="s-about__social social-list">
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                <span class="u-screen-reader-text">Github</span>
                            </a>
                        </li>
                        
                        
                        
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                  
                                  <span class="u-screen-reader-text">Linkedin</span>                           
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="leetcode"><path d="M22,14.355c0-0.742-0.564-1.346-1.26-1.346H10.676c-0.696,0-1.26,0.604-1.26,1.346s0.563,1.346,1.26,1.346H20.74C21.436,15.702,22,15.098,22,14.355z"></path><path d="M3.482,18.187l4.313,4.361C8.768,23.527,10.113,24,11.598,24c1.485,0,2.83-0.512,3.805-1.494l2.588-2.637c0.51-0.514,0.492-1.365-0.039-1.9c-0.531-0.535-1.375-0.553-1.884-0.039l-2.676,2.607c-0.462,0.467-1.102,0.662-1.809,0.662s-1.346-0.195-1.81-0.662l-4.298-4.363c-0.463-0.467-0.696-1.15-0.696-1.863c0-0.713,0.233-1.357,0.696-1.824l4.285-4.38c0.463-0.467,1.116-0.645,1.822-0.645s1.346,0.195,1.809,0.662l2.676,2.606c0.51,0.515,1.354,0.497,1.885-0.038c0.531-0.536,0.549-1.387,0.039-1.901l-2.588-2.636c-0.649-0.646-1.471-1.116-2.392-1.33l-0.034-0.007l2.447-2.503c0.512-0.514,0.494-1.366-0.037-1.901c-0.531-0.535-1.376-0.552-1.887-0.038L3.482,10.476C2.509,11.458,2,12.813,2,14.311C2,15.809,2.509,17.207,3.482,18.187z"></path></svg>
                                <span class="u-screen-reader-text">Leetcode</span>  
                            </a>
                        </li>

                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                    </ul> <!-- end s-footer__social -->
                </div> <!-- end s-about__content-btn -->
            
            </div> <!-- content-inner -->
        </div>
        
    </section>
    <!-- END ABOUT -->

    <section class="s-testimonials">

        <div class="s-testimonials__header row row-x-center text-center">
            <div class="column xl-8 lg-12">

                <p class="text-pretitle">
                Testimonials
                </p>
                <h3>
                Reviews From Real Clients
                </h3>                        

            </div>
        </div> <!--end s-testimonials__header -->

        <div class="row s-testimonials__content">
            <div class="column xl-12 testimonials">

                <div class="swiper-container testimonials__slider page-slider">

                    <div class="swiper-wrapper">
                        <div class="testimonials__slide swiper-slide">
                            <p>
                            Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                            Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                            Laudantium quia consequatur molestias.
                            </p>
                            <div class="testimonials__author">
                                <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>John Rockefeller</strong>
                                    <span>Standard Oil Co.</span>
                                </cite>
                            </div>
                        </div>
                        <div class="testimonials__slide swiper-slide">
                            <p>
                            Voluptas tempore rem. Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. 
                            Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                            Laudantium quia consequatur molestias.
                            </p>
                            <div class="testimonials__author">
                                <img src="images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>Andrew Carnegie</strong>
                                    <span>Carnegie Steel Co.</span>
                                </cite>
                            </div>
                        </div>
                        <div class="testimonials__slide swiper-slide">
                            <p>
                            Nisi dolores quaerat fuga rem nihil nostrum. Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. 
                            Voluptas tempore rem. Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. 
                            Laudantium quia consequatur molestias.
                            </p>
                            <div class="testimonials__author">
                                <img src="images/avatars/user-06.jpg" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>Henry Ford</strong>
                                    <span>Ford Motor Co.</span>
                                </cite>
                            </div>
                        </div>
                        <div class="testimonials__slide swiper-slide">
                            <p>
                            Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                            Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                            Laudantium quia consequatur molestias.
                            </p>
                            <div class="testimonials__author">
                                <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>John Morgan</strong>
                                    <span>JP Morgan & Co.</span>
                                </cite>
                            </div>
                        </div> 
                    </div> <!-- end swiper-wrapper --> 

                    <div class="swiper-pagination"></div>

                </div> <!--end testimonials__slider --> 

            </div> <!-- testimonials -->
        </div> <!--end s-testimonials__content -->

   </section> <!-- end s-testimonials -->


</x-layout>