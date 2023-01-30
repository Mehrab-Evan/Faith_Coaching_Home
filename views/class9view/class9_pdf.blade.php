<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Recipt</title>
</head>

<style>
    .heading
    {
        text-align : center;
        font-size : 25px;
    }
    .trow
    {
        height : 60px;
        text-align : center;
    }
    .heading2
    {
        text-align : center;
        font-size : 22px;
    }
    td
    {
        text-align : center;
        font-size : 18px;
    }
    table
    {
        margin-left : 100px;
        border-color : green;
        border-radius : 50px;
        border-style : none;
    }
    p
    {
        text-align : center;
        font-size : 18px;
    }
</style>
<body>
    <h1 class="heading">Faith Coaching Home</h1>
    <h1 class="heading2">Payment Receipt</h1>
    <p>{{$update}}</p>
    <table border=1 width=400>
        <tr class="trow">
            <td>Name</td>
            <td id="name">{{$name}}</td>
        </tr>
        <tr class="trow">
            <td>Class</td>
            <td id="name">{{$cl}}</td>
        </tr>
        <tr class="trow">
            <td>Month</td>
            <td>{{$month}}</td>
        </tr>
        <tr class="trow">
            <td>Amount</td>
            <td>{{$total}}</td>
        </tr>
        <tr class="trow">
            <td>Paid</td>
            <td style="color:green;">{{$paidD}}</td>
        </tr>
        <tr class="trow">
            <td>Due</td>
            <td style="color:red;">{{$dueD}}</td>
        </tr>
    </table>
    <br>
    <table border=1>
        <tr class="trow">
            <td width=200px height=50px></td>
        </tr>
        <tr >
            <td width=200px>Receiver Signature</td>
        </tr>
    </table>
</body>
</html>