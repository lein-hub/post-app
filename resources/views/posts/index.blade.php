<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Posts') }}
      </h2>
  </x-slot>

  <div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">content</th>
            <th scope="col">user_id</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td><a href="{{ route('posts.show', ['id'=>$post->id, 'page'=>$posts->currentPage()]) }}">{{ $post->title }}</a></td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->user_id }}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
<div>
    @auth
        <div><a href="/posts/create">게시글 작성</a></div>
    @endauth
    <div>{{ $posts->links() }}</div>
</div>
</x-app-layout>
