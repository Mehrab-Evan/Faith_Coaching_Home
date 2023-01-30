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
.AddButton
{
    height : 50px;
    width : 200px;
    font-size: 23px;
    background-color: rgb(164, 216, 162);
    border-radius: 10px;
    color: rgb(28, 27, 29);
    
}
.AddButton:hover
{
    background-color: rgb(152, 72, 193);
    border-radius: 80px;
    color: rgb(18, 18, 19);
    cursor: pointer;
}
.table-class
{
    padding-top : 50px;
    padding-left : 200px;
    color : white;
    font-size : 25px;
}

.table-btn
{
    height : 50px;
    width : 80px;
    font-size: 23px;
    background-color: rgb(164, 216, 162);
    border-radius: 10px;
    color: rgb(28, 27, 29);
}

.table-btn:hover
{
    background-color: rgb(152, 72, 193);
    border-radius: 80px;
    color: rgb(18, 18, 19);
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

    <div>
        <h1>Student List Class 11</h1>
    </div>

    <div style="padding-top : 20px">
        <a href="{{route('class11.newStudent')}}"><button class="AddButton" >Add new Student</button></a>
    </div>
    <div class="table-class">
        <table border="1" width=1500>
            <tr style="height : 80px">
                <th style="color : wheat;">Student ID</th>
                <th style="color : wheat;">Student Name</th>
                <th style="color : wheat;">Father's Name</th>
                <th style="color : wheat;">Mother's Name</th>
                <th style="color : wheat;">Mobile No.</th>
                <th style="color : wheat;">School</th>
                <th style="color : wheat;">Year</th>
                <th style="color : wheat;">Action</th>
            </tr>
            @foreach($students9 as $key=>$student)

            <tr style="height : 80px">
                <td>{{++$key}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->fathers_name}}</td>
                <td>{{$student->mothers_name}}</td>
                <td>{{$student->mobile}}</td>
                <td>{{$student->school}}</td>
                <td>{{$student->year}}</td>
                <td>
                    <a href="{{route('class11.Edit', $student->id)}}"><button class="table-btn">Edit</button></a>
                    <a href="{{route('class11.Delete', $student->id)}}" onclick="return confirm('Are you sure to delete?')"><button class="table-btn">Delete</button></a>
                    <a href="{{route('class11.showindi', $student->id)}}"><button class="table-btn">Show</button></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>