<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use App\Donor_at_blood_bank;
use Illuminate\Http\Request;

class smsController extends Controller
{
    public function smsform(Request $request){

        $donor_to_send_sms = Donor_at_blood_bank::all()->toArray();
        return view('frontend.dash.sendsms', compact('donor_to_send_sms'));
    }

    public function sendsms(){
        $mobile_number = $_POST['phonenumber'];
        $message = $_POST['message'];

        onnorokom_sms(['message' => $message, 'mobile_number' => $mobile_number]);

        echo "<h1> SMS sent successfully <br>"."receiver number: ".$mobile_number." Message: ".$message;
    }
}
