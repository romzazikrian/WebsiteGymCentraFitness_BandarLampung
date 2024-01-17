<?php
namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', ['members' => $members]);
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.edit', ['member' => $member]);
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $member->update($request->all());

        return redirect()->route('admin.members.index')->with('success', 'Member updated successfully');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully');
    }
}
