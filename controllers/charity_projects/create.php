<?php
$heading = "Create test";




$db->query("INSERT INTO projects ( partner_id,  category_id,  level,  name,  photo,  short_description,  full_description,  type,  cost,  start_at,  end_at,  state,  directorate)
VALUES
    (    :partner_id,
    :category_id,
    :level,
    :name,
    :photo,
    :short_description,
    :full_description,
    :type, :cost,
    :start_at,
    :end_at,
    :state,
    :directorate
    )", 
    [
        'partner_id' => $_POST['partner_id'],
        'category_id'=> $_POST['category_id'],
        'name' => $_POST['name'], 
        'photo' => $_POST['photo'], 
        'level' => $_POST['level'], 
        'short_description' => $_POST['short_description'], 
        'full_description' => $_POST['full_description'], 
        'type' => $_POST['type'], 
        'cost' => $_POST['cost'], 
        'start_at' => $_POST['start_at'], 
        'end_at' => $_POST['end_at'], 
        'state' => $_POST['state'], 
        'directorate' => $_POST['directorate']
    ]);

require "views/pages/charity_projects/create_view.php";
