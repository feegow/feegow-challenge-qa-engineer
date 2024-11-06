<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return Appointment::with(['doctor', 'patient'])->get();
    }

    public function store(Request $request)
    {
        try{
            $appointment = Appointment::create($request->only(['doctor_id', 'patient_id', 'appointment_date', 'status']));
            return response()->json($appointment, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 400);
        }
    }

    public function show($id)
    {
        try{
            $appointment = Appointment::with(['doctor', 'patient'])->findOrFail($id);
            return response()->json($appointment);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 404);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $appointment = Appointment::findOrFail($id);
            $appointment->update($request->only(['status', 'appointment_date']));
            return response()->json($appointment);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 404);
        }
    }

    public function destroy($id)
    {
        Appointment::destroy($id);
        return response()->json(null, 204);
    }
}
