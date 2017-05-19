@if (isset($errors) && $errors->has($name)) 
<p class="alert text-danger small">{{ $errors->first($name) }}</p>
 @endif
