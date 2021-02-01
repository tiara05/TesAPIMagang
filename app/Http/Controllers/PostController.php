<?php
 
namespace App\Http\Controllers;
 
use App\Post;
use Illuminate\Support\Facedes\DB;

class PostController extends Controller
{
    public function index()
    {
        $getData = Post::OrderBy("id", "DESC")->paginate(1);
        $limit = Post::count();
 
        $out = [
            "select" => "['id','firstname','lastname','gender','status','email','city','address','phone','registered_date']",
            "limit" => $limit,
            "Semua Data" => $getData
        ];
 
        return response()->json($out, 200);
    }
}