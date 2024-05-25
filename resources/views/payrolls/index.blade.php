@extends('master')

@section('title')
Welcome
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mt-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h5>
                    <i class="fa-solid fa-receipt"></i> Pay Slip
                    <small class="float-right"><b>Date:</b> <span style="color: green">{{ \Carbon\Carbon::now()->format('F j, Y') }}</span></small>
                  </h5>
                </div>
              </div>
              <br>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-md-4 col-sm-12 invoice-col">
                    <label>Employee Name</label>
                    <select class="form-control select2bs4" id="employee"  name="employee" style="width: 80%;">                                  
                        <option value="">Select Employee</option>
                        @foreach ($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->emp_name}}</option> 
                        @endforeach                                               
                    </select>
              <br>
                </div>
                <div class="col-md-4 col-sm-12 invoice-col">
                  <b>Total Number of payable days:</b> <br>
                  <b>Per Day Salary:</b> <br>
                  <b>Monthly Salary:</b> <br>
                  <b>Per Day Salary:</b> <br>
                  <b>Payment Due:</b> <br>
                  <b>Account:</b> 
                </div>  
                
                <!-- /.col -->
                <div class="col-md-4 col-sm-12 invoice-col">
                  <b>Total Number of payable days:</b> <br>
                  <b>Per Day Salary:</b> <br>
                  <b>Monthly Salary:</b> <br>
                  <b>Per Day Salary:</b> <br>
                  <b>Payment Due:</b> <br>
                  <b>Account:</b> 
                </div> 
              </div>
              <br>
              <!-- /.row -->
              <div class="row">              
                <div class="col-12">
                  <h4>Payment Calculation</h4>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <td>Joining Date</td>
                        <td><input type="date" disabled id="joining_date" name="joining_date"></td>
                      </tr>
                      <tr>
                        <td>Total Working days</td>
                        <td><input type="number"  id="total_working_day" name="total_working_day" value="26"></td>
                      </tr>
                      <tr>

                        <tr>
                          <td>Total Leave</td>
                          <td><input type="number" id="total_leave" name="total_leave" value="0" ></td>
                        </tr>
                        <tr>

                        <td>Total Number of payable days</td>
                        <td><input type="number" disabled id="total_number_of_pay_day" name="total_number_of_pay_day"></td>
                      </tr>
                      <tr>
                        <td>Per Day Salary</td>
                        <td><input type="number" disabled id="per_day_salary" name="per_day_salary"></td>
                      </tr>
                      <tr>
                        <td>Monthly Salary</td>
                        <td><input type="number" disabled id="monthly_salary" name="monthly_salary"></td>
                      </tr>

                      <tr>
                        <td>Monthly Holiday Bonus</td>
                        <td><input type="number" disabled  id="monthly_holiday_bonus" name="monthly_holiday_bonus"></td>
                      </tr>

                      <tr>
                        <td>Total Daily Allowance</td>
                        <td><input type="number"  id="total_daily_allowance" name="total_daily_allowance"></td>
                      </tr>
                      <tr>
                        <td>Total Travel Allowance</td>
                        <td><input type="number"  id="total_travel_allowance" name="total_travel_allowance"></td>
                      </tr>
                      <tr>
                        <td>Rental Cost Allowance</td>
                        <td><input type="number"  id="rental_cost_allowance" name="rental_cost_allowance"></td>
                      </tr>
                      <tr>
                        <td>Hospital Bill Allowance</td>
                        <td><input type="number"  id="hospital_bill_allowance" name="hospital_bill_allowance"></td>
                      </tr>

                      <tr>
                        <td>Insurance Allowance</td>
                        <td><input type="number"  id="insurance_allowance" name="insurance_allowance"></td>
                      </tr>
                      <tr>
                        <td>Sales Commission</td>
                        <td><input type="number"  id="sales_commission" name="sales_commission"></td>
                      </tr>
                      <tr>
                        <td>Retail Commission</td>
                        <td><input type="number"  id="retail_commission" name="retail_commission"></td>
                      </tr>
                      <tr>
                        <th style="color: skyblue">Total Others</th>
                        <td><input type="number"  id="total_others" name="total_others"></td>
                      </tr>
                      <tr>
                        <th style="color: green">Total Salary</th>
                        <td><input type="number"  id="total_salary" name="total_salary"></td>
                      </tr>
                      <tr>
                        <td>Yearly Bonus</td>
                        <td><input type="number"  id="yearly_bonus" name="yearly_bonus"></td>
                      </tr>
                      <tr>
                        <td>Total Payable Salary</td>
                        <td><input type="number"  id="total_payable_salary" name="total_payable_salary"></td>
                      </tr>
                      <tr>
                        <td>Advance Less</td>
                        <td><input type="number"  id="advance_less" name="advance_less"></td>
                      </tr>
                      <tr>
                        <td>Any Deduction</td>
                        <td><input type="number"  id="any_deduction" name="any_deduction"></td>
                      </tr>
                      <tr>
                        <th>Final Pay Amount</th>
                        <td><input type="number"  id="final_pay_amount" name="final_pay_amount"></td>
                      </tr>
                      <tr>
                        <th style="color: red">Loan Advance</th>
                        <td><input type="number"  id="loan_advance" name="loan_advance"></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection


