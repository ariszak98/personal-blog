@section('title', 'My Writings | Zakynthinos A.')

<x-layout>

    <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <section class="s-pageheader pageheader">
                 <div class="row">
                     <div class="column xl-12">
                         <h1 class="page-title">
                             <span class="page-title__small-type text-pretitle">Blog</span>
                             Recent Writings
                         </h1>
                     </div>
                 </div>
            </section>   

            <section class="s-pagecontent pagecontent">

                 <div class="row">
                     <div class="column xl-12 grid-block">          
     
                         <!-- <div class="grid-full">         -->
                             <div class="grid-full grid-list-items">




                                @foreach ($articles as $art)
                                    
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                                <a href="blog.html"><i>Tags</i></a>
                                            </div>
                                            <h3 style="font-weight: semibold; font-size: 1.7em;" class="blog-card__title">
                                                <a class="hover:text-blue-500" href="/article/{{ $art->id }}">
                                                    {{ $art->title }}
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                                {{ $art->body }}
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    
                                @endforeach






  
     
                             </div> <!-- grid-list-items -->
                         <!-- </div>     -->

                     </div> <!-- end grid-block-->
                 </div> <!-- end row -->

                 <!-- pagination -->
                 <div class="row">
                     <div class="column xl-12">
                            {{ $articles->links('pagination::bootstrap-4') }}
                     </div> <!-- end column -->
                 </div> <!-- end pagination -->

            </section>

     </section> <!-- s-content-->

</x-layout>