<?php
$heading = "Edit test";

use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;

$partners = $db->query("SELECT * from partners where partner_id = :partner_id",[
    'partner_id' => $_POST['partner_id']
])->findOrFail();
$partners['phones'] = $db->query(
    "SELECT phone, type from partners_phones
    WHERE partner_id = :partner_id",[
        'partner_id' => $_POST['partner_id']
    ])->fetchAll();
$partners['accounts'] = $db->query(
    "SELECT account, account_type from partners_accounts
    WHERE partner_id = :partner_id",[
        'partner_id' => $_POST['partner_id']
    ])->fetchAll();
// $item = $db->query("SELECT * from executive_partners where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();
$partners = $db->query("SELECT * from partners where partner_id = :partner_id",[
    'partner_id' => $_POST['partner_id']
])->findOrFail();
//authorize($item['other_id'] == $userID);
$db->query("UPDATE partners
SET
(
    name = :name,
    logo = :logo,
    description = :description,
    more_information = :more_information,
    email = :email,
    directorate = :directorate,
    county = :county,
    city = :city,
    street = :street
) WHERE partner_id = :partner_id",[
    'name' => $_POST['name'],
    'logo' => $_POST['logo'],
    'description' => $_POST['description'],
    'more_information' => $_POST['more_information'],
    'email' => $_POST['email'],
    'directorate' => $_POST['directorate'],
    'county' => $_POST['county'],
    'city' => $_POST['city'],
    'street' => $_POST['street'],
    'partner_id' => $_POST['partner_id']
]);
foreach($_POST['phones'] as $phone){
    $db->query(
        "UPDATE partner_phones 
        SET
        (
            :phone,
            :type
        )WHERE partner_id = :partner_id and phone = :L_phone and type = :L_type",[
            'partner_id' => $_POST['partner_id'],
            'phone' => $phone['phone'],
            'type' => $phone['type'],
            'L_type' => $partners['']
        ]
    );
}
foreach($_POST['accounts'] as $account){
    $db->query(
        "UPDATE partners_accounts 
        SET
        (
            :account,
            :account_type
        )WHERE partner_id = :partner_id and ",[
            'partner_id' => $_POST['partner_id'],
            'account' => $account['account'],
            'account_type' => $account['account_type']
        ]
    );
}





require "views/pages/executive_partners/edit_view.php";
