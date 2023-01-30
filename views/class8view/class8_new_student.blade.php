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
    width : 100px;
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

    <div>
        <h1>Add New Student</h1>
    </div>
    <div style="color : red;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="font-size : 20px">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @if(Session::has('msg'))
    <p>{{Session::get('msg')}}</p>
    @endif
    <form action="{{route('class8.Store_data')}}" method="post">
        @csrf 
        <div class="table-class">
            <table border="1" width=1500>
                <tr style="height : 120px">
                    <td><label for="">Student's Name</label></td>
                    <td><input class="inptype" type="text" name="student_name" placeholder="Student's Name"></td>
                </tr>
                <tr style="height : 120px">
                    <td>
                        <label for="">Father's Name</label>
                    </td>
                    <td>
                        <input class="inptype" type="text" name="father_name" placeholder="Father's Name">
                </tr>
                <tr style="height : 120px">
                    <td><label for="">Mother's Name</label></td>
                    <td><input class="inptype" type="text" name="mother_name" placeholder="Mother's Name"></td>
                </tr>
                <tr style="height : 120px">
                    <td><label for="">School</label></td>
                    <td><input class="inptype" type="text" name="school" placeholder="School"></td>
                </tr>
                <tr style="height : 120px">
                    <td><label for="">Address</label></td>
                    <td><input class="inptype" type="text" name="address" placeholder="Address"></td>
                </tr>
                <tr style="height : 120px">
                    <td>
                        <label for="">Mobile Number</label>
                    </td>
                    <td>
                        <input class="inptype" type="text" name="mobile" placeholder="Mobile Number">
                    </td>
                </tr>
                <tr style="height : 120px">
                    <td>
                        <label for="">Date of Birth</label>
                    </td>
                    <td>
                        <input class="inptype" type="date" name="dob" placeholder="Date of Birth">
                    </td>
                </tr>
                <tr style="height : 120px">
                    <td>
                        <label for="">Year</label>
                    </td>
                    <td>
                        <input class="inptype" type="text" name="year" placeholder="Year">
                    </td>
                </tr>

                <tr style="height : 120px">
                    <td colspan=2>
                        <button type="submit" class="table-btn">Submit</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <div style="padding-bottom : 50px; padding-top : 50px;">
            <div style="padding-top : 20px">
                <a href="{{route('class8.class8Crud')}}"><button class="AddButton" >Back</button></a>
            </div>
    </div>
</body>
</html>