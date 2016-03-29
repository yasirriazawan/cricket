

<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="/socket.io/socket.io.js"></script>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css" />
    <script src="./bootstrap/jquery.min.js"></script>
    <script src="./bootstrap/bootstrap.min.js"></script>
      
   <!--  <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->

    <script>
        $(function(){
            var iosocket = io.connect();
            iosocket.on('connect', function ()
            {

                $('#incomingChatMessages').append($('<li>Connected</li>'));
                iosocket.on('message', function(message) {
                    $('#incomingChatMessages').append($('<li></li>').text(message));
                });
                iosocket.on('disconnect', function() {
                    $('#incomingChatMessages').append('<li>Disconnected</li>');
                });
            });
            $('#outgoingChatMessage').keypress(function(event) {
                if(event.which == 13) {
                    event.preventDefault();
                    iosocket.send($('#outgoingChatMessage').val());
                    $('#incomingChatMessages').append($('<li></li>').text($('#outgoingChatMessage').val()));
                    $('#outgoingChatMessage').val('');
                }
            });
        });

        
        
       
        
        
    </script>
    <script>
        var Utotal = parseInt(0);
        var Stotal = parseInt(0);
        var ball = parseInt(0);
        function funBating(runs) {
           
            var running = runs;
            ball = parseInt(ball) + parseInt(1);
            if (ball > 12) {
                document.getElementById("runUser").style.overflowY = "scroll";
                document.getElementById("runServer").style.overflowY = "scroll";

            }

            var ul = document.getElementById("ComputerList");
            var li = document.createElement("li");
            var Botruns = Math.floor((Math.random() * 6) + 1);
            li.appendChild(document.createTextNode(Botruns));
            ul.appendChild(li);

            var ul = document.getElementById("Userlist");
                var li = document.createElement("li");
                li.appendChild(document.createTextNode(running));
                ul.appendChild(li);
            //    document.getElementById("image1").src = "./img/fings" + running + "flip.png";

            //    document.getElementById("image2").src = "./img/fings" + Botruns + ".png";

               document.getElementById("image1").src = "./img/u" + running + ".jpg";

                document.getElementById("image2").src = "./img/s" + Botruns + ".jpg"
 
               
                if (Botruns == running) {
                    if (Utotal > Stotal) {

                        document.getElementById("modalText").innerHTML = "Gamer Over...! OUT     congratulations WON MATCH";
                    }
                    if (Utotal < Stotal) {

                        document.getElementById("modalText").innerHTML = " Gamer Over...! OUT    Sorry LOOSE MATCH";
                    }
                    if (Utotal == Stotal) { document.getElementById("modalText").innerHTML = " Gamer Over...! OUT   Draw "; }
                    $('#myModal').modal({
                        show: 'false'
                    });
                }

                else {
                    Utotal += parseInt(runs);
                    Stotal += parseInt(Botruns);
                    document.getElementById("Utotal").innerHTML = Utotal;
                    document.getElementById("Stotal").innerHTML = Stotal;
                    //alert("No");
                    
                }
            
        }
    </script>
    <style>
        .fontcls {
        font-size: 120px;}
        .modalcss {
        
            border-radius: 8px;
    width: 46%;
    text-align: center;
    font-size: 25px;
    border-color: red;}
        .modal {
            position: absolute;
    left: 0px;
    right: 0px;
    width: -webkit-fit-content;
    height: -webkit-fit-content;
    color: black;
    margin: auto;
    border: solid;
    padding: 1em;
    background: white;
}
        
        .btnclass {
        background: #3EA1EC;
    border-color: white;
    border: 6px solid;
    border-radius: 21px;
    color: white;
        }
        .rundiv {
            background: aliceblue;    border: #68AEEB 1px solid;    border-radius: 21px;
            height:333px;
            text-align:center;
            overflow-y:visible;
        }
    </style>
</head>
<body>
    <div class="container-fluid" >
        <h1 style="text-align:center;">  INDOOR CIRCKET </h1>
    <div class="container">
         
        <div class="row">

            
            <div id="runUser" class="col-md-6 rundiv" >
                <h1> User List Of Runs </h1>
  <ul id="Userlist">

                  </ul>
                
            </div>
       
           <div id="runServer" class="col-md-6 rundiv"  >
                <h1>  Bot List Of Runs  </h1>
                  <ul id="ComputerList">

                  </ul>
    

            </div>

        </div>
          <div class="row">
               <div class="col-md-6">
                   <div class="row">
           
     <div class="col-md-12"  style="    padding: 6px;">
         <div class="col-md-4 btnclass" onclick="funBating('1');"  >
                <h1 style="text-align:center;">   One </h1>
                 
            </div>
         <div class="col-md-4 btnclass" onclick="funBating('2');"  >
                <h1 style="text-align:center;">   Two </h1>
                 
            </div>
         <div class="col-md-4 btnclass" onclick="funBating('3');"  >
                <h1 style="text-align:center;">   Three </h1>
                 
            </div>
                  
            </div>
           
      <div class="col-md-12 ">
               <div class="col-md-4 btnclass" onclick="funBating('4');"  >
                <h1 style="text-align:center;">   Four </h1>
                 
            </div>
         <div class="col-md-4 btnclass" onclick="funBating('5');"  >
                <h1 style="text-align:center;">   Five </h1>
                 
            </div>
         <div class="col-md-4 btnclass" onclick="funBating('6');"  >
                <h1 style="text-align:center;">   Six </h1>
                 
            </div>
       </div>
             
      
          
         </div>
               </div>
              <div class="col-md-3">
                  <img id="image1"  src="./img/u0.jpg" alt="Alternate Text" />
                  </div>
               <div  class="col-md-3">
                    <img id="image2" src="./img/s0.jpg" alt="Alternate Text" />
                  </div>
               </div>
          </div>
        
        <div class="row" style="    border: solid;    border-color: #09B70C;    font-size: 40px;    text-align: center;
">
               <div class="col-md-2"> Total Runs </div>
                              <div id="Utotal" class="col-md-5"> 0 </div>
                              <div id="Stotal" class="col-md-5"> 0 </div>
                 
        </div>

    </div>


        

Incoming Chat: <ul id="incomingChatMessages"></ul>
<br />
<input type="text" id="outgoingChatMessage">
    
   </div>

    
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gamer Over</h4>
        </div>
        <div class="modal-body" id="modalText">
         <h1></h1> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
   
  </div>
      </div>


</body>
</html>
