// preview img
function viewImg() {
    let inputFile = document.getElementById('imgDaftar');
    let pathFile = inputFile.value;
    let ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!ekstensiOk.exec(pathFile)) {
        alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png');
        inputFile.value = '';
        return false;
    } else {
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('previewImg').innerHTML = '<img class="img-fluid img-thumbnail" src="' + e.target.result + '" style="width:100px;height:100px;"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}


// cekpassword
$(function () {
    $("#customCheck").on("change", function () {
        if ($(this).prop('checked')) {
            $(".passwordLogin").attr("type", "text");
        } else {
            $(".passwordLogin").attr("type", "password");
        }        
    })
})



// jquery
$(document).ready(function () {    
// Batasi level yang login
    let akses_levelLogin = $('#cek_levelLogin').attr('class');                  
if (akses_levelLogin == "user") {
    $('#menukaryawan_user').hide();    
    $('#menulaporan_user').hide();
    $('#menukonfigurasi_user').hide()
} else if (akses_levelLogin == "dosen") {
    $('#menukaryawan_user').hide();        
    $('#menukonfigurasi_user').hide()
}else if (akses_levelLogin == "admin"){
    $('#menukaryawan_user').show();    
    $('#menulaporan_user').show();    
    $('#menukonfigurasi_user').show();    
}

    
// get token href Vdaftar&token=???
        function getToken() {            
            let getToken = $('#getToken').attr('class');            
            $.ajax({
                url: "core/init.php",
                method: "GET",
                data: {
                    "getToken": getToken
                },
                success: function (showToken) {
                    alert(showToken);
                    // $('#showToken').html(showToken);
                }
            });
        }



    // delete msg login
    function deleteMessage() {
        $('#alertMsg').remove();
    }

    // message login.php
    function msgLogin(dataMsg) {
        // cek class msg
        let msg = $('#messageLogin').attr('class');
        if (msg == 'messageActive') {
            $('#messageLogin').append('<div id="alertMsg" class="alert alert-warning alert-dismissible fade show" role="alert"><strong>' + (dataMsg) + '</strong><button type="button" id="btnMsg" class="close"data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        }
    }


    // load page data_karyawan
    function Load_Datakaryawan() {
        let Show_Datakaryawan = 'Show_Datakaryawan';
        $.ajax({
            url: "core/init.php",
            method: "POST",
            data: {
                "Show_Datakaryawan": Show_Datakaryawan
            },
            success: function (Show_Datakaryawan) {
                $('#Show_Datakaryawan').html(Show_Datakaryawan);
            }
        });
    }

        // load page laporan_data_karyawan
        function Load_CetakDatakaryawan() {        
            let Show_CetakDatakaryawan = 'Show_CetakDatakaryawan';        
            $.ajax({
                url: "core/init.php",
                method: "POST",
                data: {
                    "Show_CetakDatakaryawan": Show_CetakDatakaryawan
                },
                success: function (Show_CetakDatakaryawan) {
                    $('#Show_CetakDatakaryawan').html(Show_CetakDatakaryawan);
                }
            });
        }


    // action login    
    $('.loginUser').click(function () {
        let emailLogin = $('.emailLogin').val();
        let passwordLogin = $('.passwordLogin').val();
        // ubah semua nilai ke form data
        let fd = new FormData();
        fd.append("emailLogin", emailLogin);
        fd.append("passwordLogin", passwordLogin);
        // console.log(fd);
        $.ajax({
            type: 'post',
            url: 'core/init.php',
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {                                                                   
                if (data == 0) {
                    $('#messageLogin').addClass('messageActive');
                    let dataMsg = 'Belum Verifikasi Email';
                    deleteMessage();
                    msgLogin(dataMsg);
                }else if (data == 1) {
                    $('#messageLogin').addClass('messageActive');
                    let dataMsg = 'Anda Sudah Melakukan Login';
                    deleteMessage();
                    msgLogin(dataMsg);
                }else if(data == 2) {                    
                    window.location.href = 'http://localhost/github/penilaian-sidangTA/home';                    
                }else if(data == 3){
                    $('#messageLogin').addClass('messageActive');
                    let dataMsg = 'Email / Password tidak ada';
                    deleteMessage();
                    msgLogin(dataMsg);
                }else{
                    $('#messageLogin').addClass('messageActive');
                    let dataMsg = 'Data tidak ditemukan';
                    deleteMessage();
                    msgLogin(dataMsg);
                }             
            }
        });
    });

    // ubah Password    
    $('.btn_ubahPassword').click(function () {
        let ubahPassword = $('#ubahPassword').val();
        let ulangiubahPassword = $('#ulangiubahPassword').val();
        let token = $('#token').val();

        if (ubahPassword != ulangiubahPassword) {
            swal({
                title: "Gagal!",
                text: "Password tidak sama!",
                icon: "error",
            });
            return false;
        } else {
            let fd = new FormData();
            fd.append("ubahPassword", ubahPassword);            
            fd.append("token", token);
            
            $.ajax({
                type: 'post',
                url: 'core/init.php',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {                                           
                swal({                        
                        text: data,
                        icon: "success",
                    });                                  
                    $('form :input').val('');
                    $('#ubahPassword').focus();                                        
                    return false;                
            }
            });
        }
    }); 


    // daftar
    $('.daftar').click(function () {
        let namaDepan_daftar=$('#namaDepan_daftar').val();                                
        let namaBelakang_daftar=$('#namaBelakang_daftar').val();                                
        let email_daftar=$('#email_daftar').val();                                
        let nohp_daftar=$('#nohp_daftar').val();                                
        let password_daftar=$('#password_daftar').val();                                
        let passwordUlangi_daftar=$('#passwordUlangi_daftar').val();                                        
        let files = $("#imgDaftar")[0].files[0];
        let fd = new FormData();
        // console.log(files);

        if (namaDepan_daftar=="" || namaBelakang_daftar=="" || email_daftar=="" ||nohp_daftar=="" || password_daftar=="" || passwordUlangi_daftar=="" ||typeof files=="undefined"){    
                swal({                        
                    text: 'Harap lengkapi pendaftaran',
                    icon: "error",
                });       
        }else if(password_daftar!=passwordUlangi_daftar){
            swal({                        
                    text: 'kata sandi baru tidak sama',
                    icon: "error",
                });                                                                       
        }else{
            fd.append("imgDaftar", files);
            fd.append("namaDepan_daftar", namaDepan_daftar);            
            fd.append("namaBelakang_daftar", namaBelakang_daftar);
            fd.append("email_daftar", email_daftar);                                
            fd.append("nohp_daftar", nohp_daftar);
            fd.append("password_daftar", password_daftar);
            
            $.ajax({
                type: 'post',
                url: 'core/init.php',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {                                                           
                    if(data == 1){
                        swal({                        
                            text: "Pendaftaran gagal dilakukan email sudah digunakan, silahkan coba lagi.",
                            icon: "error",
                        });               
                        return false;                                                           
                    }else{
                        swal({                        
                            text: "Berhasil mendaftar, harap verifikasi email untuk bisa login",
                            icon: "success",
                        });          
                         namaDepan_daftar.val('');
         namaBelakang_daftar.val('');                                
         email_daftar.val('');                          
         nohp_daftar.val('');                                
         password_daftar.val('');                                
         passwordUlangi_daftar.val('');                                        
                        return false;                                                                
                    }
            }
            });        
        }                
            

    });




// resetpassemail
    $("#resetpass").click(function () {        
        let resetemail = $('#resetemail').val();                                
        let fd = new FormData();
        fd.append("resetemail", resetemail);                                           
            if(resetemail == ""){                
                swal({
                    title: "Gagal!",
                    text: "Data Tidak Boleh Kosong!",
                    icon: "error",
                });                    
                return false;
            }else{
                    $.ajax({
                        type: 'post',
                        url: 'core/init.php',
                        data: fd,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {                                                                                                                
                            // alert(data);
                            // console.log(data);                            
                        }
                    });
                }   
    
});






});


