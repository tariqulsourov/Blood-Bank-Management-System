<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Blood_receiver;
use App\Donor_at_blood_bank;
use App\External_blood_bank;

class infoController extends Controller
{
    public function bloodtype(){

        $donorbloodtypewise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->get()->count('blood_type');

        $donorab1wise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->where('blood_type', 'AB+')->get()->count('blood_type');
        $donorab2wise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->where('blood_type', 'AB-')->get()->count('blood_type');
        $donora1wise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->where('blood_type', 'A+')->get()->count('blood_type');
        $donora2wise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->where('blood_type', 'A-')->get()->count('blood_type');
        $donorb1wise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->where('blood_type', 'B+')->get()->count('blood_type');
        $donorb2wise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->where('blood_type', 'B-')->get()->count('blood_type');
        $donoro1wise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->where('blood_type', 'O+')->get()->count('blood_type');
        $donoro2wise = DB::table('donor_at_blood_banks')
            ->select('blood_type','name')->where('blood_type', 'O-')->get()->count('blood_type');

        $ab1percent= ($donorab1wise/$donorbloodtypewise)*100;
        $ab2percent= ($donorab2wise/$donorbloodtypewise)*100;
        $a1percent= ($donora1wise/$donorbloodtypewise)*100;
        $a2percent= ($donora2wise/$donorbloodtypewise)*100;
        $b1percent= ($donorb1wise/$donorbloodtypewise)*100;
        $b2percent= ($donorb2wise/$donorbloodtypewise)*100;
        $o1percent= ($donoro1wise/$donorbloodtypewise)*100;
        $o2percent= ($donoro2wise/$donorbloodtypewise)*100;


        echo "<h1 align='center'>Blood Group wise donor Availability</h1>"."<h2 align='center'>Total: ".$donorbloodtypewise."<br><br>AB+: ".$donorab1wise." = ".$ab1percent."%"."<br><br>AB-: ".$donorab2wise." = ".$ab2percent."%"."<br><br>A+: ".$donora1wise." = ".$a1percent."%"."<br><br>A-: ".$donora2wise." = ".$a2percent."%"."<br><br>B+: ".$donorb1wise." = ".$b1percent."%"."<br><br>B-: ".$donorb2wise." = ".$b2percent."%"."<br><br>O+: ".$donoro1wise." = ".$o1percent."%"."<br><br>O-: ".$donoro2wise." = ".$o2percent."%";


    }

    public function agewiseform(){
        return view('frontend.information.enterage');
    }

    public function agewise(Request $request){
        $age1= $_POST['age1'];
        $age2= $_POST['age2'];
        $age_all= Donor_at_blood_bank::select('age')-> pluck('age');
        $a=0;
        $totaldonor=Donor_at_blood_bank::select('age')->get()->count('age');
        for($i=0;$i<=$totaldonor-1;$i++){
            if($age_all[$i]>=$age1 && $age_all[$i]<=$age2){
                $a = $a+1;
            }
            else{
                $a=$a;
            }
        }
        $percentige = ($a/$totaldonor)*100;
        return view('frontend.information.agewise')->with('a',$a)->with('percentige',$percentige)->with('age2',$age2)->with('age1',$age1)->with('totaldonor',$totaldonor);
    }


}
