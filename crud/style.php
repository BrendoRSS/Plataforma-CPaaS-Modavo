<?php header ("Content-type: text/css"); ?>
*/

/*--------------------------------------------------------------
# Estilizações Gerais
--------------------------------------------------------------*/
:root {
  scroll-behavior: smooth;
}

body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  color: #0274be;
  text-decoration: none;
}

a:hover {
  color: #717ff5;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Nunito", sans-serif;
}

/*--------------------------------------------------------------
# Sections
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-header {
  text-align: center;
  padding-bottom: 40px;
}

.section-header h2 {
  font-size: 11px;
  letter-spacing: 1px;
  font-weight: 600;
  margin: 0;
  color: #0274be;
  text-transform: uppercase;
}

.section-header p {
  margin: 10px 0 0 0;
  padding: 0;
  font-size: 35px;
  line-height: 42px;
  font-weight: 700;
  color: #012970;
}

@media (max-width: 768px) {
  .section-header p {
    font-size: 28px;
    line-height: 32px;
  }
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: #0274be;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #2fbfee;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
.header {
  transition: all 0.5s;
  z-index: 997;
  padding: 20px 0;
}

.header.header-scrolled {
  background: #fff;
  padding: 15px 0;
  box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
}

.header .logo {
  line-height: 0;
}

.header .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.header .logo span {
  font-size: 30px;
  font-weight: 700;
  letter-spacing: 1px;
  color: #012970;
  font-family: "Nunito", sans-serif;
  margin-top: 3px;
}

/*--------------------------------------------------------------
# Menu de Navegação
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Nunito", sans-serif;
  font-size: 16px;
  font-weight: 700;
  color: #152A47;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #2fbfee;
}

.navbar .getstarted,
.navbar .getstarted:focus {
  background: #0274BE;
  padding: 8px 20px;
  margin-left: 30px;
  border-radius: 4px;
  color: #fff;
}

.navbar .getstarted:hover,
.navbar .getstarted:focus:hover {
  color: #fff;
  background: #2fbfee;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 15px;
  text-transform: none;
  font-weight: 600;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #2fbfee;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

/* Estilização para a área de login */
.login-container {
  display: flex;
  align-items: center;
}

.loggedUser {
  display: flex;
  align-items: center;
  margin-left: 30px; /* Move a área de login para a direita */
}

.loggedUser strong {
  margin-right: 5px; /* Espaçamento entre "Usuário:" e o nome do usuário */
  font-family: "Nunito", sans-serif;
  font-size: 16px;
  font-weight: 700;
  color: #152A47;
}

#loggedInUser {
  font-family: "Nunito", sans-serif;
  font-size: 16px;
  font-weight: 700;
  color: #152A47;
}



@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #012970;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 1200px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(1, 22, 61, 0.9);
  transition: 0.3s;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 10px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #0274BE;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #4154f1;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #0274BE;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# CPaaS Section
--------------------------------------------------------------*/
.cpaas-section {
  width: 100%;
  height: 100vh;
  background: url(../img/hero-bg.png) top center no-repeat;
  background-size: cover;
}

.cpaas-section h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  color: #0274BE;
}

.cpaas-section h2 {
  color: #444444;
  margin: 15px 0 0 0;
  font-size: 23px;
}

.cpaas-section .btn-teste-gratis {
  margin-top: 30px;
  line-height: 0;
  padding: 15px 40px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #0274BE;
  box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
}

.cpaas-section .btn-teste-gratis:hover {
  color: #fff;
  background: #B32717;
}

.cpaas-section .btn-teste-gratis span {
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 1px;
}

.cpaas-section .btn-teste-gratis i {
  margin-left: 5px;
  font-size: 18px;
  transition: 0.3s;
}

.cpaas-section .btn-teste-gratis:hover i {
  transform: translateX(5px);
}

.cpaas-section .hero-img {
  text-align: right;
}

.cpaas-section .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

@media (min-width: 1024px) {
  .cpaas-section {
    background-attachment: fixed;
  }
}

