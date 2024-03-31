<?php
// Controller.php

require_once('models/GenericModel.php');
require_once('database/DBConnection.php');

$model = new GenericModel($pdo, 'produits');
$records = $model->getAll();

require 'views/view.php';
?>
