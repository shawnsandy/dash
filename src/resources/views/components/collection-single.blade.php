@php
    $user_collection = collect($data);
    $title = $user_collection->pull($title);
    $id = $user_collection->pull('id');
    $items = $user_collection->all()
@endphp

<article>
    <h2 class="text-capitalize">{{ Html::dashIcons() }} {{ $title }}</h2>
    <hr>
    <div class="collection">

        @foreach($items as $item => $details )
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-capitalize">
                        {{ str_replace("_", " ", $item) }}
                    </h4>
                </div>
                <div class="col-md-8">
                    {{ $details or "N/A" }}
                </div>
            </div>
            <hr>
        @endforeach
        <form class="inline form" action="{{ $options["delete_url"] }}/{{ $id }}" method="post">
            {{ method_field("DELETE") }}
            {{ csrf_field() }}
            <p class="text-right">
                <button type="submit" class="btn btn-default">{{ Html::dashIcons("times") }} Delete</button>
                <a href="{{ url()->previous() }}" class="btn btn-primary">{{ Html::dashIcons("chevron-left") }} Back</a>
            </p>
        </form>
    </div>

</article>
