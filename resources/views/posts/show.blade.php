@if(session('message'))
   {{ session('message') }}
@endif

{{ &post->title }}
{{ &post->content }}

<a herf="/posts/{{ $post->id }}/edit">Edit</a>