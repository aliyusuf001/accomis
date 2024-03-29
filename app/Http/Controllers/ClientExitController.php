<?php

namespace App\Http\Controllers;

use App\Models\Cbo;
use Illuminate\Http\Request;
use App\Models\ClientExitQuestionare;
use App\Models\HealthFacility;
use App\Models\Spo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ClientExitController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function client_exit()
    {
        if (Gate::denies('admin_spo_cbo')) {
            abort('404');
        }
        $user = Auth::user();
        $clients = ClientExitQuestionare::all();
        $health_facilities = HealthFacility::where('CBO_Email', $user->email)->get();
        return view('backend.clientexit.clientexit')->with([
            'clients' => $clients,
            'health_facilities'=> $health_facilities
        ]);
    }

    public function client_exit_add(Request $request)
    {
        if (Gate::denies('admin_spo_cbo')) {
            abort('404');
        }

        $month = date('M');
        $day = date('d');
        $year = date('Y');
        $user = Auth::user();
        $email = $user->email;

        $cbo = DB::table('cbos')->where('email', $email)
            ->get();

        $state = '';
        $spo_email = '';
        //loop for parsing fetched authenticated user's data
        foreach ($cbo as $cbo_detail) {
            $state = $cbo_detail->state;
        }
        $spo = DB::table('spos')->where('state', 'LIKE', "%{$state}%")
            ->get();
        foreach ($spo as $spo_detail) {
            $spo_email = $spo_detail->email;
        }

        $submit_client_form = ClientExitQuestionare::create([
            'respondant_name' => $request->res_name,
            'child_name' => $request->child_name,
            'respondant_category' => $request->res_category,
            'respondant_address' => $request->address,
            'respondant_number' => $request->phone_no,
            'health_facility_of_interview' => $request->health_facility_of_interview,
            'respondant_occupation' => $request->occupation,
            'respondant_education' => $request->educational_bg,
            'purpose_of_comming' => $request->what_did_you_come_for,
            'treatment_received' => $request->what_treatment_did_you_recieve,
            'frequency_of_visit_3months' => $request->frequency_of_visit,
            'llin_reception' => $request->recieve_llin,
            'llin_reception_location' => $request->llin_recieve_location,
            'frequency_of_llin_reception' => $request->llin_frequency,
            'ipt_reception' => $request->recieve_ipt,
            'frequency_of_ipt_reception' => $request->ipt_frequency,
            'sulfadoxin_pyrimethamine_intake' => $request->swallow_sp_sulfadoxin,
            'sulfadoxin_nonintake_reasons' => $request->services,
            'child_smc_reception' => $request->smc,
            'child_smc_reception_age' => $request->smc_reception_age,
            'malaria_test' => $request->malaria_test,
            'malaria_test_reason' => $request->malaria_reason,
            'malaria_test_period' => $request->malaria_test_period,
            'abc_therapy_reception' => $request->arthemisinin_based_therapy,
            'recieved_medication' => $request->arthemisinin_therapy_false,
            'medication_completion_status' => $request->arthemisinin_drug_finish,
            'abc_input_details' => $request->abc_input_details,
            'service_satisfaction_level' => $request->satisfaction_level,
            'service_satisfaction_level_reason' => $request->insatisfaction_cause,
            'service_satisfaction_aid' => $request->customer_help,
            'facility_improvment_suggestion' => $request->customer_help_improve,
            'auth_user_email' => $user->email,
            'spo' => $spo_email,
            'state' => $state,
            'month' => $month,
            'year' => $year,
            'day' => $day,
        ]);
    }
}
