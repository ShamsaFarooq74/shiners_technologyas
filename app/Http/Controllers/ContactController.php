<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ContactUsNotification;

class ContactController extends Controller
{
  public function sendEmail(Request $request)
  {

    $data = $request->validate([
      'name' => 'required|max:255',
      'email' => 'required|max:255|email:rfc,dns',
      'subject' => 'required|max:255',
      'message' => 'required|max:2000',
    ]);

    $contact_us = new ContactUs();
    $contact_us=$contact_us->create($data);
    $users = Role::findByName('admin')->users;

    try {
      foreach ($users as $key => $user)
        $user->notify(new ContactUsNotification($contact_us));
      return redirect()->back()->with('success', 'Thanks for reaching out! We Will Contact you soon');
    } catch (Exception $e) {
      return response()->json([
        'success' => false,
        'message ' => $e->getMessage()
      ]);
    }
  }
}
