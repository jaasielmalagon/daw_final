<?php

$container['users'] = function ($container){
return new App\Models\UsersModel($container);
};