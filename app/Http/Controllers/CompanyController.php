<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use Image;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company')->with('companies', Company::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $data=$request->all();
        $data['logo'] = $this->logoupload($request);
        Company::create($data);
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company=Company::where('id',$company->id)->first();
        return view('edit_company')->with('companies', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $data=$request->all();
        if(!empty($data['logo']))
        {
            unlink("image/logo/".$company->logo);
            $data['logo'] = $this->logoupload($request);
        }
        $company->update($data);
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        unlink("image/logo/".$company->logo);
        $company->delete($company->id);
        return redirect()->route('company.index');
    }

    protected function logoupload(Request $request)
    {
        if($request->hasFile('logo'))
        {
            $folder='image/logo/';
            $logo=$request->file('logo');
            $filename=time().'-'.$logo->getClientOriginalName();
            $path=public_path($folder.$filename);
            //$path=($folder.$filename);
            Image::make($logo->getRealPath())->resize('100','100')->save($path);
            $path_images=$folder.$filename;
        }
        return $filename;
    }
}
