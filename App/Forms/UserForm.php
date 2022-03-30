<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

use App\Models\User;



function getHistoryServices() {
    $retVal = array();
    $users = Users::where('id' ,'>' ,0)->get();
    foreach($users as $user) {
        $retVal[strval($user["id"])] = strval($user["name"]);
    }
    return $retVal;
}

class UsersForm extends Form
{
    public function buildForm()
    {
        $this->add('name', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Name'
        ])
        ->add('email', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Email'
        ])
        ->add('phonenumber', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Phone Number'
        ])
        ->add('services', Field::SELECT, [
            'rules' => 'required',
            'label' => 'Services',
            'choices' => ['desktop' => "Desktop Repair", 'laptop' => "Laptop Repair", 'phone' => 'Phone Repair'],
            'empty_value' => 'Select Repair'
        ])
        ->add('submit', 'submit',[
            'label' => 'Submit'
        ]);
    }
}
