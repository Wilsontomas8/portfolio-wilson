<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="utf8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <title>Portfólio|Wilson Tomás</title>
 <!--LINK DO CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
 
  <style type="text/css">
      *{
    margin: 0px;
    padding: 0px;
}
@font-face
  {
    font-family: "fonte";
    src:url("assets/fonts/Poppins-Regular.ttf");
  }
  body
  {
    font-family: "fonte";
  }
   a:hover
  {
    
    cursor: pointer;
    text-decoration: none;
  }

header .titulo {
  padding-top: 100px;
  font-size: 30pt;
  font-style: italic;
   margin-left:85px;
  font-weight: 700;
  float: left;
  color: #343a40;

}
.titulo
{
  color: white;
}
#apresentation
{
  padding-top: 60px;
}
#apresentation a
{
 color: white;
 text-decoration: none;
}

#sobre img
{
  width: 200px;
  margin: 0px;
  border-radius: 50px;
}

section#contact {
  background-color: #212529;
  background-image: url("assets/img/map-image.png");
  background-repeat: no-repeat;
  background-position: center;
}
section#contact .section-heading {
  color: #fff;
}
section#contact form#contactForm .form-group {
  margin-bottom: 1.5rem;
}
section#contact form#contactForm .form-group input,
section#contact form#contactForm .form-group textarea {
  padding: 1.25rem;
}
section#contact form#contactForm .form-group input.form-control {
  height: auto;
}
section#contact form#contactForm .form-group-textarea {
  height: 100%;
}
section#contact form#contactForm .form-group-textarea textarea {
  height: 100%;
  min-height: 10rem;
}
section#contact form#contactForm p.help-block {
  margin: 0;
}
section#contact form#contactForm .form-control:focus {
  border-color: #fed136;
  box-shadow: none;
}
section#contact form#contactForm ::-webkit-input-placeholder {
  
  font-weight: 700;
  color: #ced4da;
}
section#contact form#contactForm :-moz-placeholder {
 
  font-weight: 700;
  color: #ced4da;
}
section#contact form#contactForm ::-moz-placeholder {
 
  font-weight: 700;
  color: #ced4da;
}
section#contact form#contactForm :-ms-input-placeholder {
    font-weight: 700;
  color: #ced4da;
}

.timeline {
  position: relative;
  padding: 0;
  list-style: none;
}
.timeline:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 40px;
  width: 2px;
  margin-left: -1.5px;
  content: "";
  background-color: #e9ecef;
}
.timeline > li {
  position: relative;
  min-height: 50px;
  margin-bottom: 50px;
}
.timeline > li:after, .timeline > li:before {
  display: table;
  content: " ";
}
.timeline > li:after {
  clear: both;
}
.timeline > li .timeline-panel {
  position: relative;
  float: right;
  width: 100%;
  padding: 0 20px 0 100px;
  text-align: left;
}
.timeline > li .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline > li .timeline-image {
  position: absolute;
  z-index: 100;
  left: 0;
  width: 80px;
  height: 80px;
  margin-left: 0;
  text-align: center;
  color: white;
  border-radius: 50px;
  
}
.timeline > li .timeline-image h4 {
  font-size: 10px;
  line-height: 14px;
  margin-top: 12px;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
  padding: 0 20px 0 100px;
  text-align: left;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline > li:last-child {
  margin-bottom: 0;
}
.timeline .timeline-heading h4 {
  margin-top: 0;
  color: inherit;
}
.timeline .timeline-heading h4.subheading {
  text-transform: none;
}
.timeline .timeline-body > ul,
.timeline .timeline-body > p {
  margin-bottom: 0;
}

@media (min-width: 768px) {
  .timeline:before {
    left: 50%;
  }
  .timeline > li {
    min-height: 100px;
    margin-bottom: 100px;
  }
  .timeline > li .timeline-panel {
    float: left;
    width: 41%;
    padding: 0 20px 20px 30px;
    margin-left: 30px;
    text-align: right;
  }
  .timeline > li .timeline-image {
    left: 50%;
    width: 200px;
    height: 200px;
    margin-left: 50px;
  }
  .timeline > li .timeline-image h4 {
    font-size: 13px;
    line-height: 18px;
    margin-top: 16px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: left;
  }
}
@media (min-width: 992px) {
  .timeline > li {
    min-height: 150px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px;
  }
  .timeline > li .timeline-image {
    width: 150px;
    height: 150px;
    margin-left: -75px;
  }
  .timeline > li .timeline-image h4 {
    font-size: 18px;
    line-height: 26px;
    margin-top: 30px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 20px 20px;
  }
}
@media (min-width: 1200px) {
  .timeline > li {
    min-height: 170px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px 100px;
  }
  .timeline > li .timeline-image {
    width: 170px;
    height: 170px;
    margin-left: -85px;
  }
  .timeline > li .timeline-image h4 {
    margin-top: 40px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 100px 20px 20px;
  }
}
.carousel-inner
{
  width: 1000px;
  height: 450px;
}
.carousel-inner img
{
  width: 100%;
  
}
    </style>
</head>
<body>
  <!-- Link do javascript-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="popper/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
  <!-- Menu de navegação-->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top " >
            <div class="container">
                <img src="assets/img/logo1.png" alt="W I L S O N T O M Á S" style="width:100px" />

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                   
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item"><a class="nav-link js-scroll-trigger"href="#"></span>Inicio</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sobre">Sobre Mim</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#project">Portfólio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                        
                    </ul>
                    
            </div>
        </nav>a

</body>
</html>