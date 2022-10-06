<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row):User
    {
        return new User([
            //
            'username'=>$row['0'],
            'name'=>$row['0'],
            'gender'=>($row['1']=='m')?'Male':'Female',
            'address'=>$row['2'].' '.$row['4'],
            'zip_code'=>$row['3'],
            'phone_number'=>$row['5']?'0623444':$row['5'],
            'email'=>$row['6'],
            'birth_day'=>date('Y-m-d ', strtotime($row['8'])),
            'password'=>Hash::make('password'),
            'mobile_number'=>$row['5'],

        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }


    public function chunkSize(): int
    {
        return 1000;
    }

    /*public function rules(): array
    {
        return [
            '5' => ['required'],
        ];
    }*/
}
