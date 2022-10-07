<?php

namespace App\Imports;

use App\Models\Child;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;

class ChildImport implements ToModel ,WithChunkReading, WithBatchInserts,ShouldQueue
{

    private $users;

    public function __constructor(){
        $this->users=User::all();
    }
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {

        return new Child([
            'name'=>$row['0'],
            'birth_day'=>date('Y-m-d h:m:s ', strtotime($row['1'])),
            'gender'=>'Male',
            'user_id'=>$this->get_user($row['2'])->id
        ]);
    }



    public function get_user($username){
        $users=User::all();
        $ides=$users->filter(function($item) use ($username) {
           if($item->username==$username){
               return $item->id;
           };
      });
      return $ides->first();
    }

    public function chunkSize(): int
    {
        return 100;
    }

    public function batchSize(): int
    {
        return 100;
    }
}
