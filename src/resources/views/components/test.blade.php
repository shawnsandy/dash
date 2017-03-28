<h1>{{ $title }}</h1>
<p>
    Notice how we reference a view path of components.form.text. Also, the array we provided is a sort of method signature for your Component. This defines the names of the variables that will be passed to your view. Your view might look something like this:
</p>
@includeIf($view, $data)

{{ $attributes["class"] or 'class' }}



{{ dump($attributes) }}