@media (max-width: 991px) {
  .cpaas-section {
    height: auto;
    padding: 120px 0 60px 0;
  }

  .cpaas-section .hero-img {
    text-align: center;
    margin-top: 80px;
  }

  .cpaas-section .hero-img img {
    width: 80%;
  }

  .cpaas-section .modavo-logo img {
    text-align: center;
  }

}

@media (max-width: 768px) {
  .cpaas-section {
    text-align: center;
  }

  .cpaas-section h1 {
    font-size: 32px;
  }

  .cpaas-section h2 {
    font-size: 24px;
  }

  .cpaas-section .hero-img img {
    width: 100%;
  }

  .cpaas-section .modavo-logo img {
    text-align: center;
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(-10px);
  }
}

/*--------------------------------------------------------------
# Index Page
--------------------------------------------------------------*/
/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about .content {
  background-color: #f6f9ff;
  padding: 40px;
}

.about h1 {
  font-size: 35px;
  font-weight: 700;
  color: #232323;
}

.about h2 {
  font-size: 26px;
  font-weight: 800;
  color: #2fbfee;
}

.about em {
  font-size: 20px;
  font-weight: 700;
  color: #444444;
}

.about p {
  margin: 15px 0 30px 0;
  line-height: 24px;
  font-size: 17px;
  font-weight: 600;
  color: #444444;
}

.about .btn-read-more {
  line-height: 0;
  padding: 15px 40px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #0274BE;
  box-shadow: 0px 5px 25px rgba(65, 84, 241, 0.3);
}

.about .btn-read-more span {
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 1px;
}

.about .btn-read-more i {
  margin-left: 5px;
  font-size: 18px;
  transition: 0.3s;
}

.about .btn-read-more:hover i {
  transform: translateX(5px);
}

/*--------------------------------------------------------------
# Values
--------------------------------------------------------------*/
.values .box {
  padding: 30px;
  box-shadow: 0px 0 5px rgba(1, 41, 112, 0.08);
  text-align: center;
  transition: 0.3s;
  height: 100%;
}

.values .box img {
  padding: 30px 50px;
  transition: 0.5s;
  transform: scale(1.1);
}

.values .box h3 {
  font-size: 20px;
  color: #0274BE;
  font-weight: 700;
  margin-bottom: 18px;
}

.section-header h2 {
  font-size: 40px;
  color: #0274BE;
  font-weight: 700;
  line-height: 15px;
}

.section-header p {
  margin: 15px 0 30px 0;
  line-height: 22px;
  font-size: 17px;
  font-weight: 550;
  color: #444444;

}

.values .box:hover {
  box-shadow: 7px 0 32px rgba(10, 41, 112, 0.08);
}

