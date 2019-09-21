<?php

namespace App\Http\Controllers;

use App\Blood_bag;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Blood_receiver;

use App\Direct_donor;
use App\Donor_at_blood_bank;
use App\External_blood_bank;



class bloodbankmanagementController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

 /**   public function adminlogin(){
            return view('frontend.login.adminlogin');
    }
    public function adminregister(){
        return view('frontend.reg.adminreg');
    }
*/
    public function admindashboard(){

        return view('frontend.dash.admindash');
    }

    public function blood_receiver_form(){

        return view('frontend.dash.bloodreceiverform');
    }



    public function donor_to_people(){
        $direct_donor = Direct_donor::all()->toArray();
    	return view('frontend.donor_to_people', compact('direct_donor'));
    }
    public function donor_at_bloodbank(){
    	$donor_at_blood_bank = Donor_at_blood_bank::all()->toArray();
        return view('frontend.donor_at_bloodbank', compact('donor_at_blood_bank'));
    }

    public function bloodbank(){
        $external_blood_bank = External_blood_bank::all()->toArray();
        return view('frontend.bloodbank', compact('external_blood_bank'));
    }

    public function blood_receiver(Request $request){
    	
        $N_ID = Blood_receiver::select('NID')->pluck('NID');
        $reasonary = Blood_receiver::select('reason')->pluck('reason');
        $N_ID1 = $_POST['NID'];
        $reasonnew = $_POST['reason'];
        $b = 0;
        for($i=0;$i<= count($N_ID)-1;$i++){
        if($N_ID1==$N_ID[$i]){
            if($reasonnew=='road_accident' && $reasonary[$i]=='road_accident'){
                $b=$b+1;
                break;
            }
            elseif ($reasonnew=='road_accident' && $reasonary[$i]=='child_delivery'){
                $b=$b+1;
                break;
            }
            elseif ($reasonnew=='road_accident' && $reasonary[$i]=='heart_operation'){
                $b=$b+0;
                break;
            }
            elseif($reasonnew=='child_delivery' && $reasonary[$i]=='child_delivery'){
                $b=$b+1;
                break;
            }
            elseif ($reasonnew=='child_delivery' && $reasonary[$i]=='heart_operation'){
                $b=$b+1;
                break;
            }
            elseif ($reasonnew=='child_delivery' && $reasonary[$i]=='road_accident'){
                $b=$b+0;
                break;
            }
            elseif($reasonnew=='heart_operation' && $reasonary[$i]=='child_delivery'){
                $b=$b+1;
                break;
            }
            elseif ($reasonnew=='heart_operation' && $reasonary[$i]=='heart_operation'){
                $b=$b+0;
                break;
            }
            elseif ($reasonnew=='heart_operation' && $reasonary[$i]=='road_accident'){
                $b=$b+0;
                break;
            }

        }}
        /**   $b=$b+1; for fraud
         *    $b=$b; for not fraud
         */

        if($b>0){
            echo "<h1 align='center'>Fraud condition true</h1>";
            echo "<br><h1 align='center'>Please Deal Manually</h1>";
        }
        else {
            Blood_receiver::create([
            'NID' => request('NID'),
            'branch_id' => request('branch_id'),
            'blood_type' => request('blood_type'),
            'blood_bag_quantity' => request('blood_bag_quantity'),
            'reason' => request('reason')

        ]);
            return view('frontend.dash.patientinfo');
        }


        


    /**    Blood_receiver::create([
            'NID' => request('NID'),
            'branch_id' => request('branch_id'),
            'blood_type' => request('blood_type'),
            'blood_bag_quantity' => request('blood_bag_quantity'),
            'reason' => request('reason')

        ]); */
    }

    public function patientinfostore(Request $request){
        $patientinformation= DB::table('patients')->insert([
            'name' => request('name'),
            'gender' => request('gender'),
            'age' => request('age'),
            'blood_type' => request('blood_type'),
            'quantity' => request('quantity'),
            'reason' => request('reason'),
            'receiver_NID' => request('receiver_NID')
        ]);

        echo "<h1 align='center'>Patient Information Stored</h1>";

    }

    public function checkdonorform(){
        return view('frontend.dash.collectblood');
    }

    public function checkdonor(Request $request){
        $all_donor= Donor_at_blood_bank::all();
        $donor_NID= Donor_at_blood_bank::select('NID')->pluck('NID');
        $donor_email= Donor_at_blood_bank::select('email')->pluck('email');
        $donor= $_POST['nid_email'];
        $blood= $_POST['blood_type'];
        $p=0;
        $i=0;
        while($i<=count($donor_NID)-1){
            if($donor == $donor_NID[$i] || $donor == $donor_email[$i]){
                $p++;
                break;
            }
            else{

                $i++;
            }

        }

        if($p!=0){
            $donorinfo=Donor_at_blood_bank::select('NID', 'name', 'blood_type', 'phone_no', 'last_donation_date')->where('email','=',$donor)->orWhere('NID','=',$donor)->get();
            $bloodinfo=Blood_bag::select('bag_id','branch_id','blood_type','stored_date','exp_date')->where('blood_type','=',$blood)->where('received_by','=','')->get()->toArray();
            return view('frontend.dash.collectbloodinfo',compact('bloodinfo'))->with('donorinfo', $donorinfo);
        }
        else
            return view('frontend.dash.collectblood');

    }

    public function bloodbagform(){
        return view('frontend.dash.bloodbag');
    }

    public function bloodbagstore(){
        Blood_bag::create([
            'branch_id' => request('branch_id'),
            'blood_type' => request('blood_type'),
            'stored_date' => request('stored_date'),
            'exp_date' => request('exp_date'),
            'donated_by' => request('donated_by'),

        ]);
        return view('frontend.dash.bloodbag');
    }
}
