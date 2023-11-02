@include('css');

        <div class="container" style="margin-top: 50px;">

            <h3 class="text-center text-danger"><b>Machine test </b> </h3>
            <a href="/create" class="btn btn-outline-success">Add New Post</a>
            <td><a href="{{route('show')}}" class="btn btn-outline-primary">Show All</a></td>
            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>

              
                @foreach ($posts as $post)

            <tr>
                  <th scope="row">{{ $post->id }}</th>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->author }}</td>
                  <td>{{ $post->body }}</td>
                  <td><img src="{{asset('images/'.$post->image)}}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                  <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Update</a></td>
               
                  <td>
                      <form action="/delete/{{ $post->id }}" method="post">
                      <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                      @csrf
                      @method('delete')
                  </form>
                  </td>
                  @endforeach
              </tr>
         
                </tbody>
              </table>         
        </div>
