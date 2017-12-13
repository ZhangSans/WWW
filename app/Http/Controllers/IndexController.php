<?php
/**
 * Created by PhpStorm.
 * User: z_san
 * Date: 2017/12/13
 * Time: 16:40
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller{
    public function index()
    {
        //查看数据库是否连接成功
        $pdo=DB::connection()->getPdo();
        dd($pdo);
    }


}


