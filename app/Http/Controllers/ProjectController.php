<?php

namespace App\Http\Controllers;

use App\Company;
use App\Project;
use App\ProjectType;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Auth::user()->company->projects;
        $recent = Project::orderBy('created_at', 'desc')->where('company_id', Auth::user()->company->id)->take(3)->get();
//        $recent = DB::table('projects')->where('company_id', Auth::user()->company->id)->orderBy('created_at', 'desc')->take(3)->get();
        $users = DB::table('users')->where('company_id', Auth::user()->company->id)->get();
        $clients = Company::where('type_id' , 3)->get();
        $projecttypes = ProjectType::all();

        return view('Project.projects', compact('projects', 'recent', 'users', 'projecttypes', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $words = explode(" ", request('name'));
        $code = "";

        foreach($words as $word) {
            $code .= $word[0];
        }

        $project = Project::create([
            'company_id' => $user->company->id,
            'name' => request('name'),
            'code' => strtoupper($code),
            'description' => request('description'),
            'color' => request('color'),
            'responsible_id' => $user->id,
            'client_id' => request('client'),
            'projecttype_id' => request('type')
        ]);



        foreach(request('users') as $user) {
            DB::table('project_user')->insert(array(
                'user_id' => $user,
                'project_id' => $project->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )
            );
        }

        return redirect('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = DB::table('projects')->where('code', $id)->get();

        dd($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
