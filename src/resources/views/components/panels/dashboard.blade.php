<div class="panel panel-default component-panel">
    <div class="panel-body">
        <h2 class="component-panel-title">
            {{ Html::dashIcons((isset($icon)) ?  $icon : "circle-o") }}
            {{ $title or 'Admin Panel' }}
        </h2>
        <hr>
       {{ $slot }}
    </div>
</div>
