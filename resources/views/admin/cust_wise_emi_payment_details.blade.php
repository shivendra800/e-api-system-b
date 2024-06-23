@extends('admin.layouts.layout')



@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customer Wise Pay Emi Payment Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Customer Wise Pay Emi Payment Details</li>
            
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
                    <h3 class="card-title"> Customer Wise Pay Emi Payment Details</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="" readonly  name="cust_name" 
                        @if(!empty($EmiPayUerDetails['cust_name']))
                                 value="{{ $EmiPayUerDetails['cust_name'] }}"  @else value="{{ old('cust_name') }}" @endif>
                        
                      </div>
                    </div>
                   
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mobile No</label>
                          <input type="text" class="form-control" id="" readonly  name="cust_mobile" 
                          @if(!empty($EmiPayUerDetails['cust_mobile']))
                                   value="{{ $EmiPayUerDetails['cust_mobile'] }}"  @else value="{{ old('cust_mobile') }}" @endif>
                          
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Monthly EMI Amount</label>
                          <input type="text" class="form-control" id="" readonly  name="emi_amt" 
                          @if(!empty($EmiPayUerDetails['emi_amt']))
                                   value="{{ $EmiPayUerDetails['emi_amt'] }}"  @else value="{{ old('emi_amt') }}" @endif>
                          
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Loan Account No</label>
                          <input type="text" class="form-control" id="" readonly  name="loan_ac_number" 
                          @if(!empty($EmiPayUerDetails['loan_ac_number']))
                                   value="{{ $EmiPayUerDetails['loan_ac_number'] }}"  @else value="{{ old('loan_ac_number') }}" @endif>
                          
                        </div>
                      </div>
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Current Due</label>
                          <input type="text" class="form-control" id="" readonly  name="current_due" 
                          @if(!empty($EmiPayUerDetails['current_due']))
                                   value="{{ $EmiPayUerDetails['current_due'] }}"  @else value="{{ old('current_due') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Pay Emi Amt</label>
                          <input type="text" class="form-control" id="" readonly  name="pay_emi_amt" 
                          @if(!empty($EmiPayUerDetails['pay_emi_amt']))
                                   value="{{ $EmiPayUerDetails['pay_emi_amt'] }}"  @else value="{{ old('pay_emi_amt') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Payment Mode</label>
                          <input type="text" class="form-control" id="" readonly  name="payment_mode" 
                          @if(!empty($EmiPayUerDetails['payment_mode']))
                                   value="{{ $EmiPayUerDetails['payment_mode'] }}"  @else value="{{ old('payment_mode') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Payment Id</label>
                          <input type="text" class="form-control" id="" readonly  name="payment_id" 
                          @if(!empty($EmiPayUerDetails['payment_id']))
                                   value="{{ $EmiPayUerDetails['payment_id'] }}"  @else value="{{ old('payment_id') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Payment Status</label>
                          <input type="text" class="form-control" id="" readonly  name="paymet_status" 
                          @if(!empty($EmiPayUerDetails['paymet_status']))
                                   value="{{ $EmiPayUerDetails['paymet_status'] }}"  @else value="{{ old('paymet_status') }}" @endif>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Cust Emi Paid Date</label>
                          <input type="text" class="form-control" id="" readonly  value="{{ \Carbon\Carbon::parse( $EmiPayUerDetails['created_at'])->isoFormat('MMM Do YYYY')}}" 
                             >
                          
                        </div>
                      </div>
                      
                    </div>
                      
                     
                    </div>
                    <!-- /.card-body -->
            
                    <div class="card-footer">
                      
                      <a href="{{url('/') }}/admin/Customer-Emi-PayList" class="btn btn-secondary">Back</a>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
            
              
        </div>
        
      </div>
    </div>
  </section>

 

    
@endsection
    
