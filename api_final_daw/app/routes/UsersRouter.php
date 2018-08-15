<?php
$app->post('/users', 'UsersController:insertContact');

$app->get('/users/{username}/{password}', 'UsersController:selectUser');

