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
You can use the Dash forms property to modify fields, title, and options on any field'

```php
'forms' => [

            "users" => [
                "field_types" => ["password" => "password", "id" => "hidden", "email" => "email"],
                "labels" => [
                    "password" => "Add account password",
                    "email" => "Enter a valid em@il",
                    "region_id" => "Select Your Suncoast Region"
                ],
                "options" => [
                    'password' => ['one', 'two', 'tree']
                ]
            ]

        ]
```
 
 

- Form config

- Set Config on the fly 

```blade
{{ config(["dash.forms.users.field_types.password" => "select"]) }}
{{ Form::createForm('App\User', "admin/users") }}
```

Sets the password type to a text box that is all it would take
