<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AllBranchStDetail;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class BranchController extends Controller
{
    public function BranchList()
    {
       $branch = AllBranchStDetail::get()->toArray();
       return view('admin.branches.branch_list',compact('branch'));
    }
    public function AddEditBranch(Request $request, $id=null)
    {
        if($id=="")
        {
            $title = "Add";
            $branch = new AllBranchStDetail;
            $message = "Branch Added Successfully!";
        }
        else{
            $title= "Edit";
            $branch = AllBranchStDetail::find($id);
            $message = "Branch Updated Successfully!";
        }




        if($request->isMethod('post')){
            $data = $request->all();
            $validated = $request->validate([

                'branch_type' => 'required',
                'branch_name' => 'required',
                'branch_address' => 'required',

            ]);

            $branch->branch_type = $data['branch_type'];
            $branch->branch_name = $data['branch_name'];
            $branch->branch_address = $data['branch_address'];
            $branch->save();
            return redirect()->back()->with('success_message',$message);
        }
        return view('admin.branches.add_edit_branch',compact('branch','title'));

    }

    public function DeleteBranch($id)
    {
        $branch = AllBranchStDetail::findOrFail($id);
        try {
            $branch->delete();
            $message= "Your   (".$branch['branch_name'].") Branch is Delete Successfully!";
            return redirect('/admin/Branch-List')->with('success_message',$message);
        } catch (QueryException $e){
        if($e->getCode() == "23000"){
            $message= "data cant be deleted";
            return redirect('/admin/Branch-List')->with('error_message',$message);
        }}
    }
}
