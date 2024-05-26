@section('title', 'New Article')

<x-layout>
    
        <article id="content" class="s-content entry">

            <div class="s-pageheader entry__header">
                <div class="row">
                    <div class="column xl-12">

                        <h1 class="entry__title">
                            Create new Article
                        </h1> <!-- end entry__title -->

                    </div>
                </div>
            </div> <!-- end entry__header --> 






            <div class="">

                <div style="max-width: 85%; margin: 50px auto; background-color: #fff; padding: 20px;">


                    <form action="#" method="post">
                        @csrf

                      <div style="margin-bottom: 20px;">
                        <label for="title" style="display: block; font-weight: bold; font-size: 35px;">Title:</label>
                        <input required type="text" id="title" name="title"  style="width: 100%; padding: 10px; font-size: 16px; border: none; border-radius: 5px;">
                        @error('title')
                            <p class="text text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                      </div>

                      <br><br>

                      <div style="margin-bottom: 20px;">
                        <label for="body" style="display: block; font-weight: bold; font-size: 35px;">Body:</label>
                        <textarea required cols="50" id="body" name="body" rows="5"  style="width: 100%; padding: 10px; font-size: 16px; border: none; border-radius: 5px; resize: vertical;"></textarea>
                        @error('body')
                            <p class="text text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                      </div>

                      <button type="submit" style="background-color: #e6e6e6; color: rgb(0, 0, 0); padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Submit</button>
                    </form>


                  </div>
                
                

            </div> <!-- end entry__content -->





        </article> <!-- s-content entry-->
</x-layout>