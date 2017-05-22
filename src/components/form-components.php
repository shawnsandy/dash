<?php

/**
* Created by PhpStorm.
* User: Shawn
* Date: 3/16/2017
* Time: 1:24 AM
*/

Form::macro('formLabel', function($label = "Label Me") {
    $display_name = str_replace("_", " ", $label);
    $label = Dash::htmlString("<label class=\" {$label} text-capitalize \" for=\" $label  \">{$display_name}</label>");
    return   $label;

});


Form::macro("formError", function($name, $errors){
    $error = '';
    if ($errors->has($name))
        $error = htmlString("<div class=\"alert text-danger small\">{$errors->first($name)}</div>");
    return $error ;
});

Form::component(
    "createForm",  "dash::components.forms.create", 
    ["model", "url", "data" => [], "options" => []]
);


Form::component(
    "editForm",  "dash::components.forms.edit", 
    ["model", "url", "data" => [], "options" => []]
);


Form::component(
    'dashOpen',
    'dash::components.forms.open',
    ["options" => [], "data" => null ]
);


Form::component(
    'dashFields',
    'dash::components.forms.fields',
    ["model" => ""]
);


Form::component('dashLabel',
'dash::components.forms.label', ["title", "name" => null]);


Form::component('dashClose',
    'dash::components.forms.close', ['button_label', 'button_style', 'options']);



Form::component(
    'dashText',
    'dash::components.forms.dash-text',
    ["name", 'title' => 'Text', "attributes" => [], "value", ]
);

Form::component(
    'dashTextarea',
    'dash::components.forms.dash-textarea',
    ["name", 'title' => 'Textarea', "attributes" => [], "value", ]
);

Form::component(
    'dashRichText',
    'dash::components.forms.dash-rich-text',
    ["name", 'title' => 'Rich Text', "attributes" => [], "value", ]
);

Form::component(
    'dashSelect',
    'dash::components.forms.dash-select',
    ["name", 'title' => 'Select', "attributes" => [], "value", ]
);

Form::component(
    'dashPassword',
    'dash::components.forms.dash-password',
    ["name", 'title' => 'Password', "attributes" => [], "value", ]
);

Form::component(
    'dashEmail',
    'dash::components.forms.dash-email',
    ["name", 'title' => 'Email', "attributes" => [], "value", ]
);

Form::component(
    'dashTime',
    'dash::components.forms.dash-time',
    ["name", 'title' => 'Time', "attributes" => [], "value", ]
);

Form::component(
    'dashDate',
    'dash::components.forms.dash-date',
    ["name", 'title' => 'Date', "attributes" => [], "value", ]
);

Form::component(
    'dashDateTime',
    'dash::components.forms.dash-date-time',
    ["name", 'title' => 'Date Time', "attributes" => [], "value", ]
);

Form::component(
    'dashFile',
    'dash::components.forms.dash-file',
    ["name", 'title' => 'Upload', "attributes" => [], "value", ]
);

Form::component(
    'error',
    'dash::components.forms.errors',
    ["name", 'title', "attributes", "value", ]
);


