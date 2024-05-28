@section('title', 'My Projects | Zakynthinos A.')

<x-layout>


    <!-- PROJECTS -->
        <section id="content" class="s-content">

            <section class="s-pageheader pageheader">
                 <div class="row">
                     <div class="column xl-12">
                         <h1 class="page-title">
                             <span class="page-title__small-type text-pretitle">Projects</span>
                             Active & non Projects
                         </h1>
                         
                     </div>
                 </div>
            </section> <!-- pageheader -->  

            <section class="s-pagecontent pagecontent">

                 <div class="row pageintro">
                     <div class="column xl-6 lg-12">
                         <h2 class="text-display-title">High-impact services to help your business</h2>
                     </div>
                     <div class="column xl-6 lg-12 u-flexitem-x-right">
                         <p class="lead">
                         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias eos quas blanditiis, quos sint nostrum fugit aperiam 
                         inventore optio itaque molestias corporis, ipsa tenetur eligendi nihil iste porro, natus culpa consequuntur? Maxime, 
                         corporis tempore. Sed tenetur veritatis velit recusandae eum, molestiae voluptate ducimus laudantium esse illo 
                         doloribus atque eligendi deleniti iusto. 
                         </p>
                     </div>                       
                 </div>  <!-- pageintro -->       

                 <div class="row">
                     <div class="column xl-12 grid-block">             
                         
                         <div class="grid-full grid-list-items list-items show-ctr">







                            @foreach ($projects as $proj)

                            <div style="margin-top: 2em" class="grid-list-items__item list-items__item">
                                <div class="list-items__item-header">
                                    <h3 style="font-weight: semibold; font-size: 1.7em;" class="list-items__item-title">
                                       <a target="__blank" href="{{ $proj->url }}" class="hover:text-blue-500">{{ $proj->name }}</a>
                                   </h3>
                                </div>
                                <div class="list-items__item-text">
                                   <p style="font-size: small; "><b style="color: rgb(255, 123, 0);">{{ $proj->used }}</b></p>
                                    <p>{{ $proj->description }}</p>
                                    <br>
                                    <!--
                                    <ul class="list-services pt-4">
                                        <li>Cumque Ducimus</li>
                                        <li>Maxime Vel</li>
                                        <li>Eligendi Et</li>
                                    </ul>
                                   -->
                                </div>
                            </div> <!-- end list-items__item -->
                                
                            @endforeach
                             

                   
                             
 
                         </div> <!-- grid-list-items -->
                        

                     </div> <!-- end grid-block-->
                 </div> <!-- end row -->

            </section> <!-- pagecontent -->

           

     </section>
     <!-- END PROJECTS -->


</x-layout>