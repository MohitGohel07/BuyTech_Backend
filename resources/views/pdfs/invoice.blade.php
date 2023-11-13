<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
        }

        .mt-5 {
            margin-top: 3rem;
        }

        .mt-3 {
            margin-top: 1.5rem;
        }

        .my-5 {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .my-3 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        table {
            width: 80%;
        }

        th,
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <section class="latest-podcast-section section-padding pb-0" id="section_2">          
                <div class="row justify-content-center g-3">
                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <div class="">
                                <div class="d-flex justify-content-center my-4" style="text-align:center;">
                                    <img src="{{ URL::to('public/images/bg_img.jpeg') }}" alt="" width="150px">
                                </div>

                                <div class="my-3">
                                    Hello, {{ $userName->name }}.<br>
                                    Thank you for shopping from our store and for your order.
                                </div>

                                <p>Important Note: </p>
                                <p>Please be sure to package all your cards in a strong plastic case such as a card
                                    saver. </p>
                                <p>We don’t encourage our customers to utilize top loaders as cards often slip out
                                    causing unwanted damage
                                    before they arrive to our facility. </p>
                                <p>However, please note that we will not turn away orders packaged with top loaders.</p>
                                <p>Always package your orders with cardboard and bubble wrap to keep them safe during
                                    transit. </p>
                                <p class="mt-5">Our address: </p>
                                <p>BUY TECH LLC</p>
                                <p>1125 KKV HALL</p>
                                <p>RAJKOT, 361160</p>
                            </div>
                           
                            <h4 class="section-title">Order Details:</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->total }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </section>
    </div>
</body>

</html>
