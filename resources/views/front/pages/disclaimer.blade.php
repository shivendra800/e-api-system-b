@extends('front.layout.layouts')
@section('title', 'Disclaimer')

@section('main_content')
<style>
    .common-text{
        font-size:16px;
    }
</style>		
	    <!-- breadcumb-area start -->
        <!--<div class="breadcumb-area black-opacity bg-img-10">-->
           <div class="breadcumb-area  black-opacity bg-img-10">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12" style='color:#296dc1'>
                        <div class="breadcumb-wrap text-primary">
                            <h2>Disclaimer</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcumb-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>/</li>
                                <li>Disclaimer</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- about-area start -->
        <div style="background-image: url({{asset('front_assests/images/about2.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <section class="about-area ptb-140">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-12">
                        <div class="about-wrap">

                            <h3 style="color:#296dc1;"><b>Disclaimer</b></h3>
                           
                            <p class="common-text" style="color:darkblue;">Cent Bank Home Finance Ltd. (CBHFL) has made all efforts to ensure that the contents of this website do not contain any mistake, omission, inaccuracy, typographical or other error.</p>
                        
                            <p class="common-text" style="color:darkblue;">However, CBHFL assumes no responsibility, if any such error is found in the contents of the website.</p>
                      
                            <p class="common-text" style="color:darkblue;">CBHFL makes no warranty or representation that this website is free from all errors, mistakes, etc. Hyperlinks, if any, to other Internet websites are at users own risk.</p>
                      
                             <p class="common-text" style="color:darkblue;">The contents of these sites are not verified or endorsed by CBHFL in any way.
                             </p>
                         
                       
                            <p class="common-text" style="color:darkblue;">CBHFL makes no warranty or representation that the contents of such websites are error free and correct.
                             </p>
                            
                             <p class="common-text" style="color:darkblue;">CBHFL has taken all steps to prevent the introduction and spread of viruses, worms or other destructive material through this website.
                             </p>
                           
                             <p class="common-text" style="color:darkblue;">However, CBHFL does not guarantee or warrant that this website or the material that may be downloaded from this website does not contain any such destructive material.
                             </p>
                            
                            
                             <p class="common-text" style="color:darkblue;">CBHFL shall not be liable for any harm or damage which may be caused due to such destructive material present in this website.
                             </p>
                           
                            <p class="common-text" style="color:darkblue;">CBHFL has taken all steps to protect the customer rights to information. However, CBHFL shall not be liable or responsible and expressly disclaims any liability arising on account of information passing through unauthorized access of the website or otherwise.
                             </p>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->

        <!-- .service-area start -->
        
      <!---new slider -->
            <!--end new slider-->
     </div>
        <!-- footer-area start  -->
@endsection