<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use DB;
use App\Jobs\AddFileDB;

use App\Models\Document;

class CategoryController extends Controller
{
    public function index()
    {
        $documents = Document::join('categories', 'categories.id', '=', 'documents.category_id')
                        ->select('documents.*', 'categories.name as category_name')
                        ->get();
        return view('welcome')->with(compact('documents'));
    }

    public function upload_file(Request $request)
    {
        $json = file_get_contents(storage_path("data/2023-03-28.json"));
        $content = json_decode($json);
        $data = $content->documentos;
        AddFileDB::dispatch($data);
        return view('itens')->with(compact('data'));
    }

    public function sendJob()
    {
        $exitCode = Artisan::call('queue:work --stop-when-empty', []);
        return redirect('/');
    }

    public function truncateDocuments()
    {
        Document::truncate();
        return back();
    }
}
