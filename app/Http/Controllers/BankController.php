<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BankController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $welcomeMessage = 'Bank'; 
        $banks = Bank::paginate(10);
        return view('backend.pages.bank.list',compact('banks','welcomeMessage','user'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama_bank' => 'required|string|max:255',
            'atas_nama' => 'required|string|max:255',
            'no_rek' => 'required|string|max:255',
        ]);

        $category = Bank::create([
            'nama_bank' => $request->nama_bank,
            'atas_nama' => $request->atas_nama,
            'no_rek' => $request->no_rek
        ]);


        Alert::success('Success', 'Bank created successfully!');
        return back()->with('success', 'Bank created successfully!');

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bank' => 'required|string|max:255',
            'atas_nama' => 'required|string|max:255',
            'no_rek' => 'required|string|max:255',
        ]);

        $banks = Bank::findOrFail($id);
        $banks->nama_bank = $request->nama_bank;
        $banks->atas_nama = $request->atas_nama;
        $banks->no_rek = $request->no_rek;
        $banks->save();
        Alert::info('Updated', 'Bank updated successfully');
        return redirect()->route('category.index')->with('success', 'Bank updated successfully');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $welcomeMessage = 'Edit Bank'; 
        $bank = Bank::where('id', $id)->firstOrFail();
        $banks = Bank::paginate(10);
        return view('backend.pages.bank.list', compact('bank', 'banks','welcomeMessage','user'));
    }

    public function destroy($slug)
    {
        $bank = Bank::findOrFail($slug); 
        $bank->delete();
        Alert::error('Deleted', 'Bank deleted successfully.');
        return redirect()->route('bank.index')->with('success', 'Bank deleted successfully.');
    }
}
