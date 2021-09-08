<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            margin-top: 12px;
        }

        .table-responsive {
            overflow-x: auto;
        }
        .panel-heading {
            font-size: 1.4rem;
            background-color: rgb(235, 235, 235);
            margin: auto;
            height: 75px;
            align-items: center;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .text-center {
            display: flex;
            justify-content: center;
        }

        th,
        td {
            text-align: left;
            padding: 8px 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Simple Invoice - START -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2 style="font-weight: normal; text-align: center;">Invoice for purchase #{{$ticket->id}}</h2>
                </div>
                <hr />
            </div>
        </div>
        <div class="row">
            <div>
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td><strong>Item Price</strong></td>
                                    <td><strong>Item Quantity</strong></td>
                                    <td><strong>Discount</strong></td>
                                    <td><strong>Total</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>${{$ticket->tournament->title}}</td>
                                    <td>${{$ticket->tournament->price}}</td>
                                    <td>${{$ticket->ticket_count}}</td>
                                    <td>${{$ticket->coupon->amount ?? 0}}</td>
                                    <td>${{$ticket->total_price}}</td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"></td>
                                    <td class="highrow text-right"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Simple Invoice - END -->
</div>
</body>
</html>
