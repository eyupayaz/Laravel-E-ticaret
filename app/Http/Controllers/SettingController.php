<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Setting::first();
        if ($data==null)
        {
            $data = new Setting();
            $data->name = 'project name';
            $data->save();

        }
        $data = Setting::first();
        return view('admin.setting.edit',[
            'data' => $data]);

    }



    public function update(Request $request, setting $setting)
    {
        $id=$request->input('id');

        $data = setting::find($id);
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->facebook = $request->input('facebook');
        $data->instegram = $request->input('instegram');
        $data->twitter = $request->input('twitter');
        $data->youtube = $request->input('youtube');
        $data->aboutus = $request->input("aboutus");
        $data->contact = $request->input('contact');
        $data->references = $request->input("references");
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route("admin.setting.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(setting $setting)
    {
        //
    }
}
