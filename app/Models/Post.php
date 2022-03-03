<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;



    public static function storeData(){
        $results=DB::table('categories')->get();
            $dataArray=[];
            foreach($results as $val){
                $dataArray[]=[
                    'categoryid'=>$val->id,
                    'name'=>$val->name
                ];
            }
            // dd($dataArray);

            $results=DB::table('posts')->insert($dataArray);
    }
}
