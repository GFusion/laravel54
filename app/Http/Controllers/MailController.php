<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; // 追加
use App\Mail\ContactMail; // 追加
use App\Http\Requests;

class MailController extends Controller
{
	public function index()
	{
		$datas["name"] = "テスター";
		
		$data=[];
		Mail::send(['text' => 'mail'], $datas, function($message){ $message->to("dr_msfree@yahoo.co.jp")->subject("テスト送信"); });
		
//		Mail::to('dr_msfree@yahoo.co.jp')->queue(new ContactMail($datas));
//	   return view('user/index')
//	           ->with('users', User::paginate());
	}
}
