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
    background-color : black; height : 200px; width : 200px; color: antiquewhite; font-size: 35px;
}
.classbutton:hover
{
    background-color : rgb(104, 6, 89); height : 200px; width : 200px; color: rgb(211, 242, 33); font-size: 35px;
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

    <div class="Education" id="Education" style="justify-content: center; display:flex; background-color: rgb(22, 28, 36); clear: left; height:min-content;">
            
        <a href="{{route('class6.class6Crud')}}">
            <button class="classbutton">Class 6</button>
        </a>

        <a href="{{route('class7.class7Crud')}}">
            <button class="classbutton">Class 7</button>
        </a>
        <a href="{{route('class8.class8Crud')}}">
            <button class="classbutton">Class 8</button>
        </a>

    </div>

    <div class="Education" id="Education" style="justify-content: center; display:flex; background-color: rgb(22, 28, 36); clear: left; height:min-content;">
        <a href="{{route('class9.class9Crud')}}">
            <button class="classbutton">Class 9</button>
        </a>

        <a href="{{route('class10.class10Crud')}}">
            <button class="classbutton">Class 10</button>
        </a>

        <a href="{{route('class11.class11Crud')}}">
            <button class="classbutton">Class 11</button>
        </a>
    </div>

    <div class="Education" id="Education" style="justify-content: center; display:flex; background-color: rgb(22, 28, 36); clear: left; height:min-content;">
        <a href="{{route('class12.class12Crud')}}">
            <button class="classbutton">Class 12</button>
        </a>
    </div>
    
</body>
</html>