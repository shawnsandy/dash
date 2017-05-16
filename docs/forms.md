# Dash Froms

Quickly Create Forms using Database table or Model fillable property.

Create a basic form component that grabs the fillable fields from the User model `App\User.php` and render a user registration form.   

- Create form

```blade
{{ Form::createForm('App\User', "admin/users") }}
```

- Edit form 

```blade
{{ Form::createEditForm('App\User', "admin/users") }}
```
