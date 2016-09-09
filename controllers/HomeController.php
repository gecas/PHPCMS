<?php

require 'Task.php';

$query = new QueryBuilder(Connection::make($config['database']));

$tasks = $query->selectAll('todos', 'Task');

require('views/index.view.php');