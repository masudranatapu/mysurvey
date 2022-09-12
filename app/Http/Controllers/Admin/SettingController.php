<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function profile(){
        return view('admin.profile');
    }
    public function update_profile(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'phone' => 'max:15',
        ]);
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if($request->hasFile('image')) {
            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $filename = preg_replace('/\s+/', '-', $filename);
            $folder = 'uploads/'.date('Y').'/'.date('m');
            if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
            }

            $m_image = $folder.'/'. time() . '-' . $filename;
            Image::make($image)->save($m_image);
            $data->image = asset($m_image);
        }

        $data->Update();
        $notification=array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function siteSetting()
    {
        $setting = Setting::latest()->first();
        return view('admin.survey.setting', compact('setting'));
    }
    public function siteSettingUpdate(Request $request ,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);
        
        $website = $request->file('image');
        $slug = 'website';
        if($website) {
            $website_name = $slug.'-'.uniqid().'.'.$website->getClientOriginalExtension();
            $upload_path = 'media/website/';
            $website->move($upload_path, $website_name);
            $oldimage = Setting::findOrFail($id);
            if(file_exists($oldimage->image)) {
                unlink($oldimage->image);
            }
    
            $image_url = $upload_path.$website_name;
        }else {
            $oldimage = Setting::findOrFail($id);
            $image_url = $oldimage->image;
        }
        
        Setting::findOrFail($id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_url,
        ]);

        $notification=array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
