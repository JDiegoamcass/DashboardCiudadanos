<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $citizens;
    public $cities;

    public function __construct($citizens, $cities)
    {
        $this->citizens = $citizens;
        $this->cities = $cities;
    }

    public function build()
    {
        return $this->subject('Reporte de Ciudadanos y Ciudades')
            ->view('mail.report');
    }
}