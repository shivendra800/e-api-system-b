@extends('front.layout.layouts')
@section('title', 'Auction')

@section('main_content')
<!-- heared area end -->
<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>Properties For Auctions</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>/</li>
                        <li>Properties For Auctions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{ asset('front_assests/images/about2.jpg') }});background-repeat: no-repeat;background-size: cover;height: 100%;">
    <br />
    <br />
    <!-- about-area start -->
    <section class="service-area pb-140" style="margin-top: 10px">
        <div class="container">
            <br />
            @php
            use App\Models\AuctionItem;
            @endphp
            @foreach ( $getaudic as $audict )
            @php
            $getaudicitem = AuctionItem::where('last_auction_id',$audict['id'])->get()->toArray();
            @endphp
            <div class="row">
                <div class="col-md-12" style="background-color: #296dc1">
                    <br />
                    <h3 style="color: white; text-align: center">
                        <b>{{ $audict['branch'] }} Branch (<a href="{{ $audict['img1'] }}" target="_blank" style="color: white">{{ $audict['type1'] }}
                            </a>
                            /
                            <a href="{{ $audict['img2'] }}" target="_blank" style="color: white">{{ $audict['type2'] }}</a>)
                        </b>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="margin-bottom: 20px">
                            <thead style="background-color: #fff; color: #296dc1">
                                <tr>
                                    <th class="text-center">Sr.No.</th>
                                    <th class="text-center">Location</th>
                                    <th style="width: 34%">Property Details and Address</th>
                                    <th class="text-center">Reserve Price</th>
                                    <th class="text-center">EMD</th>
                                    <th class="text-center">Last Date of Bid and Time</th>
                                    <th class="text-center">Auction Date</th>

                                </tr>
                            </thead>
                            <tbody style="background-color: #fff; color: #296dc1">


                                @foreach ($getaudicitem as $index=>$itemaud )
                                <tr>
                                    <td class="text-center">{{ $index+1 }}</td>
                                    <td class="text-center">{{ $audict['branch'] }}</td>
                                    <td class="text-center">
                                        {{ $itemaud['pro_det_address'] }}
                                    </td>
                                    <td class="text-center">{{ $itemaud['res_price'] }}</td>
                                    <td class="text-center">{{ $itemaud['emd'] }}</td>
                                    <td class="text-center">{{ $itemaud['last_bid_date'] }}</td>
                                    <td class="text-center">{{ $itemaud['auction_date'] }}</td>

                                </tr>
                                @endforeach




                                @if($audict['for_detils']!= NULL)
                                <tr class="Details">
                                    <th class="text-center" colspan="7">
                                        {{ $audict['for_detils'] }}
                                    </th>
                                </tr>

                                @endif

                            </tbody>
                        </table>
                    </div>
                    <br />
                </div>
            </div>
        </br>
        @endforeach



        </div>
    </section>
</div>
@endsection
