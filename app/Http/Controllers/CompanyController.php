<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Auth;
use Session;
use DB;
use Clarkeash\Doorman\Facades\Doorman;

class CompanyController extends Controller
{

    public function __construct() {
        //$this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = DB::table('companies')->get();
        return view('admin.companies', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        /*$invite = Doorman::generate()->uses(100)->make();*/
        $invite = DB::table('invites')->get();
        return view('admin.companies-create', ['roles'=>$roles,'invites'=>$invite]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        foreach($data['roles'] as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();
            foreach($data['invites'] as $invite){
                DB::table('companies')->insert([
                    'company_name'=> $data['name'],
                    'address'=> $data['address'],
                    'tel_num'=> $data['telnum'],
                    'fax_num'=> $data['faxnum'],
                    'website'=> $data['website'],
                    'role_name'=> $role_r,
                    'invite_code'=> $invite
                ]);      
            }
        }
        return redirect()->route('companies.index')
            ->with('flash_message',
             'Company added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        DB::table('companies')->where('id', $id)->delete();
        return redirect()->route('companies.index')
            ->with('flash_message',
             'Company deleted!');
    }
}
