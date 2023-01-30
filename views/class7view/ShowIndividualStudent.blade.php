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
        <table border="1" width="1500px" style="margin-left: 200px;">
            <tr style="height: 80px;">
                <td>School</td>
                <td>{{$students9->school}}</td>
            </tr>
            <tr style="height: 80px;">
                <td>Father's Name</td>
                <td>{{$students9->fathers_name}}</td>
            </tr>
            <tr style="height: 80px;">
                <td>Mother's Name</td>
                <td>{{$students9->mothers_name}}</td>
            </tr>
            <tr style="height: 80px;">
                <td>Address</td>
                <td>{{$students9->address}}</td>
            </tr>
            <tr style="height: 80px;">
                <td>Mobile No.</td>
                <td>{{$students9->mobile}}</td>
            </tr>
            <tr style="height: 80px;">
                <td>Year</td>
                <td>{{$students9->year}}</td>
            </tr>
            <tr style="height: 80px;">
                <td>DOB</td>
                <td>{{$students9->dob}}</td>
            </tr>
        </table>

    </div>
    <div>
        <a href="{{route('class7.payment' , $students9->id)}}"><button class="classbutton">Payment</button></a>
        <a href=""><button class="classbutton">Result</button></a>
    </div>
    
</body>
</html>