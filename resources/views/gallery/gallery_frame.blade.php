<div class="item item-{{ $painting->position }} {{ $active }}">
    <img src="{{ $painting->url }}" data-zoom-image="{{ $painting->url }}">
    <div class="gallery-frame-details">
        @if ($painting->sold)
            <span class="gallery-details-sold glyphicon glyphicon-one-fine-dot" data-toggle="tooltip" data-placement="bottom" title="Sold"></span>
        @endif
        <span class="gallery-details-name">{{ $painting->name }}</span><span class="gallery-details-year">{{ $painting->year }}</span><br>
        <span class="gallery-details-description">{{ $painting->description }}</span><br>
        <span class="gallery-details-size">{{ $painting->size }}</span>
    </div>
</div> 