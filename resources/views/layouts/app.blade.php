<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Hurme+Geometric+Sans:ital,wght@0,400;0,700;0,900;1,400;1,700&display=swap"
        rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hurme+Geometric+Sans:400,700">
    <style>

        body {
            font-family: 'Hurme Geometric Sans', sans-serif;
        }
.old-price{

    font-size: 15px;
}


        .title-mobile-description {


            display: none;

        }

        .card-3-mobile {

            display: none !important;

        }

        .card-1-mobile {

            display: none !important;

        }




        .btn-continue {

            display: none;


        }

        .txt {

            margin-bottom: 47px;
        }

        .title-mobile {

            display: none;

        }

        .txt-title {


            margin-bottom: 37px;


        }

        .card-one-price {

            margin-top: 67px;
        }

        .custom-heading {
            font-family: 'Hurme Geometric Sans', sans-serif;
            font-weight: 900;
            text-align: center;
        }

        p {
            font-family: 'Hurme Geometric Sans', sans-serif;
            font-weight: 400;
        }

        .card {
         
            background-size: 100% 100%;
            background-repeat: no-repeat;
            border: none;
            width: 307px;
            height: 286px;

        }
        .card-1-annul{

   background-image: url('images/Subtract-mobile-green-new.png');

        }

                .card-1-monthly{

   background-image: url('images/Subtract-mobile-grey-new.png');

        }

        .card-text {

            color: #929194;

        }

        .round-button {
            display: inline-block;
            width: 175px;
            height: 50px;
            background-color: #ffffff;
            color: #2BC155;
            border: 2px solid #2BC155;
            border-radius: 60px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            font-weight: bold;
        }

        .gradient-button {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(to bottom, #7489F2, #3E55E4);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            border: none;
            border-radius: 60px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        .sticky-text {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .content-card {
            margin-top: 17px;
        }

        .full-container {
            padding: 20px;
        }

        p {
            color: #929194;
        }

        .top-btn {
            margin-top: -67px;
            width: 130px;
            background-color: #2BC155;
            color: #fbf9ff;
        }

        .top-month-btn {
            margin-top: -67px;
            width: 130px;
            border: 2px solid #605E64;
            color: #605E64;
        }

        .discount-bg {
            background-color: #F6F8FB;
            border-radius: 60px;
            height: 50px;
            width: 250px;
        }

        .btn-success-color {
            width: 140px;
            background-color: #2BC155;
            color: #fbf9ff
        }

        .inv-text {
            font-size: 12px;
            top: 176px;
            position: absolute;
        }

        .modal-content {
            margin: 20px;
        }


        @media screen and (max-width: 1199px) {

            .card {
                background-image: url('images/Subtract-mobile-green-new.png');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                border: none;
                width: 216px;
                height: 286px;

            }

            .top-month-btn {

                margin-top: -67px;
                width: 98px;
                border: 2px solid #605E64;
                color: #605E64;
            }

            .top-btn {
                margin-top: -67px;
                width: 98px;
                background-color: #2BC155;
                color: #fbf9ff;

            }

            .discount-bg {
                background-color: #F6F8FB;
                border-radius: 60px;
                height: 50px;
                width: 179px;
            }

            hr {
                margin-top: -33px;
            }
        }

        @media screen and (max-width: 1199px) {

            .modal-content {
                margin: 0px;
            }

            .card {
                background-image: url('images/Subtract-mobile-green-new.png');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                border: none;
                width: 216px;
                height: 286px;

            }

            .top-month-btn {

                margin-top: -67px;
                width: 98px;
                border: 2px solid #605E64;
                color: #605E64;
            }

            .top-btn {
                margin-top: -67px;
                width: 98px;
                background-color: #2BC155;
                color: #fbf9ff;

            }

            .discount-bg {
                background-color: #F6F8FB;
                border-radius: 60px;
                height: 50px;
                width: 179px;
            }

            hr {
                margin-top: -33px;
            }
        }


        @media screen and (min-width: 800px) {
            .col-md-4 {
                display: block;
                margin-bottom: 20px;
            }

            .modal-content {
                margin: 0px;
            }


        }

        @media screen and (max-width: 800px) {
            .col-md-4 {
                display: block;
                margin-bottom: 20px;
            }

            .modal-content {
                margin: 0px;
            }


            .custom-heading {
                font-size: 14px;
            }

            h4 {
                font-size: 14px;
            }

            p {
                font-size: 12px;

            }

            .card {
                /* background-image: url('images/Subtract-mobile-green-new.png'); */
                background-size: 0% 0%;
                background-repeat: no-repeat;
                border: none;
                width: 100%;
                height: 40%;
                border: 1px solid #2BC155;
            }

            .btn.round-button.top-month-btn {
                display: none;
            }

            .btn.round-button.top-btn {
                display: none;

            }

            .discount-bg {

                background-color: #F6F8FB;
                border-radius: 60px;
                height: 30px;
                width: 155px;
                position: relative;
                left: 105px;
                top: -72px;
            }



            .discount-bg span {
                font-size: 12px;
            }


            .arrow-icon {
                display: none;

            }

            .inv-text {
                display: none;
            }

            hr {
                display: none;
            }

            .old-price {


                display: block;

            }


            .card-one-inv {


                display: none;

            }

            .btn.btn-success.round-button {


                display: none;

            }



            h5 {
                font-weight: 900;
            }

            .col-md-4 {

                margin-bottom: -72px;

            }

            .btn.round-button.btn-success-color {

                display: none;

            }

            .btn-continue {

                display: inline;
                min-width: 100%;
                margin-top: -74px;
                height: 45px;
            }

            .txt-title {

                bottom: 62px;

            }

            .title-mobile {

                display: flex;

            }


            .title-mobile-description {


                position: absolute;
                top: 40px;
                left: 6px;

            }

            .title-mobile-description {


                display: flex;

            }

            .title-mobile-description {


                display: block;

            }

            .card-3 {
                display: none !important;
            }

            .card-1 {
                display: none !important;
            }

            .txt-title {
                bottom: 50px;
                position: relative;
                /* left: 100px; */
                text-align: end !important;
                left: 10px;
                font-size: 18px;
            }

            .gradient-button {
                padding: 0px 0px;
            }

            .card-3-mobile {

                display: block !important;

            }

            .card-1-mobile {

                display: block !important;

            }

        }

        @media (max-width: 500px) {
 .title-mobile{
    font-size: 14px;
  }
  .title-mobile-description{
    font-size: 9px;
  }
  .old-price{
    font-size: 9px ;
  }
  .txt-title{
    font-size: 12px ;
  }

.discount-bg {
    background-color: #F6F8FB;
    border-radius: 60px;
    height: 30px;
    width: 147px;
    position: relative;
    left: 37px;
    top: -61px;
}

         .card {
    background-image: url(images/Subtract-mobile-green-new.png);
    background-size: 100% 100%;
    background-repeat: no-repeat;
    border: none;
    width: 120px;
    height: 100px;
}



}

@media (max-width: 1000px) and (min-width: 764px) {

            .col-md-4 {
                display: block;
                margin-bottom: 20px;
            }

            .modal-content {
                margin: 0px;
            }


            .custom-heading {
                font-size: 14px;
            }

            h4 {
                font-size: 14px;
            }

            p {
                font-size: 12px;

            }

            .card {
                /* background-image: url('images/Subtract-mobile-green-new.png'); */
                background-size: 0% 0%;
                background-repeat: no-repeat;
                border: none;
                width: 100%;
                height: 40%;
                border: 1px solid #2BC155;
            }

            .btn.round-button.top-month-btn {
                display: none;
            }

            .btn.round-button.top-btn {
                display: none;

            }

            .discount-bg {

                background-color: #F6F8FB;
                border-radius: 60px;
                height: 30px;
                width: 155px;
                position: relative;
                left: 105px;
                top: -72px;
            }



            .discount-bg span {
                font-size: 12px;
            }


            .arrow-icon {
                display: none;

            }

            .inv-text {
                display: none;
            }

            hr {
                display: none;
            }

            .old-price {


                display: block;

            }


            .card-one-inv {


                display: none;

            }

            .btn.btn-success.round-button {


                display: none;

            }



            h5 {
                font-weight: 900;
            }

            .col-md-4 {

                margin-bottom: -72px;

            }

            .btn.round-button.btn-success-color {

                display: none;

            }

            .btn-continue {

                display: inline;
                min-width: 100%;
                margin-top: -74px;
                height: 45px;
            }

            .txt-title {

                bottom: 62px;

            }

            .title-mobile {

                display: flex;

            }


            .title-mobile-description {


                position: absolute;
                top: 40px;
                left: 6px;

            }

            .title-mobile-description {


                display: flex;

            }

            .title-mobile-description {


                display: block;

            }

            .card-3 {
                display: none !important;
            }

            .card-1 {
                display: none !important;
            }

            .txt-title {
                bottom: 50px;
                position: relative;
                /* left: 100px; */
                text-align: end !important;
                left: 10px;
                font-size: 18px;
            }

            .gradient-button {
                padding: 0px 0px;
            }

            .card-3-mobile {

                display: block !important;

            }

            .card-1-mobile {

                display: block !important;

            }

        







}

/*@media (max-width: 992px) and (min-width: 764px) {
    .card {
        background-image: url(images/Subtract-mobile-green-new.png);
        background-size: 100% 100%;
        background-repeat: no-repeat;
        border: none;
        width: 120px;
        height: 100px;
    }
    .top-month-btn{
    height: 28px;
    margin-top: -79px;
    width: 64px;
    font-size: 9px;
    }
    .top-btn{

    height: 28px;
    margin-top: -79px;
    width: 64px;
    font-size: 8px;

    }
    p{
        font-size: 8px;
    }
    .custom-heading{


font-size: 22px;

    }
}*/

    </style>
</head>

<body>
    <div class="container">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large
            modal</button>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="full-container">

                    <div class="modal-content">
                        <div class="container-fluid" style="padding: 30px">
                            <div class="row justify-content-center align-items-center">
                                <h4 class="modal-title custom-heading text-center">
                                    <span style="color: #2BC155;">Save Up to 60% </span> Changing Billing<br />
                                    Frequency to Annual or Quarterly!
                                </h4>
                            </div>

                            <div class="row text-center" style="margin-top:2%;margin-bottom: 2%;">
                                <div class="row container-fluid">
                                    <p class="container-fluid ">
                                        Prevent QR code deactivation caused by payment issues! Switch to annual or
                                        quarterly billing to reduce payment frequency, eliminating the risk of your QR
                                        codes being deactivated due to payment problems.
                                        You'll still enjoy the same outstanding features, now at up to 60% off. Act now
                                        to secure your QR code access and enjoy peace of mind!
                                    </p>
                                </div>
                                <br />
                                <div class="container-fluid">
                                    <div class="row content-card">
                                        <div class="col-md-4 text-center card-1">

                                            <div class="card card-1-monthly">

                                                <div class="card-body">
                                                    <button class="btn round-button top-month-btn">Monthly</button>

                                                    <h5 class="card-title txt-title card-one-price">$ 49.95
                                                        /mo</h5>
                                                    <p class="card-text card-one-inv">Invoiced every year</p>
                                                    <hr>
                                                    <button class="btn btn-success round-button">Keep Monthly</button>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center card-2 ">
                                            <div class="card card-1-annul">
                                                <div class="card-body">

                                                    {{-- <div class="row"> --}}

                                                    <h5 class="row title-mobile"><span style="display: block;">

                                                            Annual Plan

                                                        </span>
                                                        <br />
                                                    </h5>
                                                    <p class="card-text title-mobile-description">Invoiced every year
                                                    </p>


                                                    {{-- </div> --}}

                                                    <button class="btn round-button top-btn">Annually</button>
                                                    <div class="discount-bg">
                                                        <button class="gradient-button">

                                                            <div class="d-flex align-items-center">
                                                                <img class="img-fluid"
                                                                    style="max-height: 35px; max-width: 35px; margin-top: -7px;"
                                                                    src="{{ asset('images/pres.jpg') }}"
                                                                    alt="Discounted Image">
                                                                <span class="ml-2">60% Discount</span>
                                                            </div>
                                                    </div>

                                                    <img class="arrow-icon" width="90px" height="35px"
                                                        src="{{ asset('images/arrow.jpg') }}">
                                                    <b>

                                                        <h5 class="card-title text-center txt-title">
                                                            <s class="old-price">$49.95 /mo</s>
                                                            <span>
                                                                $ 19.95 /mo
                                                            </span>
                                                        </h5>
                                                    </b>
                                                    <p></p>
                                                    <p class="card-text inv-text">Invoiced every year</p>
                                                    <hr>
                                                    <button
                                                        class="btn btn-success round-button btn-success-color">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center card-3">
                                            <div class="card card-1-annul">
                                                <div class="card-body">
                                                    <button class="btn round-button top-btn">Quarterly</button>
                                                    <div class="discount-bg">

                                                        <button class="gradient-button">

                                                            <img width="35px" height="35px" style="margin-top: -7px"
                                                                src="{{ asset('images/pres.jpg') }}">
                                                            40% Discount</button>
                                                    </div>
                                                    <img class="arrow-icon" width="90px" height="35px"
                                                        src="{{ asset('images/arrow.jpg') }}">
                                                    <b>
                                                        <h5 class="card-title text-center txt-title">
                                                            <s class="old-price">$49.95/mo</s>
                                                            <span>$ 29.95/mo</span>
                                                        </h5>
                                                    </b>
                                                    <button
                                                        class="btn row btn-success-color btn-continue">Continue</button>

                                                    <p></p>
                                                    <p class="card-text inv-text">Invoiced every year</p>
                                                    <hr>
                                                    <button class="btn round-button btn-success-color">Continue</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 text-center card-3 card-3-mobile">
                                            <div class="card">
                                                <div class="card-body">

                                                    {{-- <div class="row"> --}}

                                                    <h5 class="row title-mobile"><span style="display: block;">

                                                        Quarterly plan

                                                        </span>
                                                        <br />
                                                    </h5>
                                                    <p class="card-text title-mobile-description">Invoiced every year
                                                    </p>


                                                    {{-- </div> --}}

                                                    <button class="btn round-button top-btn">Annually</button>
                                                    <div class="discount-bg">
                                                        <button class="gradient-button">

                                                            <div class="d-flex align-items-center">
                                                                <img class="img-fluid"
                                                                    style="max-height: 35px; max-width: 35px; margin-top: -7px;"
                                                                    src="{{ asset('images/pres.jpg') }}"
                                                                    alt="Discounted Image">
                                                                <span class="ml-2">40% Discount</span>
                                                            </div>
                                                    </div>

                                                    <img class="arrow-icon" width="90px" height="35px"
                                                        src="{{ asset('images/arrow.jpg') }}">
                                                    <b>

                                                        <h5 class="card-title text-center txt-title">
                                                            <s class="old-price">$49.95
                                                                /mo</s>
                                                            <span>
                                                                $ 29.95/mo
                                                            </span>
                                                        </h5>
                                                    </b>
                                                    <p></p>
                                                    <p class="card-text inv-text">Invoiced every Quater</p>
                                                    <hr>
                                                    <button
                                                        class="btn btn-success round-button btn-success-color">Continue</button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 text-center card-1 card-1-mobile">
                                            <div class="card">
                                                <div class="card-body">

                                                    {{-- <div class="row"> --}}

                                                   <b> <h5 class="row title-mobile"><span style="display: block;">

                                                            Current Plan <span style="font-size: 15px">(Monthly)</span>

                                                        </span>
                                                        <br />
                                                    </h5>
                                                </b>
                                                    <p class="card-text title-mobile-description">Invoiced every Month
                                                    </p>


                                                    {{-- </div> --}}

                                                    <button class="btn round-button top-btn">Annually</button>


                                                    <img class="arrow-icon" width="90px" height="35px"
                                                        src="{{ asset('images/arrow.jpg') }}">
                                                    <b>

                                                        <h5 class="card-title text-center txt-title">
                                                            {{-- <s class="old-price" style="font-size: 15px;">$49.95
                                                                /mo</s> --}}

                                                            <span>
                                                                $ 49.95 /mo
                                                            </span>

                                                                <pre> </pre>  {{-- $ 49.95 /mo --}}

                                                        </h5>
                                                    </b>
                                                    <p></p>
                                                    <p class="card-text inv-text">Invoiced every year</p>
                                                    <hr>
                                                    <button
                                                        class="btn btn-success round-button btn-success-color">Continue</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <p class="card-text container-fluid text-center  col-md-6 mt-3 mb-4">Please
                                            note
                                            that after
                                            selecting your option, you'll be asked to confirm your choice in a second
                                            step.</p>
                                    </div>
                                    <div class="row">
                                        <p class="card-text container-fluid text-center"> By accepting one of our
                                            offers, your billing frequency will change from Monthly to either Quarterly
                                            or Annually. Your payment for the new plan will only be processed at the end
                                            of your current billing cycle, which concludes on [DATE]. This means you
                                            won't lose the payment you've already made for your current Monthly plan.
                                        </p>
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
