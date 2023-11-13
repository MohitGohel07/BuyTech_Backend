<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Models\product;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    public function importExport()
    {
        return view('admin.csv');
    }

    // public function export() 
    // {
    //     return Excel::download(new UsersExport, 'pop_report.xlsx');
    // }

    public function exportdemo()
    {
        $filename = 'product.xlsx';
        $path = public_path('csv/' . $filename);
        return response()->download($path, $filename, [
            'Content-Type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
       
    }
    

    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file);
        return back()->with('success', 'Import Successfull.');
    }
    // function csvToArray($filename = '', $delimiter = ',')
    // {
    //     if (!file_exists($filename) || !is_readable($filename))
    //         return false;

    //     $header = null;
    //     $data = array();
    //     if (($handle = fopen($filename, 'r')) !== false) {
    //         while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
    //             if (!$header)
    //                 $header = $row;
    //             else
    //                 $data[] = array_combine($header, $row);
    //         }
    //         fclose($handle);
    //     }

    //     return $data;
    // }

    // public function import(Request $req)
    // {
    //     $name = time() . '.' . $req->file('file')->Extension();

    //     $req->file->move(public_path('csv'), $name);

    //     $path = public_path('csv/' . $name);

    //     $customerArr = $this->csvToArray($path);

    //     for ($i = 0; $i < count($customerArr); $i++) {
    //         // dd($customerArr[$i]);
    //         product::insert($customerArr[$i]);
            
    //     }

    //     return back()->with('success', 'Import Successfull.');
    // }
}
