<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PolicyOtherDoc;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class DownloadController extends Controller
{
    public function DownloadList()
    {
        $downlist = PolicyOtherDoc::get()->toArray();
        return view('admin.downloads.download_list', compact('downlist'));
    }

    public function AddEditDownload(Request $request, $id = null)
    {
        if ($id == "") {
            $title = "Add";
            $PolicyOtherDoc = new PolicyOtherDoc;
            $message = "PolicyOtherDoc Added Successfully!";

            if ($request->isMethod('post')) {
                $data = $request->all();
                $validated = $request->validate([

                    'type' => 'required',
                    'other_type' => 'required',
                    'title' => 'required',

                ]);

                $rand = rand(0, 999999);

                $uploadPath1 = 'Newfileuploads/downloads/';
                if ($request->hasFile('download_file')) {
                    $file1 = $request->file('download_file');
                    $ext1 = $file1->getClientOriginalExtension();
                    $filename1 = $rand . '.' . $ext1;

                    $file1->move('Newfileuploads/downloads/', $filename1);
                    $PolicyOtherDoc->download_file = $uploadPath1 . $filename1;
                }

                $PolicyOtherDoc->type = $data['type'];
                $PolicyOtherDoc->other_type = $data['other_type'];
                $PolicyOtherDoc->title = $data['title'];
                $PolicyOtherDoc->save();
                return redirect()->back()->with('success_message', $message);
            }
        } else {
            $title = "Edit";
            $PolicyOtherDoc = PolicyOtherDoc::find($id);
            $message = "PolicyOtherDoc Updated Successfully!";


            if ($request->isMethod('post')) {
                $data = $request->all();

                if($data['type']=='File')
                {
                    $validated = $request->validate([

                        'type' => 'required',
                        'other_type' => 'required',
                        'title' => 'required',

                    ]);

                    $uploadPath1 = 'Newfileuploads/downloads/';
                    if ($request->hasFile('download_file')) {
                        $image_path = $PolicyOtherDoc['download_file'];

                        if (file_exists($image_path)) {

                            @unlink($image_path);
                        }

                        $file1 = $request->file('download_file');
                        $ext1 = $file1->getClientOriginalExtension();
                        $filename1 = time() . '.' . $ext1;

                        $file1->move('Newfileuploads/downloads/', $filename1);
                        $PolicyOtherDoc->download_file = $uploadPath1 . $filename1;
                    }

                    $PolicyOtherDoc->type = $data['type'];
                    $PolicyOtherDoc->other_type = $data['other_type'];
                    $PolicyOtherDoc->title = $data['title'];
                    $PolicyOtherDoc->save();
                    return redirect()->back()->with('success_message', $message);

                }else{

                    $validated = $request->validate([

                        'type' => 'required',
                        'date' => 'required',
                        'hou_minimum' => 'required',
                        'hou_maximum' => 'required',
                        'non_minimum' => 'required',
                        'non_maximum' => 'required',
                        'average_roI_hous' => 'required',
                        'averageroInonhous' => 'required',


                    ]);
                    $PolicyOtherDoc->type = $data['type'];
                    $PolicyOtherDoc->date = $data['date'];
                    $PolicyOtherDoc->hou_minimum = $data['hou_minimum'];
                    $PolicyOtherDoc->hou_maximum = $data['hou_maximum'];
                    $PolicyOtherDoc->non_minimum = $data['non_minimum'];
                    $PolicyOtherDoc->non_maximum = $data['non_maximum'];
                    $PolicyOtherDoc->average_roI_hous = $data['average_roI_hous'];
                    $PolicyOtherDoc->averageroInonhous = $data['averageroInonhous'];


                    $PolicyOtherDoc->save();
                    return redirect()->back()->with('success_message', $message);

                }


            }
        }
        return view('admin.downloads.add_edit_PolicyOtherDoc', compact('PolicyOtherDoc', 'title'));
    }

    public function DeleteDownload ($id)
    {
        $PolicyOtherDoc = PolicyOtherDoc::findOrFail($id);
        try {
            $image_path = $PolicyOtherDoc['download_file'];

            if (file_exists($image_path)) {

                @unlink($image_path);
            }
            $PolicyOtherDoc->delete();
            $message = "Your   (" . $PolicyOtherDoc['title'] . ") PolicyOtherDoc is Delete Successfully!";
            return redirect('/admin/Download-List')->with('success_message', $message);
        } catch (QueryException $e) {
            if ($e->getCode() == "23000") {
                $message = "data cant be deleted";
                return redirect('/admin/Download-List')->with('error_message', $message);
            }
        }
    }
}
