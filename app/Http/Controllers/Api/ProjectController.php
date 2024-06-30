<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projList = Project::with(['type', 'technologies'])->get();
        $data = [
            'result' => $projList,
        ];
        return response()->json($data);
    }
}
