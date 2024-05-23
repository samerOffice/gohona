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
                    <select class="form-control select2bs4"  name="blood_group" style="width: 80%;">                                  
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
                        <td>Joining Date:</th>
                        <td><input type="date" readonly id="joining_date" name="joining_date"></td>
                      </tr>
                      <tr>
                        <td>Total Working days:</th>
                        <td><input type="number" id="total_working_day" name="total_working_day" ></td>
                      </tr>
                      <tr>

                        <tr>
                          <td>Total Leave:</th>
                          <td><input type="number" id="total_leave" name="total_leave" ></td>
                        </tr>
                        <tr>

                        <td>Total Number of payable days:</th>
                        <td><input type="number" id="total_number_of_pay_day" name="total_number_of_pay_day"></td>
                      </tr>
                      <tr>
                        <td>Per Day Salary:</th>
                        <td><input type="number" readonly id="per_day_salary" name="per_day_salary"></td>
                      </tr>
                      <tr>
                        <td>Monthly Salary</th>
                        <td><input type="number" readonly id="monthly_salary" name="monthly_salary"></td>
                      </tr>

                      <tr>
                        <td>Monthly Holiday Bonus</th>
                        <td><input type="number"  id="monthly_holiday_bonus" name="monthly_holiday_bonus"></td>
                      </tr>

                      <tr>
                        <td>Total Daily Allowance</th>
                        <td><input type="number"  id="total_daily_allowance" name="total_daily_allowance"></td>
                      </tr>
                      <tr>
                        <td>Total Travel Allowance</th>
                        <td><input type="number"  id="total_travel_allowance" name="total_travel_allowance"></td>
                      </tr>

                      <tr>
                        <td>Rental Cost Allowance</th>
                        <td><input type="number"  id="rental_cost_allowance" name="rental_cost_allowance"></td>
                      </tr>

                      <tr>
                        <td>Total Travel Allowance</th>
                        <td><input type="number"  id="total_travel_allowance" name="total_travel_allowance"></td>
                      </tr>

                      <tr>
                        <td>Hospital Bill Allowance</th>
                        <td><input type="number"  id="hospital_bill_allowance" name="hospital_bill_allowance"></td>
                      </tr>

                      <tr>
                        <td>Insurance Allowance</th>
                        <td><input type="number"  id="insurance_allowance" name="insurance_allowance"></td>
                      </tr>
                      <tr>
                        <td>Sales Commission</th>
                        <td><input type="number"  id="sales_commission" name="sales_commission"></td>
                      </tr>
                      <tr>
                        <td>Retail Commission</th>
                        <td><input type="number"  id="retail_commission" name="retail_commission"></td>
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
        $('.summernote').summernote();
        
        $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
    });


  </script>
  @endpush