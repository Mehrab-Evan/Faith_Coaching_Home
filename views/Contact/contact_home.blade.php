<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faith coaching home</title>

    <script>
        function sendMail() {
        var params = {
            name: document.getElementById("name").value,
            email: document.getElementById("email").value,
            message: document.getElementById("message").value,
        };

        const serviceID = "service_t0audf7";
        const templateID = "template_np525dp";

            emailjs.send(serviceID, templateID, params)
            .then(res=>{
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("message").value = "";
                console.log(res);
                alert("Your message sent successfully!!")

            })
            .catch(err=>console.log(err));

        }
    </script>

    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>

    <script type="text/javascript">
      (function () {
        emailjs.init("GKvvE6jn6pEZalEp_");
      })();
    </script>
    
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
        <h1>Send Email</h1>
    </div>
        <div class="table-class">
            <table border="1" width=1500>
                <tr style="height : 120px">
                    <td><label for="">Name</label></td>
                    <td><input class="inptype" type="name" id="name" name="name" placeholder="Name"></td>
                </tr>
                <tr style="height : 120px">
                    <td><label for="">Email.</label></td>
                    <td><input class="inptype" type="email" id="email" name="email" placeholder="Email"></td>
                </tr>
                <tr style="height : 120px">
                    <td>
                        <label for="">Message</label>
                    </td>
                    <td>
                        <input class="inptype" id="message" type="textarea" name="message" placeholder="Message">
                    </td>
                </tr>
                <tr style="height : 120px">
                    <td colspan=2>
                        <button type="button" onclick="sendMail()" class="table-btn">Send</button>
                    </td>
                </tr>
            </table>
        </div>
    <div style="padding-bottom : 50px; padding-top : 50px;">
            <div style="padding-top : 20px">
                <a href="{{route('home.homepage')}}"><button class="AddButton" >Back</button></a>
            </div>
    </div>

    
</body>
</html>