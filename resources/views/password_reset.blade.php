@extends('master')

@section('title')
Password Reset
@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-outline-info float-right" href="{{route('dashboard')}}">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

               
            <div class="col-12">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Reset Password</h3>
                      </div>
                      <div class="card-body">
                        <form id="passwordResetForm">
                        <div class="row">       
                            <div class="col-md-12 col-sm-12">
                                <div  class="form-group mb-4">
                                    <label>Current Password <small style="color: red">*</small></label>
                                    <input type="password"   id="current_password" name="current_password" class="form-control form-control-lg" />
                                </div> 
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div  class="form-group mb-4">
                                    <label>New Password <small style="color: red">*</small></label>
                                    <input type="password" onkeyup="typePassword()"  id="new_password" name="new_password" class="form-control form-control-lg" />
                                </div> 
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div  class="form-group mb-4">
                                    <label>Confirm New Password <small style="color: red">*</small></label>
                                    <input type="password" onkeyup="machPassword()"  id="confirm_password" name="confirm_password" class="form-control form-control-lg" />
                                    <p id="message"></p>
                                </div> 
                            </div>                                       
                          </div>
                          <button type="submit" class="btn btn-success float-right">Submit</button>
                        </form>  
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>           
        </div>      
        <br>
         
      </div><!-- /.container-fluid -->
    </div>    
  </div>
@endsection

@push('myScripts')
<script type="text/javascript">


const current_password = document.getElementById('current_password');
const new_password = document.getElementById('new_password');
const confirm_password = document.getElementById('confirm_password');
const message = document.getElementById('message');

function typePassword() {
  confirm_password.value = '';
  message.style.color = 'white';                 
    };

function machPassword() {   
        // Check if passwords match
        if (new_password.value === confirm_password.value){
            message.textContent = 'Passwords match!';
            message.style.color = 'green';
        }else{
            message.textContent = 'Passwords do not match!';
            message.style.color = 'red';
        }             
    };

document.getElementById('passwordResetForm').addEventListener('submit',function(event){
  event.preventDefault();

    var passwordResetFormData = new FormData(this);

     var current_password = document.getElementById('current_password').value;
    if(current_password == ''){
    Swal.fire({
            icon: "warning",
            title: "Please Enter Current Password",
            });
        return false;
    }

    var new_password = document.getElementById('new_password').value;
    if(new_password == ''){
    Swal.fire({
            icon: "warning",
            title: "Please Enter New Password",
            });
        return false;
    }
 
    if(new_password.length < 8){
      Swal.fire({
            icon: "warning",
            title: "New Password must be at least 8 characters",
          });
      return false;
    }

    var confirm_password = document.getElementById('confirm_password').value;
    if(confirm_password == ''){
    Swal.fire({
            icon: "warning",
            title: "Confirm password can not be null",
            });
        return false;
    }

    //matching new password and confirm password
    if (new_password !== confirm_password) {
      Swal.fire({
            icon: "error",
            title: "New Password and Confirm Password did not match",
            });
        return false;
    }


// Function to get CSRF token from meta tag
function getCsrfToken() {
  return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  }
// Set up Axios defaults
axios.defaults.withCredentials = true;
axios.defaults.headers.common['X-CSRF-TOKEN'] = getCsrfToken();


axios.get('sanctum/csrf-cookie').then(response=>{
axios.post('/gohona/new_password_set',passwordResetFormData).then(response=>{
  console.log(response);

  Swal.fire({
              icon: "success",
              title: ''+ response.data.message
            });

        setTimeout(function() {
            // window.location.reload();
            window.location.href = '{{ route("dashboard") }}';
        }, 2000);


}).catch(error => {
    if(error.response.data.error){
        Swal.fire({
            icon: "error",
            title: error.response.data.error
        });
    }else{
        Swal.fire({
            icon: "error",
            title: error.response.data.new_password
        });
    }
    });



  });

  });




</script>
@endpush



