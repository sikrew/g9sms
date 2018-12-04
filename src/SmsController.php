<?php

namespace Sikrew\G9sms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmsController extends Controller
{
	public function index()
    {
        return view('sikrew.sms.sms');
    }

    public function create()
    {
        return "ok";
    }

    public function store()
    {
        return "ok";
    }

    public function edit($id)
    {
       return "ok";
    }

    public function update($id)
    {
        return "ok";
    }

    public function destroy($id)
    {
        return "ok";
    }
}
