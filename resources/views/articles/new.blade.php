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
                        <label for="name" style="display: block; font-weight: bold; font-size: 35px;">Title:</label>
                        <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; font-size: 16px; border: none; border-radius: 5px;">
                      </div>
                      <br><br>
                      <div style="margin-bottom: 20px;">
                        <label for="message" style="display: block; font-weight: bold; font-size: 35px;">Body:</label>
                        <textarea cols="50" id="message" name="message" rows="5" required style="width: 100%; padding: 10px; font-size: 16px; border: none; border-radius: 5px; resize: vertical;"></textarea>
                      </div>
                      <button type="submit" style="background-color: #e6e6e6; color: rgb(0, 0, 0); padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Submit</button>
                    </form>
                  </div>
                
                
                
                
                
                
                


            </div> <!-- end entry__content -->





        </article> <!-- s-content entry-->
</x-layout>