@push('myScripts')
<script>

$(document).ready(function() {
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
            });        
    });

$('#employee').on('change',function(event){
  event.preventDefault();
  var selectedEmployee = $('#employee').val();
  $('#total_leave').val('0');
  $('#total_number_of_pay_day').val('');
  $('#monthly_salary').val('');

  $('#total_daily_allowance').val('');
  $('#total_travel_allowance').val('');
  $('#rental_cost_allowance').val('');
  $('#hospital_bill_allowance').val('');
  $('#insurance_allowance').val('');
  $('#sales_commission').val('');
  $('#retail_commission').val('');
  $('#total_others').val('');
  $('#total_salary').val('');
  

axios.get('sanctum/csrf-cookie').then(response=>{
 axios.post('employee_details_dependancy',{
        data: selectedEmployee
      }).then(response=>{
      $('#joining_date').val(response.data.joining_date);
       $('#per_day_salary').val(response.data.per_day_salary);
      $('#monthly_holiday_bonus').val(response.data.per_day_salary);

       var total_leave = $('#total_leave').val();
       if(total_leave == '0'){
        $('#total_number_of_pay_day').val('26');

        var total_number_of_pay_day = parseFloat($('#total_number_of_pay_day').val());
        var per_day_salary = parseFloat($('#per_day_salary').val());
        var monthly_salary = total_number_of_pay_day*per_day_salary;
        $('#monthly_salary').val(monthly_salary);
       }
        console.log(response.data.per_day_salary);
      });
 });
});



$('#total_working_day').on('keyup',function(){
  $('#total_leave').val('');
  $('#total_number_of_pay_day').val('');
  $('#monthly_salary').val('');
});


//total leave calculation
$('#total_leave').on('keyup', function(){
    var total_working_day = parseFloat($('#total_working_day').val());
    var total_leave = parseFloat($('#total_leave').val());
    var per_day_salary = parseFloat($('#per_day_salary').val());
      
    var total_number_of_pay_day = total_working_day-total_leave;
    var monthly_salary = total_number_of_pay_day*per_day_salary;

    $('#total_number_of_pay_day').val(total_number_of_pay_day);
    $('#monthly_salary').val(monthly_salary);
    $('#monthly_holiday_bonus').val(per_day_salary);
    });



