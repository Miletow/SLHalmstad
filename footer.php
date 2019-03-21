<script>
$(document).on("click", "i", function(){
    switch (this.id) {
        case "instagram":
        window.location.href = 'https://www.instagram.com/studentleaguehalmstad/';
            break;
        case "facebook":
        window.location.href = 'https://www.facebook.com/';
            break;

        // add additional cases
    }
});
</script>
<style>
    
.fa {
    cursor:pointer;
    outline:none;
}
.FooterList li{
    display:inline-block;
    margin:50px;
}

.FooterList{
    display: block;
    width:100%;
    margin:auto;
    text-align:center;
    overflow: hidden;

}

.alink {
    position: absolute;
    bottom:0px; right:0px;
    float:right; color:
    gray; font-size: 10px;
}
.blueFooterbar{
    height:100px;
    background-color:#2b3036;
}
.Ap{
    color:#818183;
    font-size:14px;
    margin:39px;
    float:left;
}
.whiteFooterbar{
    position:relative;
    background-color:white;
}
.iconDiv{
    position:absolute;
    right: 150px;
    top:20px;
}
footer{
    position:relative;
    border-top:1px solid #eee;
}
.contact{
    text-align: center;
    list-style-type: none;
    padding: 20px;
    margin-top: -50px;
}
.contact li{
    list-style-type: none;
    display:inline-block;
    margin: 0 30 0 30;
    font-size: 16px;
}

@media only screen and (max-width: 600px) {
    .fa {
    cursor:pointer;
    outline:none;
}
.FooterList li{
    display:inline-block;
}

.FooterList{
    width:100%;
    margin:auto;
    text-align:center;
}

.alink {
    position: absolute;
    bottom:0px; right:0px;
    float:right; color:
    gray; font-size: 10px;
}
.blueFooterbar{
    display:block;
    height:100px;
    background-color:#2b3036;
}
.Ap{
    color:#818183;
    font-size:14px;
    margin:39px;
    float:left;
}
.whiteFooterbar{
    height:650px;
    background-color:white;
}
.iconDiv{
    position:absolute !important;
    right:10px;
}
footer{
    position:relative;
    border-top:1px solid #eee;
}

}
</style>
<footer>
<!-- <div class="whiteFooterbar" >

<div class="FooterList">
<div class="iconDiv">
<i class="fa fa-instagram" id="instagram" style="font-size:24px"></i>
<i class="fa fa-facebook-square" id="facebook" style="font-size:24px"></i>
</div>
<ul>
  <li><div style="overflow:hidden; width:140px;"><img src="_/asset/no.seeds.app.sef_1540574971/img/hh-logo-2013-sve.png" alt=""></div></li>
  <li><div style="overflow:hidden; width:180px;"><img src="_/asset/no.seeds.app.sef_1540574971/img/hif_logotyp_liggande-mindre.png" alt=""></div></li>
  <li><div style="overflow:hidden; width:140px;"><img style="margin-top:5px;" src="_/asset/no.seeds.app.sef_1540574971/img/logga_trans.png" alt=""></div></li>
</ul>
</div>
<div class="contact">
<ul>
<li>Contact: StudentLeague@hotmail.com</li>
<li>Contact: StudentLeague@hotmail.com</li>
<li>Contact: StudentLeague@hotmail.com</li>
</ul>
</div>
</div> -->
<a class="alink" href="Admin.php">"   "</a>

<div class="blueFooterbar">
<div class="iconDiv">
<i class="fa fa-instagram" id="instagram" style="font-size:24px; color: white;"></i>
<i class="fa fa-facebook-square" id="facebook" style="font-size:24px; color: white;"></i>
</div>
<div >
<a href="https://www.linkedin.com/in/milton-blaesild/" class="Ap" style="color: #bbb"> © MB </a>
</div>
</div>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="asset/js/bootstrap.min.js" defer></script>



