<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class ReportApiController extends Controller
{
    // use ApiResponseTrait;
    //
    public function index(Request $request){

        $reports = Report::all();
        return  response([
            'reports'=>$reports
        ],200);

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

        return view('backend.pages.reports.create');

    }

    public function store(Request $request){
        $data['Reason_for_THHC']   =$request->input('Reason_for_HHC');
        $data['Information_from']   =$request->input('Information_from');
        $data['Temp']  =$request->input("Temp");
        $data['Oral']  =$request->input('Oral');
        $data['Ear'] =$request->input('Ear');
        $data['Axillary']=$request->input('Axillary');
        $data['Rectal']=$request->input('Rectal');
        $data['Regular']=$request->input('Regular');
        $data['irregular']=$request->input('irregular');
        $data['Blood_Pressure']=$request->input('Blood_Pressure');
        $data['Pulse_Rate']=$request->input('Pulse_Rate');
        $data['Standing']=$request->input('Standing');
        $data['Sitting']=$request->input('Sitting');
        $data['Lying']=$request->input('Lying');
        $data['R_Arm']=$request->input('R_Arm');
        $data['R_Wrist']=$request->input('R_wrist');
        $data['R_Leg']=$request->input('R_Leg');
        $data['R_arm1']=  $request->input('R_arm');
        $data['R_wrist1'] =$request->input('R_wrist');
        $data['R_leg1'] =$request->input('R_leg');
        $data['Respiration']=$request->input('Respiration');
        $data['Oxygen_Saturation']=$request->input('Oxygen_Saturation');
        $data['Height']=$request->input('Height');
        $data['Weight']=$request->input('Weight');
        $data['Actual']=$request->input('Actual');
        $data['Estimated']=$request->input('Estimated');
        $data['ORIENTATION']=$request->input('ori');
        $data['Pain']=$request->input('pain');
        $data['ALLERGIES']=$request->input('ALLERGIES');
        $data['Medication']=$request->input('Medication');
        $data['reaction_medication']=$request->input('reaction_med');
        $data['Food']=$request->input('Food');
        $data['reaction_type_food']=$request->input('reaction_type_food');
        $data['reaction_type_medication']=$request->input('reaction_type_med');
        $data['reaction_food']=$request->input('reaction_food');
        $data['signed']=$request->input('signed');
        $data['copy_patient']=$request->input('copy_patient');
        $data['THHC_Working_Hours']=$request->input('THHC_Working_Hours');
        $data['THHC_Discharge_plan']=$request->input('THHC_Discharge_plan');
        $data['THHC_disciplines']=$request->input('THHC_disciplines_involve');
        $data['Service_Charges']=$request->input('Service_Charges');
        $data['Emergency_Telephone_Numbers']=$request->input('Emergency_Telephone_Numbers');
        $data['Visit_Frequency']=$request->input('Visit_Frequency');
        $data['signedby']=$request->input('signedby');
        $data['Emergency_Plan']=$request->input('Emergency_Plan');
        $data['signature']=$request->input('doctor_name');
        $report= Report::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Report Created Successfully',
            'report' => $report,
        ]);

    }
        public function edit(){

    }

    public function update(Request $request , $id){
        $report =  Report::findOrFail($id);
        $data['Reason_for_THHC']   =$request->input('Reason_for_HHC');
        $data['Information_from']   =$request->input('Information_from');
        $data['Temp']  =$request->input("Temp");
        $data['Oral']  =$request->input('Oral');
        $data['Ear'] =$request->input('Ear');
        $data['Axillary']=$request->input('Axillary');
        $data['Rectal']=$request->input('Rectal');
        $data['Regular']=$request->input('Regular');
        $data['irregular']=$request->input('irregular');
        $data['Blood_Pressure']=$request->input('Blood_Pressure');
        $data['Pulse_Rate']=$request->input('Pulse_Rate');
        $data['Standing']=$request->input('Standing');
        $data['Sitting']=$request->input('Sitting');
        $data['Lying']=$request->input('Lying');
        $data['R_Arm']=$request->input('R_Arm');
        $data['R_Wrist']=$request->input('R_wrist');
        $data['R_Leg']=$request->input('R_Leg');
        $data['R_arm1']=  $request->input('R_arm');
        $data['R_wrist1'] =$request->input('R_wrist');
        $data['R_leg1'] =$request->input('R_leg');
        $data['Respiration']=$request->input('Respiration');
        $data['Oxygen_Saturation']=$request->input('Oxygen_Saturation');
        $data['Height']=$request->input('Height');
        $data['Weight']=$request->input('Weight');
        $data['Actual']=$request->input('Actual');
        $data['Estimated']=$request->input('Estimated');
        $data['ORIENTATION']=$request->input('ori');
        $data['Pain']=$request->input('pain');
        $data['ALLERGIES']=$request->input('ALLERGIES');
        $data['Medication']=$request->input('Medication');
        $data['reaction_medication']=$request->input('reaction_med');
        $data['Food']=$request->input('Food');
        $data['reaction_type_food']=$request->input('reaction_type_food');
        $data['reaction_type_medication']=$request->input('reaction_type_med');
        $data['reaction_food']=$request->input('reaction_food');
        $data['signed']=$request->input('signed');
        $data['copy_patient']=$request->input('copy_patient');
        $data['THHC_Working_Hours']=$request->input('THHC_Working_Hours');
        $data['THHC_Discharge_plan']=$request->input('THHC_Discharge_plan');
        $data['THHC_disciplines']=$request->input('THHC_disciplines_involve');
        $data['Service_Charges']=$request->input('Service_Charges');
        $data['Emergency_Telephone_Numbers']=$request->input('Emergency_Telephone_Numbers');
        $data['Visit_Frequency']=$request->input('Visit_Frequency');
        $data['signedby']=$request->input('signedby');
        $data['Emergency_Plan']=$request->input('Emergency_Plan');
        $data['signature']=$request->input('doctor_name');

        $report->update($data);
        return response()->json([
            'status'=>true,
            'data'=>$report,
            'message' => 'Report Updated Successfully',
        ]);


    }

    public function destroy($id)
{
    $report = Report::findOrFail($id);
    $report->delete();
    return response()->json([
        'status'=>true,
        'message' => 'Request Information deleted Successfully',
    ]);
    }

    public function restore(){

    }

    public function forceDelete(){

    }
}