//total daily allowannce calculation
$('#total_daily_allowance').on('keyup',function(){
  $('#total_travel_allowance').val(0);
  $('#rental_cost_allowance').val(0);
  $('#hospital_bill_allowance').val(0);
  $('#insurance_allowance').val(0);
  $('#sales_commission').val(0);
  $('#retail_commission').val(0);
  var total_daily_allowance = parseFloat($('#total_daily_allowance').val());
  var total_travel_allowance = parseFloat($('#total_travel_allowance').val());
  var rental_cost_allowance = parseFloat($('#rental_cost_allowance').val());
  var hospital_bill_allowance = parseFloat($('#hospital_bill_allowance').val());
  var insurance_allowance = parseFloat($('#insurance_allowance').val());
  var sales_commission = parseFloat($('#sales_commission').val());
  var retail_commission = parseFloat($('#retail_commission').val());
  var monthly_salary = parseFloat($('#monthly_salary').val());
  var monthly_holiday_bonus = parseFloat($('#monthly_holiday_bonus').val());

  //total others result
  var total_others = (monthly_holiday_bonus+total_daily_allowance+total_travel_allowance+rental_cost_allowance+hospital_bill_allowance+insurance_allowance+sales_commission+retail_commission);
  $('#total_others').val(total_others);
  
  //total salary result
  var total_salary = (monthly_salary+total_others);
   $('#total_salary').val(total_salary);
});


//total travel allowannce calculation
$('#total_travel_allowance').on('keyup',function(){
  $('#rental_cost_allowance').val(0);
  $('#hospital_bill_allowance').val(0);
  $('#insurance_allowance').val(0);
  $('#sales_commission').val(0);
  $('#retail_commission').val(0);
  var total_daily_allowance = parseFloat($('#total_daily_allowance').val());
  var total_travel_allowance = parseFloat($('#total_travel_allowance').val());
  var rental_cost_allowance = parseFloat($('#rental_cost_allowance').val());
  var hospital_bill_allowance = parseFloat($('#hospital_bill_allowance').val());
  var insurance_allowance = parseFloat($('#insurance_allowance').val());
  var sales_commission = parseFloat($('#sales_commission').val());
  var retail_commission = parseFloat($('#retail_commission').val());
  var monthly_salary = parseFloat($('#monthly_salary').val());
  var monthly_holiday_bonus = parseFloat($('#monthly_holiday_bonus').val());

  //total others result
  var total_others = (monthly_holiday_bonus+total_daily_allowance+total_travel_allowance+rental_cost_allowance+hospital_bill_allowance+insurance_allowance+sales_commission+retail_commission);
  $('#total_others').val(total_others);
  
  //total salary result
  var total_salary = (monthly_salary+total_others);
   $('#total_salary').val(total_salary);
});


//rental allowance calculation
$('#rental_cost_allowance').on('keyup',function(){
  $('#hospital_bill_allowance').val(0);
  $('#insurance_allowance').val(0);
  $('#sales_commission').val(0);
  $('#retail_commission').val(0);
  var total_daily_allowance = parseFloat($('#total_daily_allowance').val());
  var total_travel_allowance = parseFloat($('#total_travel_allowance').val());
  var rental_cost_allowance = parseFloat($('#rental_cost_allowance').val());
  var hospital_bill_allowance = parseFloat($('#hospital_bill_allowance').val());
  var insurance_allowance = parseFloat($('#insurance_allowance').val());
  var sales_commission = parseFloat($('#sales_commission').val());
  var retail_commission = parseFloat($('#retail_commission').val());
  var monthly_salary = parseFloat($('#monthly_salary').val());
  var monthly_holiday_bonus = parseFloat($('#monthly_holiday_bonus').val());

  //total others result
  var total_others = (monthly_holiday_bonus+total_daily_allowance+total_travel_allowance+rental_cost_allowance+hospital_bill_allowance+insurance_allowance+sales_commission+retail_commission);
  $('#total_others').val(total_others);
  
  //total salary result
  var total_salary = (monthly_salary+total_others);
   $('#total_salary').val(total_salary);
});

//hospital bill allowance calculation
$('#hospital_bill_allowance').on('keyup',function(){
  $('#insurance_allowance').val(0);
  $('#sales_commission').val(0);
  $('#retail_commission').val(0);
  var total_daily_allowance = parseFloat($('#total_daily_allowance').val());
  var total_travel_allowance = parseFloat($('#total_travel_allowance').val());
  var rental_cost_allowance = parseFloat($('#rental_cost_allowance').val());
  var hospital_bill_allowance = parseFloat($('#hospital_bill_allowance').val());
  var insurance_allowance = parseFloat($('#insurance_allowance').val());
  var sales_commission = parseFloat($('#sales_commission').val());
  var retail_commission = parseFloat($('#retail_commission').val());
  var monthly_salary = parseFloat($('#monthly_salary').val());
  var monthly_holiday_bonus = parseFloat($('#monthly_holiday_bonus').val());

  //total others result
  var total_others = (monthly_holiday_bonus+total_daily_allowance+total_travel_allowance+rental_cost_allowance+hospital_bill_allowance+insurance_allowance+sales_commission+retail_commission);
  $('#total_others').val(total_others);
  
  //total salary result
  var total_salary = (monthly_salary+total_others);
   $('#total_salary').val(total_salary);
});


