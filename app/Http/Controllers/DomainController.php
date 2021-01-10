<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;

class DomainController extends Controller
{
    public function index(){
        $domains = Domain::all();
        return view('pages.domain.index', compact('domains'));
    }
    public function show($domain){
        $domain = Domain::findOrFail($domain);
        return view('pages.domain.show', compact('domain'));
    }
    public function create(){
        return view('pages.domain.create', );
    }
    public function store(Request $request){
        $request->validate([
            'url' => 'required',
        ]);
        $domain = Domain::create($request->all());
        return redirect('domain/' . $domain->id);
    }
    public function edit($domainId){
        $domain = Domain::findOrFail($domainId);
        return view('pages.domain.edit', compact('domain'));
    }
    public function update(Request $request, $domain){
        $request->validate([
            'url' => 'required',
        ]);
        $domain = Domain::findOrFail($domain);
        $domain->update($request->all());

        return redirect('/domain');
    }
}
