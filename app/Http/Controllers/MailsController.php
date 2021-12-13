<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailsController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request, [
            'captcha' => 'required|captcha',
            'mail_category' => 'required',
            'mail' => 'email|required',
            'mail_name' => 'required',
            'mail_content' => 'required',
        ]);
        $mailAddr = 'info@rentong.co.jp' ;
        // $mailAddr = 'rentongkyo@gmail.com' ;
        Mail::to($mailAddr)->send(new SendMail($request));
        return redirect()->route('pages.about')->with('success', '邮件发送成功！');
    }
}
