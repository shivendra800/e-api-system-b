<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Auction;
use App\Models\AuctionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use SebastianBergmann\CodeCoverage\Node\File;

class AuctionController extends Controller
{
    public function GetAuctionList()
    {
        $getaudList = Auction::get()->toArray();
        return view('admin.auction.aut_list', compact('getaudList'));
    }



    public function AddEditAuctionSave(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();
            if ($request->pro_det_address == null) {

                $notification = array(
                    'message' => 'Sorry you do not select any item',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            } else {

                DB::beginTransaction();
                try {

                    $auction = new Auction();
                    $auction->branch = $data['branch'];
                    $auction->type1 = $data['type1'];
                    $auction->type2 = $data['type2'];
                    $auction->for_detils = $data['for_detils'];

                    $uploadPath1 = 'Newfileuploads/auction/';
                    if ($request->hasFile('img1')) {
                        $file1 = $request->file('img1');
                        $ext1 = $file1->getClientOriginalExtension();
                        $filename1 = time() . '.' . $ext1;

                        $file1->move('Newfileuploads/auction/', $filename1);
                        $auction->img1 = $uploadPath1 . $filename1;
                    }

                    $uploadPath = 'Newfileuploads/auction/';
                    if ($request->hasFile('img2')) {
                        $file = $request->file('img2');
                        $ext = $file->getClientOriginalExtension();
                        $filename = time() . '.' . $ext;

                        $file->move('Newfileuploads/auction/', $filename);
                        $auction->img2 = $uploadPath . $filename;
                    }


                    $auction->save();
                    $getlastinsertedId = DB::getPdo()->lastInsertId();

                    foreach ($data['pro_det_address'] as $key => $value) {
                        if (!empty($value)) {
                            $purchaseInvProd = new AuctionItem;


                            $purchaseInvProd->last_auction_id = $getlastinsertedId;
                            $purchaseInvProd->res_price = $data['res_price'][$key];
                            $purchaseInvProd->pro_det_address = $data['pro_det_address'][$key];
                            $purchaseInvProd->emd = $data['emd'][$key];
                            $purchaseInvProd->last_bid_date = $data['last_bid_date'][$key];
                            $purchaseInvProd->auction_date = $data['auction_date'][$key];
                            $purchaseInvProd->save();
                        }
                    }


                    DB::commit();
                    return redirect('admin/Get-Auction-List')->with('success_message', "New Auction Add ");
                } catch (Exception $exception) {
                    DB::rollback();
                    return redirect()->back()->with('error_message', $exception->getMessage());
                }
            }
        }

        return view('admin.auction.add_auction');
    }

    public function EditAuctionSave(Request $request, $id)
    {
        $purchase =  Auction::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $data = $request->all();


            DB::beginTransaction();
            try {






                $Updatepurchase =  Auction::where('id', $id)->first();
                $Updatepurchase->branch = $data['branch'];
                $Updatepurchase->type1 = $data['type1'];
                $Updatepurchase->type2 = $data['type2'];
                $Updatepurchase->for_detils = $data['for_detils'];





            $uploadPath1 = 'Newfileuploads/auction/';
            if ($request->hasFile('img1')) {
            $image_path = $purchase['img1'];

                            if (file_exists($image_path)) {

                                @unlink($image_path);

                }

                $file1 = $request->file('img1');
                $ext1 = $file1->getClientOriginalExtension();
                $filename1 = time() . '.' . $ext1;

                $file1->move('Newfileuploads/auction/', $filename1);
                $Updatepurchase->img1 = $uploadPath1 . $filename1;
            }

            $uploadPath = 'Newfileuploads/auction/';
            if ($request->hasFile('img2')) {

                  $image_path2 = $purchase['img2'];

                if (file_exists($image_path2)) {

                    @unlink($image_path2);

                }
                $file = $request->file('img2');
                $ext = $file->getClientOriginalExtension();
                $filename =time() . '.' . $ext;

                $file->move('Newfileuploads/auction/', $filename);
                $Updatepurchase->img2 = $uploadPath . $filename;
            }






                $Updatepurchase->save();

                foreach ($data['pro_det_address'] as $key => $value) {
                    if (!empty($value)) {

                        $updateitempurchaseExists = AuctionItem::where('id', $data['id'][$key])->exists();
                        if ($updateitempurchaseExists) {



                            $updateitempurchase = AuctionItem::where('id', $data['id'][$key])->first();
                             $updateitempurchase->res_price = $data['res_price'][$key];
                            $updateitempurchase->pro_det_address = $data['pro_det_address'][$key];
                            $updateitempurchase->emd = $data['emd'][$key];
                            $updateitempurchase->last_bid_date = $data['last_bid_date'][$key];
                            $updateitempurchase->auction_date = $data['auction_date'][$key];
                            $updateitempurchase->save();
                        } else {
                            $purchaseInvProd = new AuctionItem;
                            $purchaseInvProd->last_auction_id = $id;
                            $purchaseInvProd->res_price = $data['res_price'][$key];
                            $purchaseInvProd->pro_det_address = $data['pro_det_address'][$key];
                            $purchaseInvProd->emd = $data['emd'][$key];
                            $purchaseInvProd->last_bid_date = $data['last_bid_date'][$key];
                            $purchaseInvProd->auction_date = $data['auction_date'][$key];
                            $purchaseInvProd->save();
                        }
                    }
                }

                DB::commit();
                return redirect('admin/Get-Auction-List')->with('success_message', "Auction  Update ");
            } catch (Exception $exception) {
                DB::rollback();
                return redirect()->back()->with('error_message', $exception->getMessage());
            }
        }

        $getpurchaseitem = AuctionItem::where('last_auction_id', $purchase['id'])->get();
        return view('admin.auction.edit_auction', compact('getpurchaseitem', 'purchase'));
    }


    public function DeleteAuction($id)
    {
        $auction = Auction::findOrFail($id);
        try {
            $auction->delete();
            $auctItem = AuctionItem::where('last_auction_id',$id)->delete();
            $message= "Your Auction  is Delete Successfully!";
            return redirect()->back()->with('success_message',$message);
        } catch (QueryException $e){
        if($e->getCode() == "23000"){
            $message= "data cant be deleted";
            return redirect()->back()->with('error_message',$message);
        }}
    }

    public function DeleteAuctionItem($id)
    {
        $unit = AuctionItem::findOrFail($id);
        try {
            $unit->delete();
            $message= "Your Auction Item is Delete Successfully!";
            return redirect()->back()->with('success_message',$message);
        } catch (QueryException $e){
        if($e->getCode() == "23000"){
            $message= "data cant be deleted";
            return redirect()->back()->with('error_message',$message);
        }}
    }
}
