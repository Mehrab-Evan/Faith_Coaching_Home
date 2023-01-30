<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment History</title>
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
    <h1 class="heading2">{{$students9->name}} Class : 8</h1>
    <div></div>
    <table border="1" width="500px" style="margin-left: 100px;">
                <tr >
                    <th>Months</th>
                    <th>Paid</th>
                    <th>Due</th>
                </tr>
                <tr class="trow">
                    <td>January</td>
                    <td>{{$students9->jan}}</td>
                    <td>{{$students9->jand}}</td>
                </tr>
                <tr class="trow">
                    <td>February</td>
                    <td>{{$students9->feb}}</td>
                    <td>{{$students9->febd}}</td>
                </tr>
                <tr class="trow">
                    <td>March</td>
                    <td>{{$students9->mar}}</td>
                    <td>{{$students9->mard}}</td>
                </tr>
                <tr class="trow">
                    <td>April</td>
                    <td>{{$students9->apr}}</td>
                    <td>{{$students9->aprd}}</td>
                </tr>
                <tr class="trow">
                    <td>May</td>
                    <td>{{$students9->may}}</td>
                    <td>{{$students9->mayd}}</td>
                </tr>
                <tr class="trow">
                    <td>June</td>
                    <td>{{$students9->jun}}</td>
                    <td>{{$students9->jund}}</td>
                </tr>
                <tr class="trow">
                    <td>July</td>
                    <td>{{$students9->jul}}</td>
                    <td>{{$students9->juld}}</td>
                </tr>
                <tr class="trow">
                    <td>August</td>
                    <td>{{$students9->aug}}</td>
                    <td>{{$students9->augd}}</td>
                </tr>
                <tr class="trow">
                    <td>September</td>
                    <td>{{$students9->sep}}</td>
                    <td>{{$students9->sepd}}</td>
                </tr>
                <tr class="trow">
                    <td>October</td>
                    <td>{{$students9->oct}}</td>
                    <td>{{$students9->octd}}</td>
                </tr>
                <tr class="trow">
                    <td>November</td>
                    <td>{{$students9->nov}}</td>
                    <td>{{$students9->novd}}</td>
                </tr>
                <tr class="trow">
                    <td>December</td>
                    <td>{{$students9->dec}}</td>
                    <td>{{$students9->decd}}</td>
                </tr>
                <tr class="trow">
                    <td>Total Paid - Due</td>
                    <td>{{$students9->jan + $students9->feb + $students9->mar + $students9->apr + $students9->may + $students9->jun + $students9->jul + $students9->aug + $students9->sep + $students9->oct + $students9->nov + $students9->dec}}</td>
                    <td>{{$students9->jand + $students9->febd + $students9->mard + $students9->aprd + $students9->mayd + $students9->jund + $students9->juld + $students9->augd + $students9->sepd + $students9->octd + $students9->novd + $students9->decd}}</td>
                </tr>
            </table>
</body>
</html>