<?php

namespace App\Imports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; 

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new product([
            'title'         =>$row['title'],   
            'description'    =>$row['description'], 
            'price'         =>$row['price'], 
            'image'          =>$row['image'], 
            'category_id'   =>$row['category_id'], 
            'gender_id'     =>$row['gender_id'], 
            'type_id'       =>$row['type_id'], 
        ]);
    }
}
