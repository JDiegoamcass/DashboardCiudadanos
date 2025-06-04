<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;
use App\Models\City;
use App\Mail\ReportMail;
use Illuminate\Support\Facades\Mail;

class ReportCitizenController extends Controller
{
public function send_report(Request $request)
{
    $user = $request->user();
    $email = $user->email;

    $citizens = \App\Models\Citizen::all();
    $cities = \App\Models\City::all();

    \Mail::to($email)->send(new \App\Mail\ReportMail($citizens, $cities));

    return back()->with('success', 'Reporte enviado exitosamente.');
}
}