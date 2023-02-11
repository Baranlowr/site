<?php
include_once "../server/rolecontrol.php";

$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'

);

$page_title = 'GSM Sorgu';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

error_reporting(0);

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="overlay">
        <video id="myvideo" autoplay="true" loop muted >
            <source src="../assets/images/matrix.mp4" type="video/mp4">
        </video>
    </div>
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5>GSM Sorgu ile ne yapabilirim ?</h5>
<p>
    İstediğiniz kişinin <b>TÜRKİYE CUMHURİYETİ KİMLİK NUMARASI</b> üzerinden telefon numarası sorgulama yapabilirsiniz.
</p>
				    			     
										
                                <form action="" method="post">
								

<div class="tab-pane active" id="tc" role="tabpanel">
                         <div class="mb-3 input-group">
                        <form action="" method="post">
                     	<input name="tc" type="text" class="form-control mt-2" maxlength="11" id="tc" placeholder="T.C. Kimlik Numarası">
							    			</div>
											<small id="name" class="form-text text-muted"><strong>*Not: </strong> Sorguladığınız kişinin güncel ve aktif kullandığı numarasını çıkartacaktır.</small>
							    			<br>
							    			<center>
                   <button type="submit" name="submit" class="btn waves-effect waves-light btn-rounded btn-primary" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula</button></form>
<button id="durdurButon" type="button" class="btn waves-effect waves-light btn-rounded btn-danger" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i><a href="gsmsorgu.php" class="text-white"> Sıfırla </a></button>
<button id="temizleButon" type="button" class="btn waves-effect waves-light btn-rounded btn-warning" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-print"></i> Yazdır Detay</button><br><br>
                </center>
                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</div>
							
							<div class="col-xl-12 col-md-6">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									
										<div class="table-responsive">
                                            <table class="table mb-0">
        
                                            
             
                                                <?php
$baglan=mysqli_connect("127.0.0.1","root","","gsm");
if(isset($_POST['submit'])){
$tc = $_POST['tc'];
$sql = "SELECT * FROM gsmdata WHERE TC='$tc';";
$finale = mysqli_query($baglan,$sql);
while($bok = mysqli_fetch_array($finale)){
echo'<thead class="thead-light">
                                                    <tr>
                                                        <th>T.C. KİMLİK NUMARASI</th>
                                                       
                                          
														<th>TELEFON NUMARASI</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>';
echo "<br>";
echo "<td>".$bok['TC']."</td>";
echo "<td>"."0".$bok['GSM']."<br>"."</td>";


}

}




                                        
                                        

?>
												
                                                <tbody id="kisiData">
                                                    <td> </td>
                                                </tbody>
												
                                            </table>
                                        </div>
									
                                    </div>
                                </div>
                            </div>
							</div>
							
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

    <?php
    include('inc/footer_native.php');
    include('inc/footer_main.php');
    ?>