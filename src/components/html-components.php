<?php
/*
 * $data = dataset mixed|array|string
 * $title = component title string
 * $attributes html attributes
 * $view blade template optional
 * */

Html::component("dashMessages", "dash::partials.messages", []);

Html::component("dashIcons", "dash::components.icon", ['name' => "circle-o", "selector" => "fa fa-"]);

Html::component("dataTable", "dash::components.tables.data-table", ["data" => [], "table_columns", "options", "attributes", "table_id"]);

Html::component("dashButton", "dash::components.tables.button", ['name', 'options' => ["class" => "btn"]]);

Html::component("dashPanel", "dash::components.test", ["data", 'title' => 'Testing', "attributes" => [], 'view']);

Html::component("dashWidget", "dash::components.widget", ["data", 'title' => 'Widgets', "attributes" => [], 'view']);

Html::component("dashInfoWidget", "dash::components.info-widget", ["data", 'title' => 'Info Widgets', "attributes" => [], 'view']);

Html::component("dashListPanel", "dash::components.list-panel", ['data', 'title' => 'Data Panel', "attributes" => [], 'view']);

Html::component("dashDataTable", "dash::components.data-table", ['data' => [], 'title' => 'Data Panel', "attributes" => [], 'view']);

Html::component("dashCard", "dash::components.card", ['data', 'title' => 'Card', "attributes" => [], 'view']);

Html::component("dashStory", "dash::components.story", ['data', 'title' => 'Story', "attributes" => [], 'view']);

Html::component("dashCollection", "dash::components.collection", ['data', 'title' => 'Collection', "attributes" => [], 'view']);

Html::component("dashCollectionPage", "dash::components.collection-single", ['data', 'title' => 'Collection', "options", "attributes" => [] ]);

Html::component("dashListPanelCollection", "dash::components.list_panel_component", ['data', 'title' => 'Data Panel', "attributes" => [], 'view']);
