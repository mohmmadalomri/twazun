<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Report;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class ReportController extends Controller
{
    //
    public function index(Request $request){

        $reports = Report::all();
        return view('backend.pages.reports.index',compact('reports'));

//    $reports=[ 'Admission-Date: '.$request->input("Admission-Date"),
//    'Admission-Diagnosis: '.$request->input('Admission-Diagnosis')  ,
//   ' Admitting-Staff: '    .$request->input('Admitting-Staff')  ,
//      'Physician:'                       .$request->input('Physician')  ,
//        'SN :'                     .$request->input('SN')  ,
//           'PT: '                  .$request->input('PT')  ,
//              'RT: '               .$request->input('RT')  ,
//                'speci_other: '             .$request->input('speci_other')  ,
//                 'Reason-for-THHC: '            .$request->input('Reason-for-THHC')  ,
//                  'Information-from-Patient'           .$request->input('Information-from-Patient')  ,
//                   'Information-from-Family: '          .$request->input('Information-from-Family')  ,
//                   'Information-from-other :'         .$request->input('Information-from-other')  ,
//                      'Temp : '       .$request->input('Temp')  ,
// ];
// return $reports;
    }
    public function viewPdf(){
        $report= Report::all()->last();
        $pdf = Pdf::loadView('Pdf.viewreport',compact('report'))->setPaper('a2');
         return $pdf->stream();
    }

    public function show(){

    }

    public function create(){
        $doctors = Doctor::all();
        $admins = Admin::all();
        $patients = Patient::all();

        return view('backend.pages.reports.create',compact('admins','doctors','patients'));

    }

    public function store(Request $request){
  $reports= new Report;
  $reports->Admission_Date=$request->input('date');
  $reports->doctor_name=$request->input('doctor_name');
  $reports->patient_name=$request->input('patient_name');
  $reports->admin_id=1;
  $reports->Admission_Diagnosis=$request->input('admission_diagnosis');
  $reports->Admitting_Staff=$request->input('Admitting_Staff');
  $reports->Physician=$request->input('Physician');
  $reports->Specialty=$request->input('Specialty');
  $reports->Reason_for_THHC=$request->input('Reason_for_HHC');
  $reports->Information_from=$request->input('Information_from');
  $reports->Temp=$request->input("Temp");
  $reports->Oral=$request->input('Oral');
  $reports->Ear=$request->input('Ear');
  $reports->Axillary=$request->input('Axillary');
  $reports->Rectal=$request->input('Rectal');
  $reports->Regular=$request->input('Regular');
  $reports->irregular=$request->input('irregular');
  $reports->Blood_Pressure=$request->input('Blood_Pressure');
  $reports->Pulse_Rate=$request->input('Pulse_Rate');
  $reports->Standing=$request->input('Standing');
  $reports->Sitting=$request->input('Sitting');
  $reports->Lying=$request->input('Lying');
  $reports->R_Arm=$request->input('R_Arm');
  $reports->R_Wrist=$request->input('R_wrist');
  $reports->R_Leg=$request->input('R_Leg');
  $reports->R_arm1=$request->input('R_arm');
  $reports->R_wrist1=$request->input('R_wrist');
  $reports->R_leg1=$request->input('R_leg');
  $reports->Respiration=$request->input('Respiration');
  $reports->Oxygen_Saturation=$request->input('Oxygen_Saturation');
  $reports->Height=$request->input('Height');
  $reports->Weight=$request->input('Weight');
  $reports->Actual=$request->input('Actual');
  $reports->Estimated=$request->input('Estimated');
  $reports->ORIENTATION=$request->input('ori');
  $reports->Pain=$request->input('pain');
  $reports->ALLERGIES=$request->input('ALLERGIES');
  $reports->Medication=$request->input('Medication');
  $reports->reaction_medication=$request->input('reaction_med');
  $reports->Food=$request->input('Food');
  $reports->reaction_type_food=$request->input('reaction_type_food');
  $reports->reaction_type_medication=$request->input('reaction_type_med');
  $reports->reaction_food=$request->input('reaction_food');
  $reports->signed=$request->input('signed');
  $reports->copy_patient=$request->input('copy_patient');
  $reports->THHC_Working_Hours=$request->input('THHC_Working_Hours');
  $reports->THHC_Discharge_plan=$request->input('THHC_Discharge_plan');
  $reports->THHC_disciplines=$request->input('THHC_disciplines_involve');
  $reports->Service_Charges=$request->input('Service_Charges');
  $reports->Emergency_Telephone_Numbers=$request->input('Emergency_Telephone_Numbers');
  $reports->Visit_Frequency=$request->input('Visit_Frequency');
  $reports->signedby=$request->input('signedby');
  $reports->Emergency_Plan=$request->input('Emergency_Plan');
  $reports->signature=$request->input('doctor_name');
//  $reports->signature=$request->hasFile('image');
//   $file_ext=$request->image->getClientOriginalExtension() ;
//           $file_name=time().'.'.$file_ext;
//           $path='images/signatures';
//           $request->image->move($path,$file_name);
//           $reports->signature=$file_name;
   $reports->save();
 return redirect('/viewpdf');




}

    public function edit(){

    }

    public function update(){

    }

    public function destroy($id){
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->route('backend.reports.index');


    }


    public function restore(){

    }

    public function forceDelete(){

    }
}
