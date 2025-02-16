<?php



Config::set('site_name', 'Codely.mn');
Config::set('languages', ['en', 'mn']);
Config::set('database.name', 'codelydb');
Config::set('database.user', 'root');
Config::set('database.password', '');
Config::set('database.host', 'localhost');


// echo Config::get('site_name');

// echo "</br>";


//// System default value
Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',
    'user' => 'user_'
));
Config::set('languages', array('en', 'mn', 'jp'));
Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');
