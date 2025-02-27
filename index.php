<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="assets/pictures/profile.png">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Personal Portfolio</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            background-color: rgb(23, 21, 31);
            font-family: 'Courier New', Courier, monospace;
        }
        nav {
            z-index: 1000;
            background-color: rgb(9, 4, 32);
            box-shadow: 1px 1px 20px rgba(169, 170, 169, 0.8);
        }
        nav .list a {
            font-size: 15px;
            color: rgb(141, 168, 144);
            text-decoration: none;
        }
        nav .list a:hover {
            color: white;
            text-decoration: underline;
            transition: 0.3s;
            font-size: 16px;
        }
        @keyframes picture{
            0%{
                filter: drop-shadow( 0px 0px 10px rgba(169, 170, 169, 0.8))
            }
            50%{
                filter: drop-shadow( 0px 0px 5px rgba(169, 170, 169, 0.8))
            }
            100%{
                filter: drop-shadow( 0px 0px 15px rgba(169, 170, 169, 0.8))
            }
        }



        section {
            scroll-margin-top: 10vh;
            width: 100%;
            height: 100vh;
            border-radius: 10px;
        }
        #section2, #section3, #section4, #section5, footer{
            box-shadow: 1px 1px 15px rgba(169, 170, 169, 0.8);
            animation: section 1.5s infinite;
        }
        @keyframes section{
            0%{
                box-shadow: 1px 1px 20px rgba(169, 170, 169, 0.8);
            }
            50%{
                box-shadow: 1px 1px 10px rgba(169, 170, 169, 0.8);
            }
            100%{
                box-shadow: 1px 1px 20px rgba(169, 170, 169, 0.8);
            }
        }


        @keyframes box1{
    0%{
        margin-top: 0%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
    20%{
        margin-top: 0%;
        margin-left: 0%;
        width: 35%;
        height: 10vh;
    }
    40%{
        margin-left: 20%;
        margin-top: 0%;
        width: 15%;
        height: 10vh;
        
    }
    60%{
        margin-top: 0%;
        margin-left: 20%;
        width: 35%;
        height: 10vh;
    }
    70%{
        margin-top: 0%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
    80%{
        margin-top: 23%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
    90%{
        margin-top: 23%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
    100%{
        margin-top: 0%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
}
@keyframes box2{
    0%{
        margin-top: 0%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
    20%{
        margin-top: 0%;
        margin-left: 40%;
        width: 15%;
        height: 10vh;
    }
    40%{
        margin-top: 0%;
        margin-left: 40%;
        width: 15%;
        height: 22.3vh;
    }
    60%{
        margin-top: 23%;
        margin-left: 40%;
        width: 15%;
        height: 10vh;
    }
    70%{
        margin-top: 23%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
    80%{
        margin-top: 23%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
    90%{
        margin-top: 0%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
    100%{
        margin-top: 0%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
}
@keyframes box3{
    0%{
        margin-top: 23%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
    20%{
        margin-top: 23%;
        margin-left: 0%;
        width: 15%;
        height: 10vh;
    }
    40%{
        margin-left: 0%;
        margin-top: 0%;
        width: 15%;
        height: 22.3vh;
    }
    60%{
        margin-top: 0%;
        margin-left: 0%;
        width: 15%;
        height: 10vh;
    }
    70%{
        margin-top: 0%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
    80%{
        margin-top: 0%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
    90%{
        margin-top: 23%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
    100%{
        margin-top: 23%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
}
@keyframes box4{
    0%{
        margin-top: 23%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
    20%{
        margin-top: 23%;
        margin-left: 20%;
        width: 35%;
        height: 10vh;
    }
    40%{
        margin-left: 20%;
        margin-top: 23%;
        width: 15%;
        height: 10vh;
    }
    60%{
        margin-top: 23%;
        margin-left: 0%;
        width: 35%;
        height: 10vh;
    }
    70%{
        margin-top: 23%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
    80%{
        margin-top: 0%;
        margin-left: 0%;
        width: 20%;
        height: 10vh;
    }
    90%{
        margin-top: 0%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
    100%{
        margin-top: 23%;
        margin-left: 25%;
        width: 20%;
        height: 10vh;
    }
}
    /* Base styling for all cubes */
.cube {
    width: 100px;
    height: 100px;
    position: relative;
    display: inline-block;
    margin: 10px;
    transform-style: preserve-3d;
    animation: spin 5s infinite linear;
}

.cube1{
    position: relative;
}

/* Individual pieces of the cube */
.cube-piece {
    position: absolute;
    width: 100%;
    height: 100%;
    background: #ccc;
    border: 1px solid #999;
    box-shadow: 3px 3px 20px rgba(169, 170, 169, 0.5);
}

.cube-piece.front {
    background-color: rgb(0, 254, 169);
    transform: translateZ(50px);
}

.cube-piece.back {
    background-color: rgb(20, 50, 18);
    transform: rotateY(180deg) translateZ(50px);
}

.cube-piece.left {
    background-color: rgb(42, 64, 46);
    transform: rotateY(-90deg) translateZ(50px);
}

.cube-piece.right {
    background-color: rgb(44, 46, 44);
    transform: rotateY(90deg) translateZ(50px);
}

.cube-piece.upper {
    background-color: rgb(15, 188, 64);
    transform: rotateX(90deg) translateZ(50px);
}

.cube-piece.bottom {
    background-color: rgb(24, 115, 1);
    transform: rotateX(-90deg) translateZ(50px);
}

/* Animation for rotating the cube */
@keyframes spin {
    0% { transform: rotateX(0deg) rotateY(0deg); }
    100% { transform: rotateX(360deg) rotateY(360deg); }
}
    </style>
</head>
<body class="px-5">
    <nav class="sticky-top px-3 py-2" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
        <div class="d-flex justify-content-between">
            <b class="text-light fs-5">John Christian V. Tayao</b>
            <div class="list w-50 d-flex justify-content-center align-items-center">
                <a href="#section1" class="w-25 float-start d-flex justify-content-center align-items-center">Home</a>
                <a href="#section2" class="w-25 float-start d-flex justify-content-center align-items-center">About Me</a>
                <a href="#section3" class="w-25 float-start d-flex justify-content-center align-items-center">Skills</a>
                <a href="#section4" class="w-25 float-start d-flex justify-content-center align-items-center">More..</a>
            </div>
        </div>
    </nav>




    <section id="section1" class="text-light p-5 mb-5">
        <div class="float-start w-100 h-50 justify-content-between align-items-center d-flex">
            <div class="transition1 float-start w-25 h-100">
                <div class="loading float-start w-25 h-50 p-5 position-absolute">
                    <div class="div1 " style="float: left; width: 20%; height: 10vh; margin-left: 0%; margin-top: 0%; border: 1px solid white; background-color: rgb(231, 231, 48); animation: box1 5s infinite; border-radius: 5px; position: absolute; box-shadow: 3px 3px 10px rgba(169, 170, 169, 0.8);"></div>
                    <div class="div2 " style="float: left; width: 20%; height: 10vh; margin-left: 25%; margin-top: 0%; border: 1px solid white; background-color: rgb(153, 183, 151); animation: box2 5s infinite; border-radius: 5px; position: absolute; box-shadow: 3px 3px 10px rgba(169, 170, 169, 0.8);"></div>
                    <div class="div3 " style="float: left; width: 20%; height: 10vh; margin-left: 25%; margin-top: 23%; border: 1px solid white; background-color: rgb(93, 93, 255); animation: box3 5s infinite; border-radius: 5px; position: absolute; box-shadow: 3px 3px 10px rgba(169, 170, 169, 0.8);"></div>
                    <div class="div4 " style="float: left; width: 20%; height: 10vh; margin-left: 0%; margin-top: 23%; border: 1px solid white; background-color: rgb(5, 158, 38); animation: box4 5s infinite; border-radius: 5px; position: absolute; box-shadow: 3px 3px 10px rgba(169, 170, 169, 0.8);"></div>
                </div>
            </div>
            <div class="image float-start w-25 h-100" data-aos="zoom-in" data-aos-duration="1200" style="border-radius: 100%;">
                <img src="assets/pictures/profile.png" class="float-start w-100 h-100" alt="" style="filter: drop-shadow( 0px 0px 15px rgba(169, 170, 169, 0.8)); animation: picture 1.5s infinite; border-radius: 100%; ">
            </div>
            <div class="transition2 float-start w-25 h-100 justify-content-center align-items-center d-flex">
                <div class="cube float-start w-75 h-75 justify-content-center align-items-center d-flex">
                  <!-- Cube1 -->
                    <div class="cube cube1">
                        <div class="cube-piece back"></div>
                        <div class="cube-piece upper"></div>
                        <div class="cube-piece bottom"></div>
                        <div class="cube-piece left"></div>
                        <div class="cube-piece right"></div>
                        <div class="cube-piece front"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="float-start w-100 h-50 justify-content-center align-items-center d-flex mb-2" data-aos="fade-up" data-aos-duration="1500">
            <p class="float-start w-75 px-2" style="height: 25vh; border-bottom: 1px solid wheat;">
                <b class="float-start w-100 h-auto my-3 mb-3" style="font-size: 19px; text-indent: 6%; color: rgb(141, 168, 144);">
                    Hi, I'm John Christian V. Tayao, a passionate 4th-year BSIT student at 
                    Bulacan State Agricultural University in Pinaod, San Ildefonso, Bulacan. 
                    Aspiring to become a skilled Web Developer, I'm excited to shape my future 
                    in the tech industry.
                    <br>
                </b>
            </p>
        </div>
    </section>






    <section id="section2" class="text-light mb-5 border border-success" data-aos="fade-right" data-aos-duration="1200">
        <div class="div1 w-100 px-4 py-2">
            <b class="fs-2 text-light">About Me</b>
        </div>
        <div class="about w-100 px-5 mb-4">
            <p class="text" style="text-indent: 5%; color: rgb(141, 168, 144);">
                My interest in becoming a developer began when I was playing online games and dreamed of creating my own version of them. 
                Over time, I discovered that web development is equally exciting and full of opportunities, and it has become another passion of mine.
            </p>
        </div>
        <div class="info1 w-50 float-start text-start" style="border-right: 1px solid wheat;" data-aos="zoom-in" data-aos-duration="1600">
            <ul class="float-start text-center w-100 fs-4">
                <b class="text-light">Personal Background
                </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1600">
                <b class="text-light">
                Full Name: 
                <br>
                </b>
                <p class="m-0">Tayao, John Christian V.</p>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1600">
                <b class="text-light">
                Birthdate: 
                <br>
                </b>
                <p class="m-0">December 04, 2002</p>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="900" data-aos-duration="1600">
                <b class="text-light">
                Nationality: 
                <br>
                </b>
                <p class="m-0">Filipino</p>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="1600">
                <b class="text-light">
                Address: 
                <br>
                </b>
                <p class="m-0">Sta. Catalina Matanda, San Ildefonso, Bulacan, Philippines</p>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="1500" data-aos-duration="1600">
                <b class="text-light">
                Religion: 
                <br>
                </b>
                <p class="m-0">Roman-Catholic</p>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="1800" data-aos-duration="1600">
                <b class="text-light">
                Gender: 
                <br>
                </b>
                <p class="m-0">Male</p>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="2100" data-aos-duration="1600">
                <b class="text-light">
                Hobby: 
                <br>
                </b>
                <p class="m-0">Watching anime and playing online mobile games</p>
            </ul>
        </div>
        <div class="info2 w-50 float-start text-center" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1600">
            <ul class="float-start w-100 fs-4">
                <b class="text-light">Educational Background
                </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="800" data-aos-duration="1600">
                <b class="text-light">Primary Education: </b>
                <br>
                <p class="px-3">
                Sta. Catalina Matanda Elementary School
                <br>
                S.Y. ( 2009-2015 )
                </p>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="1600" data-aos-duration="1600">
                <b class="text-light">Secondary Education: </b>
                <br>
                <p class="px-3">
                San Ildefonso National Highschool
                <br>
                STRAND: Science, Technology, Engineering and Mathematics
                <br>
                S.Y. ( 2015-2021 )
                </p>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="2400" data-aos-duration="1600">
                <b class="text-light">Tertiary Education: </b>
                <br>
                <p class="px-3">
                Bulacan Agricultural State College
                <br>
                COURSE: Bachelor of Science in Information Technology
                <br>
                S.Y. ( 2021-2025 )
                </p>
            </ul>
        </div>
    </section>





    <section id="section3" class="text-light mb-5 border border-success" data-aos="fade-right" data-aos-duration="1200">
        <div class="div1 w-100 px-4 py-2">
            <b class="fs-2 text-light">My Skills</b>
        </div>
        <div class="about w-100 px-5">
            <p class="text" style="text-indent: 5%; color: rgb(141, 168, 144);" >
                Throughout my journey as BSIT student, i learned many new technical skills and improve my own personal skills. 
                Using my skills in daily activities and interaction with others.
            </p>
            <br>
        </div>
        <div class="info1 w-50 float-start text-center px-5" style="border-right: 1px solid wheat;" data-aos="fade-up" data-aos-duration="1600">
            <ul class="float-start w-100 fs-4">
                <b class="text-light">Technical Skill's
                </b>
            </ul>
            <div class="tech_skills rounded h-25 w-50 mb-3 float-start" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1600">
                <div class="logo float-start w-100 h-100 rounded">
                    <img src="assets/logo/html.png" alt="" class="border border-light bg bg-light" style="width: 40%; height: 15vh; border-radius: 8px;">
                </div>
                <b style="color: rgb(141, 168, 144);">HTML</b>
            </div>
            <div class="tech_skills rounded h-25 w-50 mb-3 float-start" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1600">
                <div class="logo float-start w-100 h-100 rounded">
                    <img src="assets/logo/php.png" alt="" class="border border-light bg bg-light" style="width: 40%; height: 15vh; border-radius: 8px;">
                </div>
                <b style="color: rgb(141, 168, 144);">PHP</b>
            </div>
            <div class="tech_skills rounded h-25 w-50 mb-3 float-start" data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1600">
                <div class="logo float-start w-100 h-100 rounded">
                    <img src="assets/logo/js.png" alt="" class="border border-light bg bg-light" style="width: 40%; height: 15vh; border-radius: 8px;">
                </div>
                <b style="color: rgb(141, 168, 144);">JAVASCRIPT</b>
            </div>
            <div class="tech_skills rounded h-25 w-50 mb-3 float-start" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1600">
                <div class="logo float-start w-100 h-100 rounded">
                    <img src="assets/logo/css.png" alt="" class="border border-light bg bg-light" style="width: 40%; height: 15vh; border-radius: 8px;">
                </div>
                <b style="color: rgb(141, 168, 144);">CSS</b>
            </div>
            <div class="tech_skills rounded h-25 w-50 float-start" data-aos="zoom-in" data-aos-delay="2500" data-aos-duration="1600">
                <div class="logo float-start w-100 h-100 rounded">
                    <img src="assets/logo/sql.png" alt="" class="border border-light bg bg-light" style="width: 40%; height: 15vh; border-radius: 8px;">
                </div>
                <b style="color: rgb(141, 168, 144);">SQL</b>
            </div>
            <div class="tech_skills rounded h-25 w-50 float-start" data-aos="zoom-in" data-aos-delay="3000" data-aos-duration="1600">
                <div class="logo float-start w-100 h-100 rounded">
                    <img src="assets/logo/bootstrap.png" alt="" class="border border-light bg bg-light" style="width: 40%; height: 15vh; border-radius: 8px;">
                </div>
                <b style="color: rgb(141, 168, 144);">BOOTSTRAP</b>
            </div>
        </div>
        <div class="info2 w-50 float-start text-start" data-aos="fade-up" data-aos-delay="3500" data-aos-duration="1600">
            <ul class="float-start text-center w-100 fs-4">
                <b class="text-light">Personal Skill's
                </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0 mb-3" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1600">
                <b class="fs-5">Active </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0 mb-3" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1600">
                <b class="fs-5">Reliable </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0 mb-3" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="900" data-aos-duration="1600">
                <b class="fs-5">Competent </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0 mb-3" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="1600">
                <b class="fs-5">Hardworking </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0 mb-3" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="1500" data-aos-duration="1600">
                <b class="fs-5">Easy Learner </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0 mb-3" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="1800" data-aos-duration="1600">
                <b class="fs-5">Good Listener </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0 mb-3" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="2100" data-aos-duration="1600">
                <b class="fs-5">Time Management </b>
            </ul>
            <ul class="float-start w-100 px-5 m-0" style="color: rgb(141, 168, 144);" data-aos="fade-right" data-aos-delay="2400" data-aos-duration="1600">
                <b class="fs-5">Communication Skills </b>
            </ul>
        </div>
    </section>




    <section id="section4" class="text-light mb-5 border border-success" data-aos="fade-right" data-aos-duration="1600">
        <div class="div1 w-100 px-4 py-2">
            <b class="fs-2 text-light">More About Me</b>
        </div>
        <ul class="float-start w-100 fs-4 py-2 text-center">
                <b class="text-light"> Recent Project's</b>
        </ul>

        <div class="info1 w-50 h-75 float-start text-center px-5">
            <div class="project float-start w-100 py-3 px-4 d-flex justify-content-center align-items-center rounded" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1600" style="height: 45%; margin-bottom: 5%; box-shadow: 0px 0px 15px rgba(169, 170, 169, 0.8);">
                <img src="assets/logo/calims.png" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1600" class="float-start border border-light bg bg-light mb-3" style="width: 20%; height: 15vh; border-radius: 100%; box-shadow: 1px 1px 15px rgba(169, 170, 169, 0.8);" alt="">
                <p class="w-75 float-start p-3" data-aos="zoom-in" data-aos-delay="1250" data-aos-duration="1600" style="color: rgb(141, 168, 144); font-size: 14px;">
                    Crop's And Livestock Inventory Management System (CALIMS) is a web application developed during my Capstone Project. 
                    It was presented for Office of the Municipal Agriculturist Of San Ildefonso, Bulacan.
                </p>
            </div>

            <div class="project float-start w-100 py-3 px-4 d-flex justify-content-center align-items-center rounded" data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1600" style="height: 45%; box-shadow: 0px 0px 15px rgba(169, 170, 169, 0.8);">
                <img src="" class="float-start border border-light mb-3 p-3" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1600" style="width: 20%; height: 15vh; border-radius: 100%; box-shadow: 1px 1px 15px rgba(169, 170, 169, 0.8);" alt="Empty">
                <p class="w-75 float-start p-3" data-aos="zoom-in" data-aos-delay="1750" data-aos-duration="2250" style="color: rgb(141, 168, 144);">
                    Empty...
                </p>
            </div>
        </div>



        <div class="info1 w-50 h-75 float-start text-center px-5">
            <div class="project float-start w-100 py-3 px-4 d-flex justify-content-center align-items-center rounded" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1600" style="height: 45%; margin-bottom: 5%; box-shadow: 0px 0px 15px rgba(169, 170, 169, 0.8);">
                <img src="" class="float-start border border-light mb-3 p-3" data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1600" style="width: 20%; height: 15vh; border-radius: 100%; box-shadow: 1px 1px 15px rgba(169, 170, 169, 0.8);" alt="Empty">
                <p class="w-75 float-start p-3" data-aos="zoom-in" data-aos-delay="1750" data-aos-duration="1600" style="color: rgb(141, 168, 144);">
                    Empty...
                </p>
            </div>
            
            <div class="project float-start w-100 py-3 px-4 d-flex justify-content-center align-items-center rounded" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1600" style="height: 45%; box-shadow: 0px 0px 15px rgba(169, 170, 169, 0.8);">
                <img src="" class="float-start border border-light mb-3 p-3" data-aos="zoom-in" data-aos-delay="2500" data-aos-duration="1600" style="width: 20%; height: 15vh; border-radius: 100%; box-shadow: 1px 1px 15px rgba(169, 170, 169, 0.8);" alt="Empty">
                <p class="w-75 float-start p-3" data-aos="zoom-in" data-aos-delay="2750" data-aos-duration="1600" style="color: rgb(141, 168, 144);">
                    Empty...
                </p>
            </div>
        </div>

    </section>






    <footer class="float-start w-100 h-25 border border-light p-3 mb-3 rounded" data-aos="fade-right" data-aos-duration="1200">
        <div class="float-start w-50 h-25">
            <b class="float-start w-100 text-light fs-5 mb-2">Contact's</b>
            <ul class="float-start w-100 px-5 mt-2 d-flex align-items-center justify-content-between">
                <div class=" bg bg-light float-start" style="border-radius: 100%; padding: 1px;" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1200">
                    <a href="https://www.facebook.com/christian.tayao">
                        <img src="assets/logo/facebook.png" class="float-start" alt="" style="height: 8vh; border-radius: 100%; box-shadow: 0px 0px 15px rgba(169, 170, 169, 0.8);">
                    </a>
                </div>
                <div class=" bg bg-light float-start" style="border-radius: 100%; padding: 1px;" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="1200">
                    <a href="mailto:johnchristiantayao.basc@gmail.com">
                        <img src="assets/logo/email.png" class="float-start" alt="" style="height: 8vh;  border-radius: 100%; box-shadow: 0px 0px 15px rgba(169, 170, 169, 0.8);">
                    </a>
                </div>
                <div class=" bg bg-light float-start" style="border-radius: 100%; padding: 1px;" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1200">
                    <a href="https://maps.app.goo.gl/dHFjYGCbAsm67RAw8">
                        <img src="assets/logo/location.png" class="float-start" alt="" style="height: 8vh;  border-radius: 100%; box-shadow: 0px 0px 15px rgba(169, 170, 169, 0.8);">
                    </a>
                </div>
                <div class=" bg bg-light float-start" style="border-radius: 100%; padding: 1px;" data-aos="fade-down" data-aos-delay="2000" data-aos-duration="1200">
                    <a href="tel:09978549996">
                        <img src="assets/logo/phone.png" class="float-start" alt="" style="height: 8vh;  border-radius: 100%; box-shadow: 0px 0px 15px rgba(169, 170, 169, 0.8);">
                    </a>
                </div>
            </ul>
        </div>

        <div class="float-start w-50 h-25">
            <b class="float-start w-100 text-light fs-5 mb-2">Personal Motto:  </b>
            <p class="float-start w-100 px-4" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1600" style=" color: rgb(141, 168, 144);">" Transform Imagination in a Excellence Reality. "</p>
            <p class="float-start w-100 px-3 text-end" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1600" style=" color: rgb(141, 168, 144);">© 2025 Personal Portfolio</p>
        </div>
    </footer>


    
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
        <script>
        AOS.init();
        </script>
