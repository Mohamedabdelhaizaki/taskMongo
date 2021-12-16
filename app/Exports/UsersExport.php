<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct($orderBy,$type)
    {
        $this->orderBy = $orderBy;
        $this->type = $type;
    }

    public function collection()
    {
        $orderBy = $this->orderBy;
        $type = $this->type;

        $usersData = DB::collection('users')
            ->select('firstName','LastName','fullName','gender','numberOfMessages','age','created_at')
            ->orderBy($orderBy, $type)
            ->get();


            $newData = new Collection;
            for($i = 0; $i < count($usersData); $i++){
                
                if(!empty($usersData[$i])){
                    if(!empty($usersData[$i]['created_at'])){
                        $createdTime = $usersData[$i]['created_at']->toDateTime()->format('Y-m-d h:i:s a');
                        }else{
                            $createdTime=null;
                        }
                    $newData->push([
                        'firstName' => $usersData[$i]['firstName'],
                        'LastName' => $usersData[$i]['LastName'],
                        'fullName' => $usersData[$i]['fullName'],
                        'gender' => $usersData[$i]['gender'],
                        'numberOfMessages' => $usersData[$i]['numberOfMessages'],
                        'age' => $usersData[$i]['age'],
                        'created_at'=>$createdTime

                    ]);
                }

            }

        return $newData;
    }

    public function headings(): array

    {

        return [
            'First Name',
            'Last Name',
            'Full Name',
            'Gender',
            'Number Of Messages',
            'Age',
            'Creation Date',
        ];

    }

}
