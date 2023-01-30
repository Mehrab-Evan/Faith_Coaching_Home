<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faith coaching home</title>
</head>
<style>
*{
    box-sizing: border-box;
    font-family: Cambria;
    margin  : 0px;
}

.heading
{
    color: wheat;
    background-color: rgb(34, 29, 46);
    text-align : center;
    height: 140px;
    font-size : 30px;
}

.linker {
    /* display: flex; */
    /* tab-size: 1; */
    padding: 30px;
    font-size: 30px;
    font-style: bold;
}

.linker:hover
{
    color: rgb(136, 249, 230);
    font-size: 33px;
}

a {
    color: rgb(226, 195, 210);
    text-decoration: none;
}

.Navbar {
    
    text-align: center;
    margin: 50px;
    height: 70px;
    font-size: 70px;
}

.bodyclass 
{
    background-color: rgb(26, 38, 53);
}

.classbutton
{
    margin: 17px;
    background-color : rgb(50, 36, 36); height : 160px; width : 200px; color: antiquewhite; font-size: 35px;
}
.classbutton:hover
{
    background-color : rgb(104, 6, 89); height : 160px; width : 200px; color: rgb(211, 242, 33); font-size: 35px;
    border-radius: 50px;
    cursor: pointer;
}
.inptype
{
    height : 70px;
    font-size : 25px;
    background : transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid gray;
    color: #fff; 
}
</style>

<body class="bodyclass">

    <div class="heading">
        <h1 style="padding-top : 30px;">Faith Coaching Home</h1>
    <!-- Navigation Bar -->
    <div class="Navbar">
        <a class="linker" href="{{route('home.homepage')}}" style="color: rgb(125, 157, 251);">Home</a>
        <a class="linker" href="{{route('teacher.ifAdmin')}}">Teachers</a>
        <a class="linker" href="{{route('class8.StudentPage')}}">Students</a>
        <a class="linker" href="#Events">Events</a>
        <a class="linker" href="#Participations">Utility</a>
        <a class="linker" href="#FunFacts ">Gallery</a>
        <a class="linker" href="{{route('Contact.ContactGO')}}">Contact</a>
    </div>

    <div style="text-align: center;">
        <h1>{{$students9->name}}</h1>
            
            <table border="1" width="1000px" style="margin-left: 450px;">
                <tr style="height:120px;">
                    <th>Months</th>
                    <th>Paid</th>
                    <th>Due</th>
                </tr>
                <tr style="height:120px;">
                    <td>January</td>
                    <td>{{$students9->jan}}</td>
                    <td>{{$students9->jand}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>February</td>
                    <td>{{$students9->feb}}</td>
                    <td>{{$students9->febd}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>March</td>
                    <td>{{$students9->mar}}</td>
                    <td>{{$students9->mard}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>April</td>
                    <td>{{$students9->apr}}</td>
                    <td>{{$students9->aprd}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>May</td>
                    <td>{{$students9->may}}</td>
                    <td>{{$students9->mayd}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>June</td>
                    <td>{{$students9->jun}}</td>
                    <td>{{$students9->jund}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>July</td>
                    <td>{{$students9->jul}}</td>
                    <td>{{$students9->juld}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>August</td>
                    <td>{{$students9->aug}}</td>
                    <td>{{$students9->augd}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>September</td>
                    <td>{{$students9->sep}}</td>
                    <td>{{$students9->sepd}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>October</td>
                    <td>{{$students9->oct}}</td>
                    <td>{{$students9->octd}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>November</td>
                    <td>{{$students9->nov}}</td>
                    <td>{{$students9->novd}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>December</td>
                    <td>{{$students9->dec}}</td>
                    <td>{{$students9->decd}}</td>
                </tr>
                <tr style="height:120px;">
                    <td>Total Paid - Due</td>
                    <td>{{$students9->jan + $students9->feb + $students9->mar + $students9->apr + $students9->may + $students9->jun + $students9->jul + $students9->aug + $students9->sep + $students9->oct + $students9->nov + $students9->dec}}</td>
                    <td>{{$students9->jand + $students9->febd + $students9->mard + $students9->aprd + $students9->mayd + $students9->jund + $students9->juld + $students9->augd + $students9->sepd + $students9->octd + $students9->novd + $students9->decd}}</td>
                </tr>
            </table>
    </div>

    <div>
        <a href=""><button class="classbutton">Payment Confirm</button></a>
        <a href="{{route('class12.PayPDF', $students9->id)}}"><button class="classbutton">Payment History</button></a>
    </div>
    
</body>
</html>