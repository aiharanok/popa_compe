
@foreach($categories as $category)

    <a href="/?c={{ $category->id }}" class="btn btn-sm btn-primary">{{ $category->name }}</a>

@endforeach

