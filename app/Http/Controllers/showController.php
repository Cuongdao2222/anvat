<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\background;

use App\Models\popup;

use DB;

use Carbon\Carbon;

class showController extends Controller
{

    protected function addPopup(Request $request)
    {

        $input['link']       = $request->link;
       
        $input['images'] = '';

        $input['title'] = trim($request->title);
    
        if ($request->hasFile('file_image')) {

            $file_upload = $request->file('file_image');

            $name = time() . '_' . $file_upload->getClientOriginalName();

            $filePath = $file_upload->storeAs('images/cate', $name, 'public');

            $input['images'] = $filePath;
        }

        $input['created_at'] = Carbon::now();

        $input['updated_at'] = Carbon::now();

        DB::table('add_cate_image')->insert($input);

        return redirect()->route('pop-up-show');

    }

    public function deleteLinkAdd(Request $request)
    {
        $id = $request->id;
        $delete = DB::table('muchsearch')->delete($id);
        return response('thanh cong');

    }

    protected function activeCateHomeImage(Request $request){

        $id = $request->id;

        $active = $request->active;

        $update = ['active'=>$active];

        $delete = DB::table('add_cate_image')->update($update);

        return redirect()->route('pop-up-show');
    }

    protected function deleteCateHome(Request $request){

        $id = $request->id;

        DB::table('add_cate_image')->delete($id);
        
        return redirect()->route('pop-up-show');
    }


    public function addBackgroundSite(Request $request)
    {
        if ($request->hasFile('background_image')) {

            $file_upload = $request->file('background_image');

            $name = time() . '_' . $file_upload->getClientOriginalName();

            $filePath = $file_upload->storeAs('images/background-image', $name, 'ftp');

            $input['background_image'] = $filePath;

            $input['background_color'] = '';

        }
        else{

            $input['background_color'] = $request->background_color;

            $input['background_image'] = '';

        }

        $background = background::find(1);

        $background->update($input);

         return back()->with('status-background','sửa thành công');

    }
}
