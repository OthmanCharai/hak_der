<?php

namespace App\Imports;

use App\Models\Child;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;

class ChildImport implements ToModel ,SkipsEmptyRows,WithValidation
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new Child([
            //
            'name'=>$row['11'],
            'birth_day'=>$row['12'],
        ]);
    }

    public function rules(): array
    {
        return [
            '11' => [
                'required',

            ],

        ];
    }
}
