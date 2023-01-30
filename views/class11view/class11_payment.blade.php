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
.classbutton2
{
    margin: 17px;
    background-color : rgb(50, 36, 36); height : 100px; width : 150px; color: antiquewhite; font-size: 35px;
}
.classbutton2:hover
{
    background-color : rgb(104, 6, 89); color: rgb(211, 242, 33); font-size: 35px;
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
    @if(Session::has('msg'))
    <p>{{Session::get('msg')}}</p>
    @endif
    <div style="text-align: center;">
        <h1>{{$students9->name}}</h1>
        <form action="{{route('class11.paymentConfirm',$students9->id)}}" method="post">
            @csrf
            <table border="1" width="1500px" style="margin-left: 200px;">
                <tr style="height: 120px;">
                    <td>Father's Name : </td>
                    <td>{{$students9->fathers_name}}</td>
                </tr>
                <tr style="height: 120px;">
                    <td>Mother's Name : </td>
                    <td>{{$students9->mothers_name}}</td>
                </tr>
                <tr style="height: 120px;">
                    <td>Mobile : </td>
                    <td>{{$students9->mobile}}</td>
                </tr>
                <tr style="height: 120px;">
                    <td>Total Amount : </td>
                    <td><input type="number" name="total" id="total" class="inptype" placeholder="Total Amount"></td>
                </tr>
                <tr style="height: 120px;">
                    <td>Paid Amount : </td>
                    <td><input type="number" name="paid" id="paid" class="inptype" placeholder="Paid Amount"></td>
                </tr>
                <tr style="height: 120px;">
                    <td>Due Amount : </td>
                    <td>
                        <input type="number" name="due" id="due" class="inptype" placeholder="Due Amount">
                        <button type="button" onclick="calculate()" class="classbutton2">Calculate</button>
                    </td>
                </tr>
                <tr style="height: 120px;">
                    <td>Month : </td>
                    <td><input type="text" class="inptype" id="month" name="month" placeholder="Month"></td>
                </tr>
            </table>
            <div>
                <button type="submit" class="classbutton">Paid</button>
            </div>
        </form>

        <a href="{{route('class11.paymentHistory', $students9->id)}}"><button class="classbutton">Payment History</button></a>

    </div>
    <script>
        function calculate()
        {
            let total = document.getElementById("total").value; //FIRST_NUMBER = first value
            let paid = document.getElementById("paid").value; //SECOND_NUMBER = second value

            document.getElementById("due").value = (Number(total) - Number(paid));
            //document.getElementById("Result").setAttribute('size', '40');
        }
    </script>

    
</body>
</html>