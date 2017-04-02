<style>
    .material-icons {
        height: auto;
        width: 24px;
        display: inline-block;
        vertical-align: middle;
    }
    .icon {
        display: inline-block;
    }

    .svg {
        height: 24px;
    }
</style>

{{ Html::extrasImg("bg/01.jpg?w=500", ["class" => "img-circle", "alt" => "Glide image"]) }}
<hr>
{{ Html::extrasImg("photo1.jpg?w=500", ["class" => "img-responsive", "alt" => "Glide image"], "/extras/img/") }}

<hr>
<p>
    {{ Html::materialIcon("material-airplay") }} Shawn Sandy {{ Html::entypoIcon("entypo-adjust") }} Shawn Sandy
</p>






