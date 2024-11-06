<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;

class AppointmentsTableSeeder extends Seeder
{
    public function run()
    {
        // IDs dos médicos e pacientes já cadastrados
        $doctorId = User::where('role', 'doctor')->first()->id;
        $patients = User::where('role', 'patient')->pluck('id');

        // Criando agendamentos
        foreach ($patients as $patientId) {
            Appointment::create([
                'doctor_id' => $doctorId,
                'patient_id' => $patientId,
                'appointment_date' => Carbon::now()->addDays(rand(1, 10)),
                'status' => 'pending'
            ]);
        }
    }
}