//insurance allowance calculation
$('#insurance_allowance').on('keyup',function(){
  $('#sales_commission').val(0);
  $('#retail_commission').val(0);
  var total_daily_allowance = parseFloat($('#total_daily_allowance').val());
  var total_travel_allowance = parseFloat($('#total_travel_allowance').val());
  var rental_cost_allowance = parseFloat($('#rental_cost_allowance').val());
  var hospital_bill_allowance = parseFloat($('#hospital_bill_allowance').val());
  var insurance_allowance = parseFloat($('#insurance_allowance').val());
  var sales_commission = parseFloat($('#sales_commission').val());
  var retail_commission = parseFloat($('#retail_commission').val());
  var monthly_salary = parseFloat($('#monthly_salary').val());
  var monthly_holiday_bonus = parseFloat($('#monthly_holiday_bonus').val());

  //total others result
  var total_others = (monthly_holiday_bonus+total_daily_allowance+total_travel_allowance+rental_cost_allowance+hospital_bill_allowance+insurance_allowance+sales_commission+retail_commission);
  $('#total_others').val(total_others);
  
  //total salary result
  var total_salary = (monthly_salary+total_others);
   $('#total_salary').val(total_salary);
});


//sales commission calculation
$('#sales_commission').on('keyup',function(){
  $('#retail_commission').val(0);
  var total_daily_allowance = parseFloat($('#total_daily_allowance').val());
  var total_travel_allowance = parseFloat($('#total_travel_allowance').val());
  var rental_cost_allowance = parseFloat($('#rental_cost_allowance').val());
  var hospital_bill_allowance = parseFloat($('#hospital_bill_allowance').val());
  var insurance_allowance = parseFloat($('#insurance_allowance').val());
  var sales_commission = parseFloat($('#sales_commission').val());
  var retail_commission = parseFloat($('#retail_commission').val());
  var monthly_salary = parseFloat($('#monthly_salary').val());
  var monthly_holiday_bonus = parseFloat($('#monthly_holiday_bonus').val());

  //total others result
  var total_others = (monthly_holiday_bonus+total_daily_allowance+total_travel_allowance+rental_cost_allowance+hospital_bill_allowance+insurance_allowance+sales_commission+retail_commission);
  $('#total_others').val(total_others);
  
  //total salary result
  var total_salary = (monthly_salary+total_others);
   $('#total_salary').val(total_salary);
});


//retail commission calculation
$('#retail_commission').on('keyup',function(){
  var total_daily_allowance = parseFloat($('#total_daily_allowance').val());
  var total_travel_allowance = parseFloat($('#total_travel_allowance').val());
  var rental_cost_allowance = parseFloat($('#rental_cost_allowance').val());
  var hospital_bill_allowance = parseFloat($('#hospital_bill_allowance').val());
  var insurance_allowance = parseFloat($('#insurance_allowance').val());
  var sales_commission = parseFloat($('#sales_commission').val());
  var retail_commission = parseFloat($('#retail_commission').val());
  var monthly_salary = parseFloat($('#monthly_salary').val());
  var monthly_holiday_bonus = parseFloat($('#monthly_holiday_bonus').val());

  //total others result
  var total_others = (monthly_holiday_bonus+total_daily_allowance+total_travel_allowance+rental_cost_allowance+hospital_bill_allowance+insurance_allowance+sales_commission+retail_commission);
  $('#total_others').val(total_others);
  
  //total salary result
  var total_salary = (monthly_salary+total_others);
   $('#total_salary').val(total_salary);
});




  </script>
  @endpush