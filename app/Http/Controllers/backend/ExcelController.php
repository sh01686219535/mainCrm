<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\LeadsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function lead_excel(Request $request)
    {
        if ($request->hasFile('excel_file')) {
            try {
                Excel::import(new LeadsImport, $request->file('excel_file'));
            } catch (\Exception $e) {
                return back()->with('error', 'Failed to import leads from Excel: ' . $e->getMessage());
            }
        }
        return back()->with('success','Lead Imported Successfully');
    }

}
