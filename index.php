<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
ob_start();
session_start();
if($_SESSION["adi"])
{ 

?>

<p class="ben" style="display:none" ><?php echo $_SESSION["id"]; ?></p>
<html lang="en">
<head>
 <META http-equiv="content-type" content="text/html; charset=iso-8859-9"/>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script>

$(function () {


      $.post("./twitgoster.php",{},function(donenVeri){
        var twitler=jQuery.parseJSON(donenVeri)
        for(var i=0;i<twitler.twitler.length;i++){
          $("#twitkutusu").append('<header class="text-left"><div class="comment-user"><i class="fa fa-user">'+twitler.twitler[i].username+'</i></div><time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o">'+twitler.twitler[i].date+'</i></time></header><div class="comment-post"><p>'+twitler.twitler[i].twitcontent+'<i class="fa fa-heart-o"></i></p></div>')
        }
      })




      $("#cikis").click(function(){
          
          window.location.href = "./cikis.php";
                    });
                         $("#sifreguncelle").click(function(){


        window.location.href = "./sifredegistir.php";

      });

      $("#twiteklebtn").click(function(){
        var content=$("#yeni_mesaj").val()
        var userid=$(".ben").text()
        $.post("./twitekle.php",{content:content,userid:userid},function(donenVeri){
              $.post("./twitgoster.php",{},function(donenVeri){
                $("#twitkutusu").text("")
                var twitler=jQuery.parseJSON(donenVeri)
                for(var i=0;i<twitler.twitler.length;i++){
                  $("#twitkutusu").append('<header class="text-left"><div class="comment-user"><i class="fa fa-user">'+twitler.twitler[i].username+'</i></div><time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o">'+twitler.twitler[i].date+'</i></time></header><div class="comment-post"><p>'+twitler.twitler[i].twitcontent+'<i class="fa fa-heart-o"></i></p></div>')
            }
          })
        })
      })



      
    })


 </script>
</head>
<body>
 <header>
    <!-- HEADER -->
  <div id="header">
    <div class="container">
          <div align="right">
        <font size="6">
          NELER OLUYOR
        </font>
      </div>
    </div>
  </div>
</header>
<div id="navbar">
  <nav class="navbar navbar-static-top navbar-inverse">
    <div class="container-fluid" >
      <ul class="nav navbar-nav" >
        <li class="active">
          <a href="#nelerOluyor">
            Neler Oluyor
          </a>
        </li>
        <li>
          <a href="#" id="sifreguncelle">
            &#350;ifreyi De&#287;i&#351;tir
          </a>
        </li>
        <li>
          <a href="#" id="cikis">
            Ç&#305;k&#305;&#351; Yap
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="container col-md-2" >
    <div class="row">
        <div class="col-sm-2 col-md-12">
                        <blockquote>
                <p>Bruce Wayne</p>
            </blockquote>
        </div>
        <div class="col-sm-4 col-md-12">

            <p> <i class="glyphicon glyphicon-envelope"></i> masterwayne@batman.com
                <br
                /> <i class="glyphicon glyphicon-globe"></i> www.bootsnipp.com
                <br /> <i class="glyphicon glyphicon-gift"></i> January 30, 1974</p>
        </div>
    </div>
</div>

<div class="container col-md-10">
  <div class="row">
    <div class="span4 well" style="padding-bottom:0">
            
                <textarea class="span4 col-md-12" id="yeni_mesaj" name="yeni_mesaj"
                placeholder="Neler oluyor......" rows="5"></textarea>
                <h6 class="pull-right">320 karakter girebilirsiniz..</h6>
                <button class="btn btn-default" id="twiteklebtn">Ekle</button>
            
        </div>
  </div>
</div>
 <div class="container col-md-12" id="twit">
  <div class="row">
  <div class="container col-md-2" >
</div>
    <div class="col-md-10">
          <!-- First Comment -->
          <article class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="panel panel-default arrow left">
                <div class="panel-body" id="twitkutusu">

                </div>
              </div>
            </div>
        
          </article>
    </div>
   </div>
  </div>
  </body>
    </html>

<?php
}
else
  header("Location:default.php");

?>
</body>
</html>   