.values .box:hover img {
  transform: scale(1.05);
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/

.services .service-box {
  box-shadow: 0px 0 15px rgba(1, 41, 112, 0.08);
  height: 100%;
  padding: 60px 30px;
  text-align: center;
  transition: 0.3s;
  border-radius: 5px;
}

.services .service-box .icon {
  font-size: 40px;
  padding: 27px 27px;
  border-radius: 4px;
  position: relative;
  margin-bottom: 25px;
  display: inline-block;
  line-height: 0;
  transition: 0.3s;
}

.services .service-box:hover {
  transform: scale(1.05);
}

.services .service-box h3 {
  color: #444444;
  font-weight: 700;
  font-size: 20px;
}

.services .service-box .read-more {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 16px;
  padding: 8px 20px;
}

.services .service-box p {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  line-height: 23px;
}

.services .service-box .read-more img {
  line-height: 0;
  margin-left: 5px;
  font-size: 18px;
}

.services .service-box.blue {
  border-bottom: 3px solid #0274BE;
}

.services .service-box.blue .icon {
  color: #0274BE;
  background: #dbf3db;
}

.services .service-box.blue .read-more {
  color: #0274BE;
}

.services .service-box.blue:hover {
  background: #0274BE;
}

.services .service-box.blue-light {
  border-bottom: 3px solid #0274BE;
}

.services .service-box.blue-light .icon {
  color: #0274BE;
  background: #dbf3db;
}

.services .service-box.blue-light .read-more {
  color: #0274BE;
}

.services .service-box.blue-light:hover {
  background: #0274BE;
}

.services .service-box:hover h3,
.services .service-box:hover p,
.services .service-box:hover .read-more {
  color: #fff;
}

.services .service-box:hover .icon {
  background: #fff;
}
/*--------------------------------------------------------------
# End Services
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# Section Usos
--------------------------------------------------------------*/

.usos .use-box {
  box-shadow: 0px 0 15px rgba(1, 41, 112, 0.08);
  height: 100%;
  padding: 20px ;
  position: relative;
  text-align: center;
  border-radius: 5px;
  overflow: hidden;
  transition: all 0.3s ease-in-out;
  background: #fff;
  z-index: 1;
}

.usos .use-box::before {
  content: "";
  position: absolute;
  background: #e1f0fa;
  right: -60px;
  top: -40px;
  width: 100px;
  height: 100px;
  border-radius: 50px;
  transition: all 0.3s;
  z-index: -1;
}

.usos .use-box:hover::before {
  background: #0274BE;
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 0px;
}

.usos .icon {
  font-size: 60px;
  padding: 27px 27px;
  border-radius: 50%;
  position: relative;
  margin-bottom: 25px;
  display: inline-block;
  background: #dbf3db;
  line-height: 0;
  transition: 0.3s;
}

.usos .use-box img {
  font-size: 35px;
  text-align: center;
  color: #0274BE;
}

.usos .use-box h3 {
  color: #0274BE;
  font-weight: 700;
  font-size: 20px;
}

.usos .use-box p {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  line-height: 23px;
}

.usos .use-box {
  border-bottom: 3px solid #0274BE;
}

.usos .use-box:hover h3,
.usos .use-box:hover p {
  color: #fff;
}

.usos .use-box:hover .icon {
  background: #fff;
}

/*--------------------------------------------------------------
# End Section Usos
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

.footer .footer-newsletter {
  padding: 50px 0;
  background: #0274be;
  border-top: 1px solid #e1ecff;
}

.footer .footer-newsletter h4 {
  font-size: 30px;
  margin: 0 0 10px 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  color: #ffffff;
}

.footer  .btn-contact {
  display: inline-block;
  padding: 8px 40px 10px 40px;
  border-radius: 50px;
  color: #ffffff;
  border: 2px solid #ffffff;
  font-weight: 600;

}

.footer .btn-contact:hover {
  background: #ffffff;
  color: #232323;
  font-weight: 600;
  border: 2px solid #ffffff;
  transition: none;
  font-weight: 400;
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  transition: 0.3s;
}

.footer .footer-top {
  background: white url(../img/footer-bg.png) no-repeat right top;
  background-size: contain;
  border-top: 1px solid #e1ecff;
  border-bottom: 1px solid #e1ecff;
  padding: 60px 0 30px 0;
}

@media (max-width: 992px) {
  .footer .footer-top {
    background-position: center bottom;
  }
}

.footer .footer-top .footer-info {
  margin-bottom: 30px;
}

.footer .footer-top .footer-info .logo {
  line-height: 0;
  margin-bottom: 15px;
}

.footer .footer-top .footer-info .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.footer .footer-top .footer-info .logo span {
  font-size: 30px;
  font-weight: 700;
  letter-spacing: 1px;
  color: #012970;
  font-family: "Nunito", sans-serif;
  margin-top: 3px;
}

.footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Nunito", sans-serif;
}

.footer .footer-top .social-links a {
  font-size: 20px;
  display: inline-block;
  color: rgba(1, 41, 112, 0.5);
  line-height: 0;
  margin-right: 10px;
  transition: 0.3s;
}

.footer .footer-top .social-links a:hover {
  color: #012970;
}

.footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #012970;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 12px;
}

.footer .footer-top .footer-links {
  margin-bottom: 30px;
}

.footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #d0d4fc;
  font-size: 12px;
  line-height: 0;
}

.footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-top .footer-links ul a {
  color: #013289;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

.footer .footer-top .footer-links ul a:hover {
  color: #4154f1;
}

.footer .footer-top .footer-contact p {
  line-height: 26px;
}

.footer .copyright {
  text-align: center;
  padding-top: 30px;
  color: #012970;
}

.footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #012970;
}

