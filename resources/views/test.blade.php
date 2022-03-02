@foreach($posts->all() as $post)
    <h3>{{$post->title}}</h3>
    <p>{{$post->content}}</p>
    <hr />
@endforeach

{{$posts->links('pagination::bootstrap-4')}}
