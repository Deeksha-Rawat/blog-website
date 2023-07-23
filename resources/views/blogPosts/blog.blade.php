@extends('layout')

@section('main')
 <!-- main -->
 <main class="container">
      <h2 class="header-title">All Blog Posts</h2>
      @if (session('status'))
        <p style="color:white; font-size:18px;font-weigth:500;;background:#1abd1a;padding:10px;margin-bottom:10px;border-radius:10px">{{session('status')}}</p>
    @endif
      
      
      <section class="cards-blog latest-blog">
        
        @foreach ($posts as $post)
        <div class="card-blog-content">
                    @auth
                        @if (auth()->user()->id === $post->user->id)
                            <div class="post-buttons">
                                <a href="{{ route('blog.edit', $post) }}">Edit</a>
                                <form action="{{ route('blog.delete', $post) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value=" Delete">
                                </form>
                            </div>
                        @endif
                    @endauth
                    <img src="{{ asset($post->imagePath) }}" alt="" />
                    <p>
                        {{ $post->created_at->diffForHumans() }}
                        <span>Written By {{ $post->user->name }}</span>
                    </p>
                    <h4>
                        <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                    </h4>
          </div>
        @endforeach

        <!-- pagination -->
        
      </section>
      <div class="pagination" id="pagination">
          <a href="">&laquo;</a>
          <a class="active" href="">1</a>
          <a href="">2</a>
          
          <a href="">&raquo;</a>
        </div>
        <br>
      <!-- Main footer -->
      
    </main>
@endsection