<!DOCTYPE html>
<html>
<head>
	<title>Antar.in</title>
     <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  .formKiri{
 border: 1px solid #12a8bb; padding: 2% 2%; text-align:left; float:left; margin-right: 10%;
  }
  .formKanan{
    border: 1px solid #12a8bb; padding: 2% 2%; text-align:left; float:left; margin-left: 5%;
  }
  .submitButton{
    margin-left: 30%; padding: 5% 15%; background-color: #12a8bb; color: white; font-size: 25px;
  }
</style>

</head>
<body onload="startTime()">
	
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
	<img src="assets/logo.png" width="auto" height="35">
  <a class="navbar-brand" href="#" style="margin-left: 1%;">Antar.in</a>
    <ul class="navbar-nav mr-auto">

    <!-- buat konten navbar nya
    -->
    </ul>
    <p id="date"></p>
    <p id="time"></p>
    <div class="dropdown" style="margin-left: 2%; margin-right: 4%;">
    	 <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome User
    	 	
    	 	<span class="caret"></span></a>
    	 	<ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="#"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>

 <section id="Pendataan">
    <div class="container-fluid">
      <div class="row"> 
        <div class="col-md-12" style="padding: 0% 4%;">
                <div style="text-align: center;">
                  <h2 style="font-weight: bold">Kirim barangmu!</h2>
                  <h4>Silahkan isi form yang telah disediakan</h4>
                </div>
                <br>
                <div class="col-md-5 formKiri" >
                    
                    <h3 style="text-align: center;">Data Pengirim</h3>
                        <div>
                                <form  action="simpanData" method="post">
                                    <div class="form-group">
                                        <label for="text">Nama Lengkap:</label>
                                        <input type="text" class="form-control" name="namaPengirim" required>
                                        <br>
                                        <label for="text">Alamat Lengkap:</label>
                                        <input type="text" class="form-control" name="alamatPengirim" required>
                                        <br>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsiAsal" style="height: calc(2.25rem + 10px)" >
                                         
                                         <option value="Jawa Timur">Jawat Timur</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        </select>
                                        </div>

                                        <div class="col-md-6">
                                        <label for="Kota">Kota Asal</label>
                                        <select class="form-control" name="kotaAsal" style="height: calc(2.25rem + 10px)">
                                         <option value="Malang">Malang</option>
                                         <option value="Surabaya">Surabaya</option>
                                         <option value="Jakarta">Jakarta</option>
                                        </select>
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row">
                                         <div class="col-md-6" >
                                        <label>Nomor Telepon</label>
                                        <input type="tel" class="form-control" name="notelAsal" required>
                                        </div>

                                        <div class="col-md-6" >
                                        <label>Kode Pos</label>
                                        <input type="text" class="form-control" name="kodePosAsal" required>
                                        </div>
                                      </div>
                                       
                                   </div>
                                  
                                      
                            </div>
                        </div>

            <div class="col-md-5 formKanan" >
                    
                    <h3 style="text-align: center;">Data Penerima</h3>
                        <div>
                                
                                    <div class="form-group">
                                        <label for="text">Nama Lengkap:</label>
                                        <input type="text" class="form-control" name="namaPenerima" required>
                                        <br>
                                        <label for="text">Alamat Lengkap:</label>
                                        <input type="text" class="form-control" name="alamatPenerima" required>
                                        <br>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsiTujuan" style="height: calc(2.25rem + 10px)" >
                                         
                                         <option value="Jawa Timur">Jawat Timur</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        </select>
                                        </div>
                                        

                                        <div class="col-md-6">
                                        <label for="Kota">Kota Asal</label>
                                        <select class="form-control" name="kotaTujuan" style="height: calc(2.25rem + 10px)">
                                         <option value="Malang">Malang</option>
                                         <option value="Surabaya">Surabaya</option>
                                         <option value="Jakarta">Jakarta</option>
                                        </select>
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row">
                                         <div class="col-md-6" >
                                        <label>Nomor Telepon</label>
                                        <input type="tel" class="form-control" name="notelTujuan" required>
                                        </div>

                                        <div class="col-md-6" >
                                        <label>Kode Pos</label>
                                        <input type="text" class="form-control" name="kodePosTujuan" required>
                                        </div>
                                      </div>
                                       
                                   </div>
                                  
                                
                             
                            </div>
                     </div>
                </div>
                              
          </div>

         <div class="row" style="margin-bottom: 5%;"> 
        <div class="col-md-12" style="padding: 0% 4%;">
               
                <br>
                <div class="col-md-5 formKiri">
                    <h3 style="text-align: center;">Data Barang</h3>
                        <div>
                                
                                    <div class="form-group">
                                        <label for="text">Nama Barang</label>
                                        <input type="text" class="form-control" name="namaBarang" required>
                                        <br>
                                        
                                        <br>
                                        <div class="row">

                                        <div class="col-md-6">
                                        <label for="paket">Paket layanan</label>
                                        <select class="form-control" name="Paket" style="height: calc(2.25rem + 10px)">
                                         <option value="Cepat">Cepat (1-3 hari) </option>
                                         <option value="Regular">Regular (3-5 hari)</option>
                                         
                                        </select>
                                        </div>
                                        <div class="col-md-6">
                                          <label for="text">Berat Barang (kg) :</label>
                                        <input type="tel" class="form-control" name="berat" required>
                                      </div>
                                      </div>
                                      <br>
                                     </div>
                                  
                                     
                               </div>

                            </div>
                      <div class="col-md-5" style="margin-left: 5%; margin-top: 5%;">
                          <div>
                                <button type="Submit" class="btn btn-lg submitButton">Submit</a>
                                </button>
                              </form>
                            </div>
                            
                     </div>
                </div>
              </div>
            </div>

</section>
</body>



 <script type="text/javascript">
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i}; 
    return i;
}
	</script>
</html>