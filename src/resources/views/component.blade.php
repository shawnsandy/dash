@php
    /**
     * view to include
     * title of the view
     * data to pass to the view
     * @include("extra::component", ["title" => "Title", "data" => ['one', 'two', 'three'], "view" => "view.folder"])
    **/

    $title = isset($component['title']) ? $component['title'] : null;
    $component_data = isset($component['data']) ?  $component['data'] : [] ;

@endphp

@if(View::exists($data['view']))

    @include($data['view'], [$title, $component_data])

@else

    <aside style="padding: 20px; background-color: lightgray; color: grey; font-size: 18px">
        <h3>Component Title</h3>
        <p>
            Sample component, please see Dash docs for component usage.
        </p>
    </aside>

@endif
