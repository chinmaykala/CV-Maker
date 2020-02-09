<?php include '../call.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CV Build - CV-Maker</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../home/images/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="..\vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="..\fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="..\fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="..\vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="..\vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="..\vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="..\css/util.css">
    <link rel="stylesheet" type="text/css" href="..\css/main.css">
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-contact100" style="background-image: url('../home/images/contact-background.jpg');">
        <a href="..\index.php"><span class="contact100-less">Back to Home</span></a>
        <div class="wrap-contact100">
            <form action="cvprint.php" method="POST" class="contact100-form validate-form">
                <span class="contact100-form-title">
                    CV-Maker
                </span>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name *</span>
                    <input class="input100" type="text" name="name" placeholder="Enter your name">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email *</span>
                    <input class="input100" type="text" name="email" placeholder="Enter your email">
                </div>

                <div class="ttl">Professional Experience</div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Organization</span>
                    <input class="input100" type="text" name="cname" placeholder="Company Name">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Position</span>
                    <input class="input100" type="text" name="pos" placeholder="Position">
                </div>

                <div class="wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Job Responsbilities</span>
                    <input class="input100" type="text" name="res1" placeholder="Line 1">
                </div>

                <div class="wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <input class="input100" type="text" name="res2" placeholder="Line 2">
                </div>

                <div class="wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" id="qual">
                    <input class="input100" type="text" name="res3" placeholder="Line 3"><input type="hidden" name="add" value="0">
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="button" id="more_fields" onclick="add_fields();" value="Add More">
                            Add More
                        </button>
                    </div>
                </div>

                <script>
                    var room = 1;

                    function add_fields() {
                        room++;
                        var objTo = document.getElementById('qual')
                        var divtest = document.createElement("div");
                        divtest.innerHTML =
                            '<div class="wrap-input100 rs1-wrap-input100"><span class="label-input100">Organization</span><input class="input100" type="text" name="cname' +
                            room +
                            '" placeholder="Company Name"></div><div class="wrap-input100 rs1-wrap-input100"><span class="label-input100">Position</span><input class="input100" type="text" name="pos' +
                            room +
                            '" placeholder="Position"></div><div class="wrap-input100"><span class="label-input100">Job Responsbilities</span><input class="input100" type="text" name="res1' +
                            room +
                            '" placeholder="Line 1"></div><div class="wrap-input100"><input class="input100" type="text" name="res2' +
                            room +
                            '" placeholder="Line 2"></div><div class="wrap-input100"><input class="input100" type="text" name="res3' +
                            room + '" placeholder="Line 3"><input type="hidden" name="add" value="' + room + '"></div>';
                        objTo.appendChild(divtest)
                    }
                </script>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Educational Qualifications</span>
                    <input class="input100" type="text" name="q1" placeholder="Qualification-1(Stream)">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">&#8195</span>
                    <input class="input100" type="text" name="bo" placeholder="Board/University">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <input class="input100" type="text" name="pr" placeholder="Percentage/Grades">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <input class="input100" type="text" name="yr" placeholder="Year" data-validate="This field is compulsory!"><input type="hidden" name="sadd" value="0">
                </div>

                <div id="edu">
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="button" id="more_fields" onclick="add_fields2();" value="Add More">
                            Add More
                        </button>
                    </div>
                </div>

                <script>
                    var room2 = 1;

                    function add_fields2() {
                        room2++;
                        var objTo = document.getElementById('edu')
                        var divtest = document.createElement("div");
                        divtest.innerHTML =
                            '<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!"><span class="label-input100">Educational Qualifications</span><input class="input100" type="text" name="q1' +
                            room2 +
                            '" placeholder="Qualification-1(Stream)"></div><div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!"><span class="label-input100">&#8195</span><input class="input100" type="text" name="bo' +
                            room2 +
                            '" placeholder="Board/University"></div><div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!"><input class="input100" type="text" name="pr' +
                            room2 +
                            '" placeholder="Percentage/Grades"></div><div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!"><input class="input100" type="text" name="yr' +
                            room2 + '" placeholder="Year"><input type="hidden" name="sadd" value="' + room2 + '"></div>';
                        objTo.appendChild(divtest)
                    }
                </script>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Independent Courses</span>
                    <input class="input100" type="text" name="c1" placeholder="Course-1 Name">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">&#8195</span>
                    <input class="input100" type="text" name="in" placeholder="Institute"><input type="hidden" name="ladd" value="0">
                </div>

                <div id="ic">
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="button" id="more_fields" onclick="add_fields3();" value="Add More">
                            Add More
                        </button>
                    </div>
                </div>

                <script>
                    var room3 = 1;

                    function add_fields3() {
                        room3++;
                        var objTo = document.getElementById('ic')
                        var divtest = document.createElement("div");
                        divtest.innerHTML =
                            '<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!"><span class="label-input100">Independent Courses</span><input class="input100" type="text" name="c1' +
                            room3 +
                            '" placeholder="Course-1 Name"></div><div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!"><span class="label-input100">&#8195</span><input class="input100" type="text" name="in' +
                            room3 + '" placeholder="Institute"><input type="hidden" name="ladd" value="' + room3 +
                            '"></div>';
                        objTo.appendChild(divtest)
                    }
                </script>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Technical Skills</span>
                    <input class="input100" type="text" name="s1" placeholder="Skill 1">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">&#8195</span>
                    <input class="input100" type="text" name="d1" placeholder="Details"><input type="hidden" name="dadd" value="0">
                </div>

                <div id="tsk">
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="button" id="more_fields" onclick="add_fields4();" value="Add More">
                            Add More
                        </button>
                    </div>
                </div>

                <script>
                    var room4 = 1;

                    function add_fields4() {
                        room4++;
                        var objTo = document.getElementById('tsk')
                        var divtest = document.createElement("div");
                        divtest.innerHTML =
                            '<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!"><span class="label-input100">Technical Skills</span><input class="input100" type="text" name="s1' +
                            room4 +
                            '" placeholder="Skill 1"></div><div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!"><span class="label-input100">&#8195</span><input class="input100" type="text" name="d1' +
                            room4 + '" placeholder="Details"><input type="hidden" name="dadd" value="' + room4 + '"></div>';
                        objTo.appendChild(divtest)
                    }
                </script>

                <div class="wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Certifications / Awards</span>
                    <input class="input100" type="text" name="cer1" placeholder="Certificate/Award 1"><input type="hidden" name="cadd" value="0">
                </div>

                <div id="cert">
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="button" id="more_fields" onclick="add_fields5();" value="Add More">
                            Add More
                        </button>
                    </div>
                </div>

                <script>
                    var room5 = 1;

                    function add_fields5() {
                        room5++;
                        var objTo = document.getElementById('cert')
                        var divtest = document.createElement("div");
                        divtest.innerHTML =
                            '<div class="wrap-input100" style="width: 730px"><span class="label-input100">Certifications / Awards</span><input class="input100" type="text" name="cer1' +
                            room5 + '" placeholder="Certificate/Award 1"><input type="hidden" name="cadd" value="' + room5 +
                            '"></div>';
                        objTo.appendChild(divtest)
                    }
                </script>

                <div class="wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!" data-validate="Content is required">
                    <span class="label-input100">About</span>
                    <textarea class="input100" name="ab" placeholder="Write about yourself"></textarea>
                </div>

                <div class="wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Languages Known</span>
                    <input class="input100" type="text" name="lang" placeholder="Ex- English, Hindi ,etc.">
                </div>


                <div class="wrap-input100 validate-input" data-validate="This field is compulsory!" data-validate="This field is compulsory!">
                    <span class="label-input100">Hobbies</span>
                    <input class="input100" type="text" name="hob" placeholder="Hobby 1, Hobby 2 ,etc.">
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="submit" name="register">
                            Generate
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <a href="..\index.php"><span class="contact100-more">Back to Home</span></a>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="..\vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="..\vendor/bootstrap/js/popper.js"></script>
    <script src="..\vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="..\vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="..\js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="..\js/google-tag.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>
