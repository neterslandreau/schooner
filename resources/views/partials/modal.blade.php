<!-- Modal -->
<div class="modal fade" id="{{ $item->slug }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="{{ $item->slug }}">{{ $item->name }}</h4>

            </div>

            <div class="modal-body">

            @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

                    <img height="300" src="/storage/items/{{ $item->slug }}.png">

            @endif

                <div class="form-group">
                    <label for="{{ $item->description }}">{{ $item->description }}</label>
                </div>

                <div class="form-group">
                    <label for="quantity">How many?</label>

                    <select id="{{ $item->slug }}_quantity">
                        @for ($x = 1; $x <= 10; $x++)
                        <option value="{{ $x }}">{{ $x }}</option>
                        @endfor
                    </select>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="slug_{{ $item->slug }}" type="button" class="btn btn-primary" data-dismiss="modal">Add to cart</button>

            </div>

        </div>

    </div>

</div>
