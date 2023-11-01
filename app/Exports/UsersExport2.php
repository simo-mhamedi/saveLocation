<?php

namespace App\Exports;

use App\Models\armoirs;
use App\Models\exceldatas;
use App\Models\points;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport2 implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;
    protected $userId;


    public function __construct($id)
    {
        $this->id = $id;
    }


    public function collection()
    {
        // Assuming 'exceldatas' is your model
        return $result = points::Where('user_id', $this->id)->
        select([
            'arrondissement',
            'secteur',
            'code',
            'categorie',
            'typeReseux',
            'etatReseau',
            'etatCable',
            'nf',
            'typeSupport',
            'nombreConsole',
            'etatSupport',
            'dispositionSupport',
            'hauteurSupport',
            'etatLuminaire',
            'puissanceA',
            'puissanceB',
            'puissanceC',
            'puissanceD',
            'longitude',
            'latitude',
            'ageSupport',
            'support',
            'ageReseau',
            'reseau',
            'image',
        ])->get();
    }


    public function headings(): array
    {
        return [
            'Arrondissement',
            'Secteur cartographie (Zone)',
            'Code du point lumineux',
            'Categorie d\'elairage',
            'Type du reseau',
            'Etat du reseau',
            'Etat du câble au pieds du mât',
            'NF 17 200',
            'Type du support',
            'Nombre de Console',
            'Etat du support',
            'Disposition du support',
            'Hauteur du support',
            'Etat du luminaire',
            'Puissance lampe A',
            'Puissance lampe B',
            'Puissance lampe D',
            'Puissance lampe D',
            'Latitude',
            'Longitude',
            'Age support',
            'Support',
            'Age reseau',
            'Reseau',
            'image',
        ];
    }
}
