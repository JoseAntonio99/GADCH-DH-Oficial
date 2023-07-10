<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AceroHuacaretaCarahuaychu8DOriental;

class AceroHuacaretaCarahuaychu8DOrientalController extends Controller
{

    /**
     * To no redirect by URL's.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = AceroHuacaretaCarahuaychu8DOriental::all();

        $config = [
            'columns' => [null, null, null, null, null, null, null, null, null, ['orderable' => false], ['orderable' => false]],
            'lengthMenu' => [[ 5, 10, 15, 20, 25, -1 ], [5, 10, 15, 20, 25, "All" ]],
        ];

        $heads = [
            'Name of the Institution',
            'Reception Date',
            'CITE or Number',
            'Sender',
            'Addressee',
            'Reference',
            'Number of Sheets',
            'Folder Name and Year',
            'Observation',
            ['label' => 'PDF', 'no-export' => true, 'width' => 5],
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
        ];

        return view('crhcrtcrhych8drntl.index', compact('documents', 'config', 'heads' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $config = ['format' => 'YYYY/MM/DD'];

        return view('crhcrtcrhych8drntl.create', compact('config'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $documents = new AceroHuacaretaCarahuaychu8DOriental();

        $documents->name_of_the_institution = $request->get('name_of_the_institution');
        $documents->reception_date = $request->get('reception_date');
        $documents->cite_or_number = $request->get('cite_or_number');
        $documents->sender = $request->get('sender');
        $documents->addressee = $request->get('addressee');
        $documents->reference = $request->get('reference');
        $documents->number_of_sheets = $request->get('number_of_sheets');
        $documents->folder_name_and_year = $request->get('folder_name_and_year');
        $documents->observation = $request->get('observation');
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $file->move(public_path() . '/Acero Huacareta Carahuaychu 8D Oriental/', $file->getClientOriginalName());
            $documents->pdf = $file->getClientOriginalName();
        }

        $documents->save();

        return redirect('/crhcrtcrhych8drntl')->with('store', 'str');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $document = AceroHuacaretaCarahuaychu8DOriental::find($id);

        $config = ['format' => 'YYYY/MM/DD'];

        return view('crhcrtcrhych8drntl.edit', compact('document', 'config'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $document = AceroHuacaretaCarahuaychu8DOriental::find($id);

        $document->name_of_the_institution = $request->get('name_of_the_institution');
        $document->reception_date = $request->get('reception_date');
        $document->cite_or_number = $request->get('cite_or_number');
        $document->sender = $request->get('sender');
        $document->addressee = $request->get('addressee');
        $document->reference = $request->get('reference');
        $document->number_of_sheets = $request->get('number_of_sheets');
        $document->folder_name_and_year = $request->get('folder_name_and_year');
        $document->observation = $request->get('observation');

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $file->move(public_path() . '/Acero Huacareta Carahuaychu 8D Oriental/', $file->getClientOriginalName());
            $document->pdf = $file->getClientOriginalName();
        }

        $document->update();

        return redirect('/crhcrtcrhych8drntl')->with('edit', 'dt');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = AceroHuacaretaCarahuaychu8DOriental::find($id);
        $document->delete();

        return redirect('/crhcrtcrhych8drntl')->with('delete', 'dlt');
    }
}
