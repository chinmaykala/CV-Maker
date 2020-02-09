<?php

if (isset($_POST['register'])) {
    $cname2 = 0;
    $pos2 = 0;
    $res12 = 0;
    $res22 = 0;
    $res32 = 0;
    $cname3 = 0;
    $pos3 = 0;
    $res13 = 0;
    $res23 = 0;
    $res33 = 0;
    $cname4 = 0;
    $pos4 = 0;
    $res14 = 0;
    $res24 = 0;
    $res34 = 0;
    $cname5 = 0;
    $pos5 = 0;
    $res15 = 0;
    $res25 = 0;
    $res35 = 0;
    $cname6 = 0;
    $pos6 = 0;
    $res16 = 0;
    $res26 = 0;
    $res36 = 0;
    $q12 = 0;
    $bo2 = 0;
    $pr2 = 0;
    $yr2 = 0;
    $q13 = 0;
    $bo3 = 0;
    $pr3 = 0;
    $yr3 = 0;
    $q14 = 0;
    $bo4 = 0;
    $pr4 = 0;
    $yr4 = 0;
    $q15 = 0;
    $bo5 = 0;
    $pr5 = 0;
    $yr5 = 0;
    $q16 = 0;
    $bo6 = 0;
    $pr6 = 0;
    $yr6 = 0;
    $c12 = 0;
    $in2 = 0;
    $c13 = 0;
    $in3 = 0;
    $c14 = 0;
    $in4 = 0;
    $c15 = 0;
    $in5 = 0;
    $c16 = 0;
    $in6 = 0;
    $s12 = 0;
    $d12 = 0;
    $s13 = 0;
    $d13 = 0;
    $s14 = 0;
    $d14 = 0;
    $s15 = 0;
    $d15 = 0;
    $s16 = 0;
    $d16 = 0;
    $cer12 = 0;
    $cer13 = 0;
    $cer14 = 0;
    $cer15 = 0;
    $cer16 = 0;
    extract($_POST);
?>
    <html>

    <head>
        <link type="text/css" rel="stylesheet" href="temp1.css" />
        <title>CV Print - CV-Maker</title>
    </head>

    <body>
        <div id="printTable">
        <div id="header">
            <p id="name"><?php echo $name; ?></p>
            <a href="mailto:" target="_blank">
                <p id="email"><?php echo $email; ?></p>
            </a>
        </div>
        <div class="left">
        </div>
        <div class="right">
            <h3>CV Highlights</h3>
            <p>
                <ul>
                    <li>An independent, dedicated, efficient person. These attributes are proved through the series of courses I have taken or I am taking as of now independently through online platforms.</li>
                    <li>Good Communication Skills, Presentation Skills, attitude towards leadership, authorisation and delegation, conflict resolution and negotiation and a very good team worker.</li>
                </ul>
            </p>
            <h3>Professional Experience</h3>
            <h4 id="company-name"><?php echo $cname; ?></h4>
            <p id="job-title"><strong><?php echo $pos; ?></strong></p>
            <p id="job-responsibilities">Job Responsbilities</p>
            <p>
                <ul>
                    <li><?php echo $res1; ?></li>
                    <li><?php echo $res2; ?></li>
                    <li><?php echo $res3; ?></li>
                </ul>
            </p>
            <?php
            $exp = array(
                array(
                    "cname" => $cname2,
                    "pos" => $pos2,
                    "res1" => $res12,
                    "res2" => $res22,
                    "res3" => $res32,
                ),
                array(
                    "cname" => $cname3,
                    "pos" => $pos3,
                    "res1" => $res13,
                    "res2" => $res23,
                    "res3" => $res33,
                ),
                array(
                    "cname" => $cname4,
                    "pos" => $pos4,
                    "res1" => $res14,
                    "res2" => $res24,
                    "res3" => $res34,
                ),
                array(
                    "cname" => $cname5,
                    "pos" => $pos5,
                    "res1" => $res15,
                    "res2" => $res25,
                    "res3" => $res35,
                ), array(
                    "cname" => $cname6,
                    "pos" => $pos6,
                    "res1" => $res16,
                    "res2" => $res26,
                    "res3" => $res36,
                ),
            );
            if ($add == 0)
                $i = -1;
            if ($add == 2)
                $i = 0;
            if ($add == 3)
                $i = 1;
            if ($add == 4)
                $i = 2;
            if ($add == 5)
                $i = 3;
            if ($add == 6)
                $i = 4;
            while ($i >= 0) {
            ?>
                <h4 id="company-name"><?php echo $exp[$i]["cname"]; ?></h4>
                <p id="job-title"><strong><?php echo $exp[$i]["pos"]; ?></strong></p>
                <p id="job-responsibilities">Job Responsbilities</p>
                <p>
                    <ul>
                        <li><?php echo $exp[$i]["res1"]; ?></li>
                        <li><?php echo $exp[$i]["res2"]; ?></li>
                        <li><?php echo $exp[$i]["res3"]; ?></li>
                    </ul>
                </p>
            <?php
                $i--;
            }
            ?>
            <h3>Educational Qualifications</h3>
            <table>
                <tr id="heading">
                    <td>Qualification</td>
                    <td>Board</td>
                    <td>Percentage / Grades</td>
                    <td>Year</td>
                </tr>
                <tr>
                    <td><?php echo $q1; ?></td>
                    <td><?php echo $bo; ?></td>
                    <td><?php echo $pr; ?></td>
                    <td><?php echo $yr; ?></td>
                </tr>
                <?php
                $educ = array(
                    array(
                        "q1" => $q12,
                        "bo" => $bo2,
                        "pr" => $pr2,
                        "yr" => $yr2,
                    ),
                    array(
                        "q1" => $q13,
                        "bo" => $bo3,
                        "pr" => $pr3,
                        "yr" => $yr3,
                    ),
                    array(
                        "q1" => $q14,
                        "bo" => $bo4,
                        "pr" => $pr4,
                        "yr" => $yr4,
                    ),
                    array(
                        "q1" => $q15,
                        "bo" => $bo5,
                        "pr" => $pr5,
                        "yr" => $yr5,
                    ),
                    array(
                        "q1" => $q16,
                        "bo" => $bo6,
                        "pr" => $pr6,
                        "yr" => $yr6,
                    ),
                );
                if ($sadd == 0)
                    $j = -1;
                if ($sadd == 2)
                    $j = 0;
                if ($sadd == 3)
                    $j = 1;
                if ($sadd == 4)
                    $j = 2;
                if ($sadd == 5)
                    $j = 3;
                if ($sadd == 6)
                    $j = 4;
                while ($j >= 0) {
                ?>
                    <tr>
                        <td><?php echo $educ[$j]["q1"]; ?></td>
                        <td><?php echo $educ[$j]["bo"]; ?></td>
                        <td><?php echo $educ[$j]["pr"]; ?></td>
                        <td><?php echo $educ[$j]["yr"]; ?></td>
                    </tr>
                <?php
                    $j--;
                }
                ?>
            </table>
            <h3>Independent Courses</h3>
            <p>
                <ul>
                    <li>
                        <span id="course-name"><?php echo $c1; ?></span> – <?php echo $in; ?></li>
                    <?php
                    $inc = array(
                        array(
                            "c1" => $c12,
                            "in" => $in2
                        ),
                        array(
                            "c1" => $c13,
                            "in" => $in3
                        ),
                        array(
                            "c1" => $c14,
                            "in" => $in4
                        ),
                        array(
                            "c1" => $c15,
                            "in" => $in5
                        ),
                        array(
                            "c1" => $c16,
                            "in" => $in6
                        ),
                    );
                    if ($ladd == 0)
                        $k = -1;
                    if ($ladd == 2)
                        $k = 0;
                    if ($ladd == 3)
                        $k = 1;
                    if ($ladd == 4)
                        $k = 2;
                    if ($ladd == 5)
                        $k = 3;
                    if ($ladd == 6)
                        $k = 4;
                    while ($k >= 0) {
                    ?>
                        <li>
                            <span id="course-name"><?php echo $inc[$k]["c1"]; ?></span> - <?php echo $inc[$k]["in"]; ?></li>
                    <?php
                        $k--;
                    }
                    ?>
                </ul>
                <h3>Technical Skills</h3>
                <p>
                    <ul>
                        <li>
                            <span id="course-name"><?php echo $s1; ?>:</span> <?php echo $d1; ?></li>
                        <?php
                        $tsk = array(
                            array(
                                "s1" => $s12,
                                "d1" => $d12
                            ),
                            array(
                                "s1" => $s13,
                                "d1" => $d13
                            ),
                            array(
                                "s1" => $s14,
                                "d1" => $d14
                            ),
                            array(
                                "s1" => $s15,
                                "d1" => $d15
                            ),
                            array(
                                "s1" => $s16,
                                "d1" => $d16
                            ),
                        );
                        if ($dadd == 0)
                            $l = -1;
                        if ($dadd == 2)
                            $l = 0;
                        if ($dadd == 3)
                            $l = 1;
                        if ($dadd == 4)
                            $l = 2;
                        if ($dadd == 5)
                            $l = 3;
                        if ($dadd == 6)
                            $l = 4;
                        while ($l >= 0) {
                        ?>
                            <li>
                                <span id="course-name"><?php echo $tsk[$l]["s1"]; ?>:</span> <?php echo $tsk[$l]["d1"]; ?></li>
                        <?php
                            $l--;
                        }
                        ?>
                    </ul>
                </p>
                <h3>Certifications / Awards:</h3>
                <p>
                    <ul>
                        <li><?php echo $cer1; ?></li>
                        <?php
                        $cert = array(
                            array(
                                "cer1" => $cer12
                            ),
                            array(
                                "cer1" => $cer13
                            ),
                            array(
                                "cer1" => $cer14
                            ),
                            array(
                                "cer1" => $cer15
                            ),
                            array(
                                "cer1" => $cer16
                            ),
                        );
                        if ($cadd == 0)
                            $m = -1;
                        if ($cadd == 2)
                            $m = 0;
                        if ($cadd == 3)
                            $m = 1;
                        if ($cadd == 4)
                            $m = 2;
                        if ($cadd == 5)
                            $m = 3;
                        if ($cadd == 6)
                            $m = 4;
                        while ($m >= 0) {
                        ?>
                            <li><?php echo $cert[$m]["cer1"]; ?></li>
                        <?php
                            $m--;
                        }
                        ?>
                    </ul>
                </p>
                <h3>Personal Information:</h3>
                <p>
                    <ul>
                        <li>
                            <?php echo $ab; ?>
                        <li>
                            <span id="course-name">Languages Known:</span><?php echo $lang; ?></li>
                        <li>
                            <span id="course-name">Hobbies:</span><?php echo $hob; ?></li>
                    </ul>
                </p>
                <h3>Declaration</h3>
                <p>
                    I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
        </div>
        <div id="footer"></div>
        <center><button style="border-color: #668284; border-top: #E3EDD8; border-radius: 100px; padding: 10px 30px; font-size: 1.45em; font-weight: bold; color: grey;" id="printButton" onclick="printButton.style.visibility='hidden'; window.print(printTable); printButton.style.visibility='visible';">Print</button></center>
    </body>

    </html>
<?php
} else {
    header('Location:form.php');
}
?>