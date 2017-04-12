<aside class="panel">
    <div class="panel-body">
        <p class="h4 text-uppercase">{{ Html::dashIcons() }}  {{ $title or "..." }}</p>
        <hr>
         {{ $slot }}
    </div>
</aside>
