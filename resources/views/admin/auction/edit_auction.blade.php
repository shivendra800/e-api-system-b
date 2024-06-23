@extends('admin.layouts.layout')

@section('title', 'Edit Auction Details')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        @if (Session::has('error_message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error:</strong> {{ Session::get('error_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success:</strong> {{ Session::get('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        {{-- error meg with close button---- --}}
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        {{-- error meg --}}
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Auction Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Auction Details</li>

                </ol>
            </div>



        </div>
    </div><!-- /.container-fluid -->
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"> Edit Auction Details</h3>
                <a style="max-width: 150px; float:right; display:inline-block;" href="{{ url('admin/Get-Auction-List') }}" class="btn btn-block btn-info">Back</a>

            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ url('admin/Edit-Auction-Save/'.$purchase['id']) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Branch</label>
                                <input type="text" class="form-control" placeholder="Enter branch" value="{{ $purchase['branch'] }}" name="branch" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">HeaderTitle-1</label>
                                <input type="text" class="form-control" placeholder="Enter After Branch HeaderTitle-1" name="type1" value="{{ $purchase['type1'] }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">HeaderTitleImage-1</label>
                                <input type="file" class="form-control" placeholder="Enter Type1img1" name="img1" />
                                <a href="{{ url($purchase['img1']) }}" target="_blank" style="color: white">
                                    <img src="{{ asset($purchase->img1) }}" width="60px" height="60px" />
                                </a>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">HeaderTitle-2</label>
                                <input type="text" class="form-control" placeholder="Enter After Branch HeaderTitle-2" name="type2" value="{{ $purchase['type2'] }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">HeaderTitleImage-2</label>
                                <input type="file" class="form-control" placeholder="Enter Type2img2" name="img2" />
                                <a href="{{ url($purchase['img2']) }}" target="_blank" style="color: white">
                                    <img src="{{ asset($purchase->img2) }}" width="60px" height="60px" />
                                </a>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">For Detils</label>
                                {{-- <input type="text" class="form-control" placeholder="Enter for_detils" name="for_detils" value="{{ $purchase['for_detils'] }}" /> --}}
                                <textarea id="w3review" name="for_detils" rows="4" cols="50">{{ $purchase['for_detils'] }}
                                    </textarea>
                            </div>
                        </div>
                    </div>

                    <div style=" display:inline-block;"  class="btn btn-block btn-info">Update Added Property Details</div>
                    <div class="row">

                        @foreach ( $getpurchaseitem as $aucditem )
                        <input type="hidden" class="form-control" name="id[]" value="{{ $aucditem['id'] }}" />
                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Property Details and Address  ( <a href="{{ url('admin/Delete-Auction-item/'.$aucditem['id']) }}" title="Click to delete this row"><i
                                                class="fa fa-trash"></i></a>
                                        )</label>
                                    <input type="text" class="form-control" placeholder="Enter Property Details and Address" name="pro_det_address[]" value="{{ $aucditem['pro_det_address'] }}" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Reserve Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Reserve Price" name="res_price[]" value="{{ $aucditem['res_price'] }}" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">EMD</label>
                                    <input type="text" class="form-control" placeholder="Enter  EMD" name="emd[]" value="{{ $aucditem['emd'] }}" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Last Date</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Date" name="last_bid_date[]" value="{{ $aucditem['last_bid_date'] }}" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Start Date</label>
                                    <input type="text" class="form-control" placeholder="Enter Start Date" name="auction_date[]" value="{{ $aucditem['auction_date'] }}" />
                                </div>
                            </div>

                        </div>
                        <hr>
                        <br>

                        @endforeach


                        <hr>
                        <div style=" display:inline-block;"  class="btn btn-block btn-info">Add More Property Details</div>

                        <div class="after-add-more row">
                            <input type="hidden" class="form-control" placeholder="Enter pro_det_address" name="id[]" value="0" />
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Property Details and Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Property Details and Address" name="pro_det_address[]" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Reserve Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Reserve Price" name="res_price[]" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">EMD</label>
                                    <input type="text" class="form-control" placeholder="Enter EMD" name="emd[]" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Last Date</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Date" name="last_bid_date[]" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Start Date</label>
                                    <input type="text" class="form-control" placeholder="Enter Start Date" name="auction_date[]" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group change">
                                    <label for="">&nbsp;</label><br />
                                    <a class="btn btn-success add-more">+ Add More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url('/') }}/admin/Get-Auction-List" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<script>
    $(document).ready(function() {
        $("body").on("click", ".add-more", function() {
            var html = $(".after-add-more").first().clone();

            //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");

            $(html).find(".change").html(
                "<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");


            $(".after-add-more").last().after(html);



        });

        $("body").on("click", ".remove", function() {
            $(this).parents(".after-add-more").remove();
        });
    });
</script>
@endsection
@section('script')


@endsection
