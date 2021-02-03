{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

<!-- Footer -->
<section id="footer">
    <div class="container py-5">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-2">
               
                    <a class="navbar-brand cargando" href="{{ url('/home') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        <img src="{{ asset('image/logo03.png') }}" alt=""style="width: 100%" >
                       
                    </a>
              
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Seguinos en nuestras redes</h5>
                <ul class="list-unstyled list-inline social t">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" style="background-color: #3B5998;" ></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" style="background-color: #55ACEE;"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" style="background-color: #B7242A;"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" style="background-color: #DD4B39;"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope" style="background-color: #11151f;"></i></a></li>
                </ul>
              
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <h5> Consultas y Reclamos, gratis al <br>  0800-7777-589 (LUZ)</h5> 

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                                
                    <a href="# "type="button" class="btn  boton" >Ponete en contacto <i class="fa fa-phone" aria-hidden="true"> </i></a>

            </div>
        </div>
    </div>
    <div class=" medio w-100 py-3">
        <div class="container   ">
            <div class=" row ">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-white">
                    {{-- <p></p> --}}
                    
                    

                </div>

            </div>
        </div>
    </div>
        <div class=" pie w-100 py-3">
            <div class="container   ">
                <div class=" row ">
                    <div class="col-xs-12 col-sm-12 col-md-6 mt-2 mt-sm-2 ">
                        {{-- <p></p> --}}
                        
                        <p class="h6">SECHEEP - Energía de todos | Todos los derechos 2020</p>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mt-2 mt-sm-2 text-right ">
                        {{-- <p></p> --}}
                        <ul class="list-unstyled list-inline social2 t">
                            <li class="list-inline-item"><a href="#" ><i class="fa fa-facebook "  ></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter " ></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram " ></i></a></li>
                           
                        </ul>
                       

                    </div>

                </div>
            </div>
        </div>
</section>

<!-- ./Footer -->

<style>
   
        
    /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    /* padding: 60px 0; */
    margin-bottom: 0%;
}

section .section-title {
    text-align: center;
    color: #444444;
    margin-bottom: 50px;
    text-transform: uppercase;
}
/* #171717 */
/* #222222 */

#footer {
    /* background: #444444 !important; */
    /* background: #2871b7 !important; */
    background: #034d8e !important;
}
.medio{
    /* background: #222222 !important; */
    background: #fdc41f !important;
}
.pie{
/* background: #171717 !important; */
    background: #13a538 !important;
}
#footer h5{
	/* padding-left: 10px; */
    /* border-left: 3px solid #eeeeee; */
    padding-bottom: 6px;
    /* margin-bottom: 20px; */
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    /* padding-left: 10px;
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
    transition: .5s all ease; */

    display: block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    background: #000;
    margin-right: 5px;
    color: #fff;
}
#footer ul.social2 li a i {
    padding-left: 10px;
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
    transition: .5s all ease;

}
#footer ul.social2 li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social2 li:hover a i.fa-facebook {
    color: #3B5998;
	
}
#footer ul.social2 li:hover a i.fa-twitter {
    color: #55ACEE;
	
}
#footer ul.social2 li:hover a i.fa-instagram {
    color: #B7242A;
	
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

.#footer ul.social li a i.fa-facebook  {
      background-color: #3B5998; }
    /* .dk-footer-box-info .footer-social-link a i.fa-twitter {
      background-color: #55ACEE; }
    .dk-footer-box-info .footer-social-link a i.fa-google-plus {
      background-color: #DD4B39; }
    .dk-footer-box-info .footer-social-link a i.fa-linkedin {
      background-color: #0976B4; }
    .dk-footer-box-info .footer-social-link a i.fa-instagram {
      background-color: #B7242A; } */

 
</style>