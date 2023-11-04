<?php

namespace App\Exports;

use App\Models\armoirs;
use App\Models\exceldatas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;


    public function __construct($id)
    {
        $this->id = $id;
    }
    public function collection()
    {
        // Assuming 'exceldatas' is your model
        return $result = armoirs::where('user_id', $this->id)
        ->select(
        'numero',
        'arrondissement',
        'secteur',
        'latitude',
        'longitude',
        'source',
        'conformite',
        'observation',
        'type',
        'numeroCompteur',
        'tension',
        'typeCommande',
        'nombreDepart',
        'puissance',
        'image')
        ->get();
    }


    public function headings(): array
    {
        return [
            "Numero",
            'Arrondissement',
            'secteur',
            'latitude',
            'longitude',
            'source',
            'Conformite a la NF C17200',
            'observation',
            'type',
            'Numero de compteur',
            'Calibre',
            'Tension',
            'Type de commande',
            'Nombre de depart',
            'Puissance',
            'image'
        ];
    }
}
