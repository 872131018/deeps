<ul class="list-group">
    @foreach ($images as $image)
        <li class="list-group-item">
            <button type="button" class="btn btn-default" data-delegate="gallery_add" data-image="{{ $image }}">Add</button>
            <span>{{ $image }}</span>
        </li>
    @endforeach
</ul>
