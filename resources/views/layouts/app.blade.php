<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hurme+Geometric+Sans:ital,wght@0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Hurme Geometric Sans', sans-serif;
        }
        
        .custom-heading {
            font-family: 'Hurme Geometric Sans', sans-serif;
            font-weight: 900;
            text-align: center;
        }
        p{
            font-family: 'Hurme Geometric Sans', sans-serif;
            font-weight: 400;
        }

        .card {
            background-image: url('images/Subtract-mobile-green-new.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            border: none;
            width: 307px;
            height: 286px;
            /* padding-top: 59px */
        }
        .card-text{

            color: #929194;

        }
        .round-button {
            display: inline-block;
  width: 175px;
  height: 50px; 
  background-color: #ffffff;
  color: #2BC155;
  border: 2px solid #2BC155 ;
  border-radius: 20px; 
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s; 
  font-weight: bold;
}

.gradient-button {
  display: inline-block;
  padding: 10px 20px; /* Adjust padding to control the button size */
  background: linear-gradient(to bottom, #7489F2, #3E55E4);
  -webkit-background-clip: text; /* Apply gradient to text (for cross-browser compatibility) */
  background-clip: text; /* Apply gradient to text */
  color: transparent; /* Hide the original text color */
  border: none;
  border-radius: 5px; /* Adds rounded corners, adjust as needed */
  cursor: pointer;
  font-size: 16px;
  transition: background 0.3s; /* Add a smooth color transition on hover */
}

/* Custom styles for the sticky text */
.sticky-text {
  position: fixed;
  top: 0; /* Stick it to the top of the page */
  left: 50%; /* Center it horizontally */
  transform: translateX(-50%); /* Center it horizontally */
  background-color: #fff; /* Background color for visibility */
  padding: 10px; /* Adjust padding as needed */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
  z-index: 1000; /* Ensure it's above other content */
}










    </style>
</head>
<body>
    <div class="container">
        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
        
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="container-fluid" style="padding: 20px">

                    <div class="modal-content" style="margin: 20px">
                        <div class="container-fluid" style="min-height: 80vh;padding: 40px">
                            <div class="row justify-content-center align-items-center" >
                                <h4 class="modal-title custom-heading text-center" >
                                    <span style="color: #2BC155;">Save Up to 60% </span> Changing Billing<br/> Frequency to Annual or Quarterly!
                                </h4>
                            </div>
                           
                            <div class="row text-center" style="margin-top:2%;margin-bottom: 2%;">
                                <div class="row container-fluid">
                                    <p class="container-fluid " style="color: #929194;">
                                      Prevent QR code deactivation caused by payment issues! Switch to annual or quarterly billing to reduce payment frequency, eliminating the risk of your QR codes being deactivated due to payment problems.
                                      You'll still enjoy the same outstanding features, now at up to 60% off. Act now to secure your QR code access and enjoy peace of mind!
                                    </p>
                                  </div>
                                <br/>

                                  <div class="col-md-4" >
                                    
                                    <div class="card" >
                                        
                                        <div class="card-body">
                                            <button class="btn round-button" style="margin-top: -67px;width: 130px;border: 2px solid #605E64;color: #605E64">Monthly</button>
    
                                            <h5 class="card-title" style="margin-top: 67px;">$ 49.95 /mo</h5>
                                            <p class="card-text">Invoiced every year</p>
                                            <hr>
                                            <button class="btn btn-success round-button">Keep Monthly</button>
    
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4" style="width: 300px; height: 400px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <button class="btn round-button" style="margin-top: -67px;width: 130px;background-color:#2BC155;color: #fbf9ff">Annually</button>
    
                                            <h5 class="card-title" style="margin-top: 67px;">$ 49.95 /mo</h5>
                                            <p class="card-text">Invoiced every year</p>
                                            <hr>
                                            <button class="btn btn-success round-button">Keep Monthly</button>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="width: 300px; height: 400px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <button class="btn round-button" style="margin-top: -67px;width: 130px;background-color:#2BC155;color: #fbf9ff">Quarterly</button>
<div style="background-color: #F6F8FB;border-radius: 20px;height:50px ;width:250px;">
    <button class="gradient-button" >
    
        <img width="35px" height="35px" style="margin-top: -7px" src="{{ asset('images/pres.jpg') }}" >
        60% Discount</button>
</div>
<img width="70px" height="35px"  src="{{ asset('images/arrow.jpg') }}" >                                 
    <b > <h5 class="card-title text-center"  style="
        margin-bottom: 47px;"><s style="font-size: 15px;">$49.95 /mo</s>  $ 49.95 /mo</h5></b>
    <p></p>                                
    <p style="font-size: 12px;top: 176px;position: absolute;" class="card-text ">Invoiced every year</p>                                      
                                            <hr>
                                            <button class="btn btn-success round-button">Keep Monthly</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript and your custom scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
