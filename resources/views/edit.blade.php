@include('css');

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-3">
                   
                    <br>

                     <p>Images:</p>
                     @foreach ($posts->images as $img)
                     <form action="/deleteimage/{{ $img->id }}" method="post">
                         <button class="btn text-danger">X</button>
                         @csrf
                         @method('delete')
                         </form>
                     <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                     @endforeach
                 

                </div>


                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Udate Post</b> </h3>
				    <div class="form-group">
                        <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                         <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">
        				 <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body">{{ $posts->body }}</Textarea>
                         
                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Update</button>
                        </form>
                   </div>
                </div>
            </div>
 









