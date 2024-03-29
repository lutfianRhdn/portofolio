<div class="tab-pane fa-dedent" id="tabs-icons-slide-{{$id}}" role="tabpanel"
    aria-labelledby="tabs-icons-slide-{{$id}}-tab">
    <div class="card-body d-flex flex-wrap justify-content-around">
        @forelse ($images as $image)
        <div class="w-25 mx-2 mb-4 d-flex flex-column align-items-center">
            <label for="image_page[{{$id}}][image_id][{{$image->id}}]">
                <img src="{{ asset('storage/' . $image->src) }}" class="w-100 h-150px rounded">
            </label>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" name="{{ $slideName }}[]" value="{{ $image->id }}"
                    id="image_page[{{$id}}][image_id][{{$image->id}}]" type="checkbox" @if ($slideId==1)
                    @if(count($slideOne->where('name',
                $slideName)->first()->images) == 0)
                {{ '' }}
                @else
                @foreach ($slideOne->where('name', $slideName)->first()->images as $slideImage)
                {{ $slideImage->id  == $image->id ? 'checked' : ''}}
                @endforeach
                @endif
                @elseif($slideId==2)
                @if(count($slideTwo->where('name',
                $slideName)->first()->images) == 0)
                {{ '' }}
                @else
                @foreach ($slideTwo->where('name', $slideName)->first()->images as $slideImage)
                {{ $slideImage->id  == $image->id ? 'checked' : ''}}
                @endforeach
                @endif
                @else
                @if(count($slideThree->where('name',
                $slideName)->first()->images) == 0)
                {{ '' }}
                @else
                @foreach ($slideThree->where('name', $slideName)->first()->images as $slideImage)
                {{ $slideImage->id  == $image->id ? 'checked' : ''}}
                @endforeach
                @endif
                @endif>
                <label class="custom-control-label" for="image_page[{{$id}}][image_id][{{$image->id}}]"></label>
            </div>
        </div>
        @empty
        <div class="text-center">
            <span class="font-weight-bold text-warning">Image data is
                empty!</span>
        </div>
        @endforelse
        <input type="hidden" name="slider_id" value="{{ $slideId }}">
    </div>
</div>