# Dash Froms

Quickly Create Forms using Database table or Model fillable property.

Create a basic form component that grabs the fillable fields from the User model `App\User.php` and render a user registration form.   

### Create user registration form

```blade
{{ Form::createForm('App\User', "admin/users") }}
```

### Customize the form options

```blade

    <hr>
    {{ Form::open(["url" => '/admin/users']) }}

    {{ Form::dashFields('App\User') }}
    
    <p class="text-right">
        <button class="h2 text-uppercase btn btn-block btn-lg btn-primary register oswald">
            Register Now
        </button>
    </p>

    {{ Form::close() }}
    <hr>
```

### Edit form 

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
 
 

## Form config 

__Field Types__

By default field are types based on the default column types below 

```php
        $fields['text'] = ['string'];
        $fields['textarea'] = ['text'];
        $fields['richtext'] = ['blob', 'mediumtext', 'longtext'];
        $fields['select'] = ['bool'];
        $fields['time'] = ["time"];
        $fields['date'] = ['date'];
        $fields['datetime'] = ['datetime', 'timestamp'];
```

### Set Config on the fly 

To change a field/input type from its default you will need to set the field type to password via a Laravel config option through `dash/config.php`. You can also set it on the fly in your controller or view. The example below sets the password field type on the users table to a password field/input. The second will set the text box input to a file upload field.

```blade
{{ config(["dash.forms.users.field_types.password" => "password"]) }}
{{ Form::createForm('App\User', "admin/users") }}
```

```blade
{{ config(["dash.forms.users.field_types.uploads" => "file"]) }}
```

##Customize From Components

