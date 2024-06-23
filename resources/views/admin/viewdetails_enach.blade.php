@extends('admin.layouts.layout')



@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>E-Nach All Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}/admin">Home</a></li>
            <li class="breadcrumb-item active">E-Nach All Details</li>
            
          </ol>
        </div>
         
      

      </div>
    </div><!-- /.container-fluid -->
  </section>
   

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> E-Nach All Details</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id=""  name="merchantLegalName" 
                        @if(!empty($checkreqt['merchantLegalName']))
                                 value="{{ $checkreqt['merchantLegalName'] }}"  @else value="{{ old('merchantLegalName') }}" @endif>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="text" class="form-control" id=""  name="email" 
                          @if(!empty($checkreqt['email']))
                                   value="{{ $checkreqt['email'] }}"  @else value="{{ old('email') }}" @endif>
                          
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mobile No</label>
                          <input type="text" class="form-control" id=""  name="mobileNo" 
                          @if(!empty($checkreqt['mobileNo']))
                                   value="{{ $checkreqt['mobileNo'] }}"  @else value="{{ old('mobileNo') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Aadhar No</label>
                          <input type="text" class="form-control" id=""  name="aadhar_no" 
                          @if(!empty($checkreqt['aadhar_no']))
                                   value="{{ $checkreqt['aadhar_no'] }}"  @else value="{{ old('aadhar_no') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">EMI Amount</label>
                          <input type="text" class="form-control" id=""  name="emi_amount" 
                          @if(!empty($checkreqt['emi_amount']))
                                   value="{{ $checkreqt['emi_amount'] }}"  @else value="{{ old('emi_amount') }}" @endif>
                          
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Loan Account No</label>
                          <input type="text" class="form-control" id=""  name="merchantAccountNo" 
                          @if(!empty($checkreqt['merchantAccountNo']))
                                   value="{{ $checkreqt['merchantAccountNo'] }}"  @else value="{{ old('merchantAccountNo') }}" @endif>
                          
                        </div>
                      </div>
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">validityStart</label>
                          <input type="text" class="form-control" id=""  name="validityStart" 
                          @if(!empty($checkreqt['validityStart']))
                                   value="{{ $checkreqt['validityStart'] }}"  @else value="{{ old('validityStart') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">validityEnd</label>
                          <input type="text" class="form-control" id=""  name="validityEnd" 
                          @if(!empty($checkreqt['validityEnd']))
                                   value="{{ $checkreqt['validityEnd'] }}"  @else value="{{ old('validityEnd') }}" @endif>
                          
                        </div>
                      </div>
                    </div>
                      
                     
                    </div>
                    <!-- /.card-body -->
            
                    <div class="card-footer">
                      
                     
                      <a href="{{url('/') }}/admin/Enach-Request" class="btn btn-secondary">Back</a>
                    </div>
                  
                </div>
                <!-- /.card -->
            
              
        </div>
        
      </div>
      <div class="row">
        
        <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> E-Nach OnBoarding Details</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">entityId</label>
                        <input type="text" class="form-control" 
                        @if(!empty($checkreqt['mconboarding']['entityId']))
                                 value="{{ $checkreqt['mconboarding']['entityId'] }}"  @else value="" @endif>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">mobileNo</label>
                          <input type="text" class="form-control" id=""  name="mobileNo" 
                          @if(!empty($checkreqt['mconboarding']['mobileNo']))
                                   value="{{ $checkreqt['mconboarding']['mobileNo'] }}"  @else value="{{ old('mobileNo') }}" @endif>
                          
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">paymentAddress</label>
                          <input type="text" class="form-control" id=""  name="paymentAddress" 
                          @if(!empty($checkreqt['mconboarding']['paymentAddress']))
                                   value="{{ $checkreqt['mconboarding']['paymentAddress'] }}"  @else value="{{ old('paymentAddress') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">merchantAccountNo</label>
                          <input type="text" class="form-control" id=""  name="merchantAccountNo" 
                          @if(!empty($checkreqt['mconboarding']['merchantAccountNo']))
                                   value="{{ $checkreqt['mconboarding']['merchantAccountNo'] }}"  @else value="{{ old('merchantAccountNo') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">accountType</label>
                          <input type="text" class="form-control" id=""  name="accountType" 
                          @if(!empty($checkreqt['mconboarding']['accountType']))
                                   value="{{ $checkreqt['mconboarding']['accountType'] }}"  @else value="{{ old('accountType') }}" @endif>
                          
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">ifsc</label>
                          <input type="text" class="form-control" id=""  name="ifsc" 
                          @if(!empty($checkreqt['mconboarding']['ifsc']))
                                   value="{{ $checkreqt['mconboarding']['ifsc'] }}"  @else value="{{ old('ifsc') }}" @endif>
                          
                        </div>
                      </div>
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">merchantLegalName</label>
                          <input type="text" class="form-control" id=""  name="merchantLegalName" 
                          @if(!empty($checkreqt['mconboarding']['merchantLegalName']))
                                   value="{{ $checkreqt['mconboarding']['merchantLegalName'] }}"  @else value="{{ old('merchantLegalName') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">channelId</label>
                          <input type="text" class="form-control" id=""  name="channelId" 
                          @if(!empty($checkreqt['mconboarding']['channelId']))
                                   value="{{ $checkreqt['mconboarding']['channelId'] }}"  @else value="{{ old('channelId') }}" @endif>
                          
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">aggregatorCode	</label>
                          <input type="text" class="form-control" id=""  name="aggregatorCode" 
                          @if(!empty($checkreqt['mconboarding']['aggregatorCode']))
                                   value="{{ $checkreqt['mconboarding']['aggregatorCode'] }}"  @else value="{{ old('aggregatorCode') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">merchantId</label>
                          <input type="text" class="form-control" id=""  name="merchantId" 
                          @if(!empty($checkreqt['mconboarding']['merchantId']))
                                   value="{{ $checkreqt['mconboarding']['merchantId'] }}"  @else value="{{ old('merchantId') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">mcc</label>
                          <input type="text" class="form-control" id=""  name="mcc" 
                          @if(!empty($checkreqt['mconboarding']['mcc']))
                                   value="{{ $checkreqt['mconboarding']['mcc'] }}"  @else value="{{ old('mcc') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">terminalId</label>
                          <input type="text" class="form-control" id=""  name="terminalId" 
                          @if(!empty($checkreqt['mconboarding']['terminalId']))
                                   value="{{ $checkreqt['mconboarding']['terminalId'] }}"  @else value="{{ old('terminalId') }}" @endif>
                          
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">gstIn</label>
                          <input type="text" class="form-control" id=""  name="gstIn" 
                          @if(!empty($checkreqt['mconboarding']['gstIn']))
                                   value="{{ $checkreqt['mconboarding']['gstIn'] }}"  @else value="{{ old('gstIn') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">storeId</label>
                          <input type="text" class="form-control" id=""  name="storeId" 
                          @if(!empty($checkreqt['mconboarding']['storeId']))
                                   value="{{ $checkreqt['mconboarding']['storeId'] }}"  @else value="{{ old('storeId') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">merchantGenre</label>
                          <input type="text" class="form-control" id=""  name="merchantGenre" 
                          @if(!empty($checkreqt['mconboarding']['merchantGenre']))
                                   value="{{ $checkreqt['mconboarding']['merchantGenre'] }}"  @else value="{{ old('merchantGenre') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">onboardingType</label>
                          <input type="text" class="form-control" id=""  name="onboardingType" 
                          @if(!empty($checkreqt['mconboarding']['onboardingType']))
                                   value="{{ $checkreqt['mconboarding']['onboardingType'] }}"  @else value="{{ old('onboardingType') }}" @endif>
                          
                        </div>
                      </div>
                      

                    </div>
                      
                     
                    </div>
                    <!-- /.card-body -->
            
                    <div class="card-footer">
                      
                     
                      <a href="{{url('/') }}/admin/Enach-Request" class="btn btn-secondary">Back</a>
                    </div>
                  
                </div>
                <!-- /.card -->
            
              
        </div>
        
      </div>
      <div class="row">
        
        <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> E-Nach MC MandateQR  Details</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">entityId</label>
                        <input type="text" class="form-control" 
                        @if(!empty($checkreqt['mcmandateqr']['entityId']))
                                 value="{{ $checkreqt['mcmandateqr']['entityId'] }}"  @else value="" @endif>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">paymentAddress</label>
                          <input type="text" class="form-control" id=""  name="paymentAddress" 
                          @if(!empty($checkreqt['mcmandateqr']['paymentAddress']))
                                   value="{{ $checkreqt['mcmandateqr']['paymentAddress'] }}"  @else value="{{ old('paymentAddress') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">validityStart</label>
                          <input type="text" class="form-control" id=""  name="validityStart" 
                          @if(!empty($checkreqt['mcmandateqr']['validityStart']))
                                   value="{{ $checkreqt['mcmandateqr']['validityStart'] }}"  @else value="{{ old('validityStart') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">validityEnd</label>
                          <input type="text" class="form-control" id=""  name="validityEnd" 
                          @if(!empty($checkreqt['mcmandateqr']['validityEnd']))
                                   value="{{ $checkreqt['mcmandateqr']['validityEnd'] }}"  @else value="{{ old('validityEnd') }}" @endif>
                          
                        </div>
                      </div>
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">amount</label>
                          <input type="text" class="form-control" id=""  name="amount" 
                          @if(!empty($checkreqt['mcmandateqr']['amount']))
                                   value="{{ $checkreqt['mcmandateqr']['amount'] }}"  @else value="{{ old('amount') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">amountRule</label>
                          <input type="text" class="form-control" id=""  name="amountRule" 
                          @if(!empty($checkreqt['mcmandateqr']['amountRule']))
                                   value="{{ $checkreqt['mcmandateqr']['amountRule'] }}"  @else value="{{ old('amountRule') }}" @endif>
                          
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">recur</label>
                          <input type="text" class="form-control" id=""  name="recur" 
                          @if(!empty($checkreqt['mcmandateqr']['recur']))
                                   value="{{ $checkreqt['mcmandateqr']['recur'] }}"  @else value="{{ old('recur') }}" @endif>
                          
                        </div>
                      </div>
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">recurValue</label>
                          <input type="text" class="form-control" id=""  name="recurValue" 
                          @if(!empty($checkreqt['mcmandateqr']['recurValue']))
                                   value="{{ $checkreqt['mcmandateqr']['recurValue'] }}"  @else value="{{ old('recurValue') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">recurType</label>
                          <input type="text" class="form-control" id=""  name="recurType" 
                          @if(!empty($checkreqt['mcmandateqr']['recurType']))
                                   value="{{ $checkreqt['mcmandateqr']['recurType'] }}"  @else value="{{ old('recurType') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">channelId</label>
                          <input type="text" class="form-control" id=""  name="channelId" 
                          @if(!empty($checkreqt['mcmandateqr']['channelId']))
                                   value="{{ $checkreqt['mcmandateqr']['channelId'] }}"  @else value="{{ old('channelId') }}" @endif>
                          
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">mandateType</label>
                          <input type="text" class="form-control" id=""  name="mandateType" 
                          @if(!empty($checkreqt['mcmandateqr']['mandateType']))
                                   value="{{ $checkreqt['mcmandateqr']['mandateType'] }}"  @else value="{{ old('mandateType') }}" @endif>
                          
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">txnNote	</label>
                          <input type="text" class="form-control" id=""  name="txnNote" 
                          @if(!empty($checkreqt['mcmandateqr']['txnNote']))
                                   value="{{ $checkreqt['mcmandateqr']['txnNote'] }}"  @else value="{{ old('txnNote') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">merchantId</label>
                          <input type="text" class="form-control" id=""  name="merchantId" 
                          @if(!empty($checkreqt['mcmandateqr']['merchantId']))
                                   value="{{ $checkreqt['mcmandateqr']['merchantId'] }}"  @else value="{{ old('merchantId') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">refId</label>
                          <input type="text" class="form-control" id=""  name="refId" 
                          @if(!empty($checkreqt['mcmandateqr']['refId']))
                                   value="{{ $checkreqt['mcmandateqr']['refId'] }}"  @else value="{{ old('refId') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">terminalId</label>
                          <input type="text" class="form-control" id=""  name="terminalId" 
                          @if(!empty($checkreqt['mcmandateqr']['terminalId']))
                                   value="{{ $checkreqt['mcmandateqr']['terminalId'] }}"  @else value="{{ old('terminalId') }}" @endif>
                          
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">res_txnid</label>
                          <input type="text" class="form-control" id=""  name="res_txnid" 
                          @if(!empty($checkreqt['mcmandateqr']['res_txnid']))
                                   value="{{ $checkreqt['mcmandateqr']['res_txnid'] }}"  @else value="{{ old('res_txnid') }}" @endif>
                          
                        </div>
                      </div>
                    
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">res_mandateqrdata</label>
                          <textarea  class="form-control" id=""  name="res_mandateqrdata"  rows="4">
                            @if(!empty($checkreqt['mcmandateqr']['res_mandateqrdata']))
                                  {{ $checkreqt['mcmandateqr']['res_mandateqrdata'] }}  @else {{ old('res_mandateqrdata') }} @endif
                                  </textarea>
                          
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
    
                    
                        <?php echo DNS2D::getBarcodeHTML($checkreqt['mcmandateqr']['res_mandateqrdata'], 'QRCODE',3,3);  ?>
                        <br>
                       
                    </div>
                     
                      

                    </div>
                      
                     
                    </div>
                    <!-- /.card-body -->
            
                    <div class="card-footer">
                      
                     
                      <a href="{{url('/') }}/admin/Enach-Request" class="btn btn-secondary">Back</a>
                    </div>
                  
                </div>
                <!-- /.card -->
            
              
        </div>
        
      </div>
    </div>
  </section>

 

    
@endsection
    
