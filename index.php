<?php

require 'bootstrap.php';

require 'Task.php';

$query = new QueryBuilder(Connection::make($config['database']));
$tasks = $query->selectAll('todos', 'Task');

require('index.view.php');

