@if (isset($errors) && $errors->has($name)) <p class="alert alert-danger small">{{ $errors->first($name) }}</p> @endif
