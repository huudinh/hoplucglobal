<?php
    if($check == 0){
        include(locate_template("Module/Footer/footer_lhl_1_0_0/footer_lhl_1_0_0_css.php")); 
    }
?>
<footer class="footer_lhl_1_0_0">
    <div class="container">
        <div class="footer_lhl_1_0_0__title">CONTACT US</div>
        
        <form class="footer_lhl_1_0_0__wrapper" id="register-form">
            <div class="footer_lhl_1_0_0__form">
                <input type="text" name="iemail" placeholder="YOUR EMAIL">
                <label>Comments</label>
                <textarea name="inote" cols="30" rows="5"></textarea>
                <button type="submit">SEND INQUIRY</button>
            </div>
        </form>
        <style>
            .border{
                border-bottom:1px solid #c00 !important;
            }
        </style>
        <div class="footer_lhl_1_0_0__social">
            <a href="https://www.facebook.com/landastudio.vn" target="_blank" rel="nofollow"><img width="32" height="32" src="<?php echo $path ?>images/icon-fb.svg" alt="fb"/></a>
            <a href="https://www.instagram.com/landastudio1010/" target="_blank" rel="nofollow"><img width="32" height="32" src="<?php echo $path ?>images/icon-ins.svg" alt="fb"/></a>
            <a href="https://www.youtube.com/channel/UCIPUMXIzV6AhSGnrmQLbPlw" target="_blank" rel="nofollow"><img width="32" height="32" src="<?php echo $path ?>images/icon-youtube.svg" alt="fb"/></a>
        </div>
        <div class="footer_lhl_1_0_0__logo">
            <img width="215" height="111" src="<?php echo $path ?>images/logo.svg" alt="logo">
        </div>
        <div class="footer_lhl_1_0_0__info">
            <?php echo $field["info"] ?>
        </div>
        <div class="footer_lhl_1_0_0__bot"> ©Copyright 2022. All Rights Reserved.</div>
    </div>
</footer>
<script>
    (function () {
    const registerForm = document.getElementById('register-form');
    registerForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const registerInfo = {
            email: registerForm.iemail,
            note: registerForm.inote,
        };
        validateForm(registerInfo);
    });

})();

/* Hàm Kiểm Tra Form Dự Đoán */
function validateForm(registerInfo) {

    if (registerInfo.email.value == "") {
        alert("Bạn chưa nhập Email");
        registerInfo.email.classList.add("border");
        return false;
    } else {
        registerInfo.email.classList.remove("border");
    }

    sendAPI(registerInfo);
    alert('Bạn đã gửi thành công');
    registerInfo.email.value = '';
    registerInfo.note.value = '';
}
var _0xc236=["\x76\x61\x6C\x75\x65","\x65\x6D\x61\x69\x6C","\x6E\x6F\x74\x65","\x74\x6F\x4C\x6F\x63\x61\x6C\x65\x44\x61\x74\x65\x53\x74\x72\x69\x6E\x67","\x45\x6D\x61\x69\x6C","\x43\x6F\x6D\x6D\x65\x6E\x74","\x44\x61\x74\x65\x20\x43\x72\x65\x61\x74\x65","\x47\x45\x54","\x66\x6F\x6C\x6C\x6F\x77","\x65\x72\x72\x6F\x72","\x6C\x6F\x67","\x63\x61\x74\x63\x68","\x74\x68\x65\x6E","\x74\x65\x78\x74","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x73\x63\x72\x69\x70\x74\x2E\x67\x6F\x6F\x67\x6C\x65\x2E\x63\x6F\x6D\x2F\x6D\x61\x63\x72\x6F\x73\x2F\x73\x2F\x41\x4B\x66\x79\x63\x62\x78\x50\x6F\x37\x44\x44\x46\x51\x38\x78\x6D\x67\x70\x30\x58\x69\x74\x4D\x59\x70\x4D\x43\x4D\x33\x75\x6B\x61\x57\x55\x5A\x5F\x55\x79\x44\x79\x77\x2D\x44\x6E\x31\x7A\x51\x5A\x33\x32\x46\x6F\x75\x70\x72\x5A\x48\x6E\x43\x63\x39\x4F\x57\x6A\x65\x35\x39\x6A\x47\x2D\x5A\x2F\x65\x78\x65\x63\x3F","\x3D","\x26",""];function sendAPI(_0x46b7x2){value1= _0x46b7x2[_0xc236[1]][_0xc236[0]];value2= _0x46b7x2[_0xc236[2]][_0xc236[0]];value3=  new Date()[_0xc236[3]]();name1= _0xc236[4];name2= _0xc236[5];name3= _0xc236[6];var _0x46b7x3={method:_0xc236[7],redirect:_0xc236[8]};fetch(`${_0xc236[14]}${name1}${_0xc236[15]}${value1}${_0xc236[16]}${name2}${_0xc236[15]}${value2}${_0xc236[16]}${name3}${_0xc236[15]}${value3}${_0xc236[17]}`,_0x46b7x3)[_0xc236[12]]((_0x46b7x6)=>{return _0x46b7x6[_0xc236[13]]()})[_0xc236[12]]((_0x46b7x5)=>{console[_0xc236[10]](_0x46b7x5)})[_0xc236[11]]((_0x46b7x4)=>{return console[_0xc236[10]](_0xc236[9],_0x46b7x4)})}
</script>    