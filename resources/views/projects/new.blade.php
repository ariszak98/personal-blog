@section('title', 'New Article')

<x-layout>
    
        <article id="content" class="s-content entry">

            <div class="s-pageheader entry__header">
                <div class="row">
                    <div class="column xl-12">

                        <h1 class="entry__title">
                            Create new Project
                        </h1> <!-- end entry__title -->

                    </div>
                </div>
            </div> <!-- end entry__header --> 






            <div class="">

                <div style="max-width: 85%; margin: 50px auto; background-color: #fff; padding: 20px;">


                    <form action="/projects/new" method="post">
                        @csrf

                      <div style="margin-bottom: 20px;">
                        <label for="name" style="display: block; font-weight: bold; font-size: 20px;">Name:</label>
                        <input required type="text" id="name" name="name"  style="width: 100%; padding: 10px; font-size: 16px; border: none; border-radius: 5px;">
                        @error('name')
                            <p class="text text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                      </div>

                      <br>

                      <div style="margin-bottom: 20px;">
                        <label for="url" style="display: block; font-weight: bold; font-size: 20px;">Complete URL:</label>
                        <input required type="text" id="url" name="url"  style="width: 100%; padding: 10px; font-size: 16px; border: none; border-radius: 5px;">
                        @error('url')
                            <p class="text text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                      </div>

                      <br>

                      <div style="margin-bottom: 20px;">
                        <label for="used" style="display: block; font-weight: bold; font-size: 20px;">Technologies used:</label>
                        <input required type="text" id="used" name="used"  style="width: 100%; padding: 10px; font-size: 16px; border: none; border-radius: 5px;">
                        @error('used')
                            <p class="text text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                      </div>

                      <br>

                      <div style="margin-bottom: 20px;">
                        <label for="description" style="display: block; font-weight: bold; font-size: 20px;">Description:</label>
                        <textarea required cols="50" id="description" name="description" rows="5"  style="width: 100%; padding: 10px; font-size: 16px; border: none; border-radius: 5px; resize: vertical;"></textarea>
                        @error('description')
                            <p class="text text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                      </div>

                      <button type="submit" style="background-color: #e6e6e6; color: rgb(0, 0, 0); padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Submit</button>
                    </form>


                  </div>
                
                

            </div> <!-- end entry__content -->





        </article> <!-- s-content entry-->
</x-layout>