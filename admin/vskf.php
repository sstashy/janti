<?php
$customCSS = array(
    '<link href="../assets/css/bootoast.min.css" rel="stylesheet">',
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'

);
$customJAVA = array(
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>',
    '<script src="../assets/js/bootoast.min.js"></script>',
    '<script src="../assets/plugins/jquery.toast/jquery.toast.js"></script>',
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
);
$page_title = 'Sınıf Sorgu';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');
?>
<!--BAŞLANGIC-->
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sınıf Sorgu</h4>
                    <p class="mb-1">
                    </p>
                    <p>Sorgulanacak Kişinin T.C. Nosunu Giriniz.</p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">
                            <input require="" maxlength="11" class="form-control" type="text" name="tc" id="tcno" placeholder="TC"><br>
                            <center class="nw">
                                <button onclick="checkNumber()" name="tc" id="sorgula" name="yolla" class="btn waves-effect waves-light btn-rounded btn-primary" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula </button>
                                <button onclick="clearResults()" id="durdurButon" type="button" class="btn waves-effect waves-light btn-rounded btn-danger" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i> Sıfırla </button>
                                <button onclick="printTable()" id="yazdirTable" type="button" class="btn waves-effect waves-light btn-rounded btn-warning" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-print"></i> Yazdır Detay </button><br><br>
                            </center>
                            <center>
                                <div class="col-xl-2 col-md-6">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 &nbsp;="" class="card-title mb-4"><i class="fas fa-camera"></i> Janti Vesikalık</h4>
                                                <img id="KimlikFotograf" src="../upload/profile/vesika.gif" style="border-radius: 12px;" width="160" height="200" class="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                            <div class="table-responsive">
                                <table id="zero-conf" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                                <th style="color: white;"><b>TC</b></th>
                                                <th style="color: white;"><b>ADI</b></th>
                                                <th style="color: white;"><b>SOYADI</b></th>
                                                <th style="color: white;"><b>DURUM</b></th>
                                                <th style="color: white;"><b>OKUL TÜRÜ</b></th>
                                                <th style="color: white;"><b>ALANI</b></th>
                                                <th style="color: white;"><b>ŞUBE</b></th>
                                                <th style="color: white;"><b>MEZUN OKUL</b></th>
                                                <th style="color: white;"><b>DİPLOMA PUANI</b></th>
                                                <th style="color: white;"><b>OKUL NO</b></th>
                                                <th style="color: white;"><b>AUTHOR</b></th>
                                        </tr>
                                    </thead>
                                    <tbody id="jojjoojj">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
                                function clearResults() {
                                    $("#tc").val("");
                                    $("#KimlikFotograf").attr("src", "../upload/profile/default.gif");
                                    $("#jojjoojj").html('<tr class="odd"><td valign="top" colspan="21" class="dataTables_empty">No data available in table</td></tr>');
                                }
                        
                                function checkNumber() {
                                    /*
                                    return Swal.fire({
                                        icon: "warning",
                                        title: "Oooooopss...",
                                        text: "Bu çözüm şu an bakımdadır!"
                                    });
                                    */

                                                
                                        
                                                    $.Toast.showToast({
                                                        "title": "Sorgulanıyor...",
                                                        "icon": "loading",
                                                        "duration": 2750
                                                    });
                                                    $.ajax({
                                                    url: "../api/sinif/api.php",
                                                    type: "POST",
                                                    data: {
                                                        tc: $("#tcno").val(),
														
                                                    },
                                                    success: (res) => {
                                                        if (res) {
                                                            var json = JSON.stringify(res.data)
                                                            $('tbody').html("");
                                                    $.each(json, function(key, value) {
                                                        $("#KimlikFotograf").attr("src", "data:image/jpeg;base64," + value.image); 
                                                        $('tbody').append('<tr>' +
                                                            '<td style="color: white;">' + value.TC + '</td>' +
                                                            '<td style="color: white;">' + value.ADI + '</td>' +
                                                            '<td style="color: white;">' + value.SOYADI + '</td>' +
                                                            '<td style="color: white;">' + value.Durum + '</td>' +
                                                            '<td style="color: white;">' + value.OkulTürü + '</td>' +
                                                            '<td style="color: white;">' + value.Alan + '</td>' +
                                                            '<td style="color: white;">' + value.SubeAdı + '</td>' +
                                                            '<td style="color: white;">' + value.MezunOkul + '</td>' +
                                                            '<td style="color: white;">' + value.DiplomaPuanı + '</td>' +
                                                            '<td style="color: white;">' + value.OkulNo + '</td>' +
                                                            '<td style="color: white;">root@janti:~#</td>' +
                                                            '</tr>');
                                                    });
                                                    
                                                        } else {
                                                            alert("Hata oluştu!");
                                                            return;
                                                        }
                                                    },
                                                    error: () => {
                                                        alert("Hata oluştu!");
                                                    }
                                                    
                                                });
                                            }
                                       
                                        </script>
</div>
<!--BİTİŞ

<style>
.fayujtablo{
    color: #fff;
}
</style>
-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>