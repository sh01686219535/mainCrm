<?php

namespace App\Exports;

use App\Models\Lead;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LeadsExport implements FromView,ShouldAutoSize
{
    use Exportable;
    private $leads;

    
    public function __construct()
    {
        $this->leads = Lead::all();
    }
    public function view() : View
    {
        return view('backEnd.lead.lead_excel', [
            'leads' => $this->leads
        ]);
    }
}
