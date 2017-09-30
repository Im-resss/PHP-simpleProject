

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <title>Login</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script >
	$(function () {
 			$("#btnGiris").click(function(){
 				var kadi = $("#kadi").val();
 				var sifre = $("#sifre").val();
 				$.post("uyegirisi.php", {
 					kadi:kadi,
 					sifre:sifre 					
 				}, function(donenVeri){
 					if(donenVeri=="basarili")
 					{
 						window.location.href = "./anasayfahtml.php";
 					}
 					else
 					{
 						$("#sonuc").text("hata var");
 					}
 				});
 			})

 			
 		})

</script>
 </head>
<body>

<div class="container" style="margin-top: 5%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
            
            <form role="form">
            
            
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label ><span class="text-danger" style="margin-right:5px;">*</span>Kullanıcı Adı:</label>
                        <div class="input-group">
                            <input class="form-control" id="kadi" type="text" name="Kullanıcı Adı" placeholder="Kullanıcı Adı" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label ><span class="text-danger" style="margin-right:5px;">*</span>Şifre:</label>
                        <div class="input-group">
                            <input class="form-control" id="sifre" type="password" name="Şifre" placeholder="Şifre" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                
                
                
                
            </form>
            <div class="row">
                   <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" id="btnGiris" class="btn btn-lg btn-success btn-block" value="Giriş">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="kayithtml.php"> <input type="submit" id="btnKayit" class="btn btn-lg btn-primary btn-block" value="Kayıt Ol"></a>
                    </div>
                </div>
            
            
        </div>
    </div>
</div>
<p id="sonuc"> </p>
</body>
</html>