<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

/*function getHistoryServices() {
    $retVal = array();
    $customers = Customers::where('id' ,'>' ,0)->get();
    foreach($customers as $customer) {
        $retVal[strval($customer["id"])] = strval($customer["name"]);
    }
    return $retVal;
}
*/
class CustomerForm extends Form
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
