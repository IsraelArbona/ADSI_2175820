<?php

namespace App\Exports;

use App\User;

use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UserExport implements FromCollection,Responsable,WithHeadings,ShouldAutoSize,WithEvents
{
    use Exportable;

    private $fileName = 'Usuario-Lista.xlsx';
    private $writerType = Excel::XLSX;

    private $headers = [ 'Content-type' => 'text/cvs',];
    
    public function tittle(): string
    {
        return 'Reporte de usuarios';
    }

    public function collection()
    {
        $users = User::select(['users.id','users.name','users.email'])->get();
        return $users;
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nom. Usuario',
            'Correo',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $cellRange = 'A1:C1';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->setAutoFilter($cellRange);
            },
        ];
    }
    
}



