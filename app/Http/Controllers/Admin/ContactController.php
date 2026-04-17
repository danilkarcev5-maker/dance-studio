<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'is_resolved' => 'required|boolean',
        ]);

        $contact->update(['is_resolved' => $request->is_resolved]);

        return redirect()->route('contacts.index')->with('success', 'Статус сообщения обновлен!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Сообщение удалено!');
    }
}