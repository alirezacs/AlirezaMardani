<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    private Contact $model;

    public function __construct()
    {
        $this->model = new Contact();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = $this->model->all();

        return view('Admin.Contact.index', compact('contacts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $res = $contact->delete();
        return redirect()->route('contact.index');
    }
}
