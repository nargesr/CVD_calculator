<!DOCTYPE html>
<html lang="en">
<head>
    <title>Heart Risk Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<!--<ul class="top">-->
<!--    <li class="hover"><a href="second_page.php"> english</a></li>-->
<!--    <li class="hover"><a href="second_page_fa.php">persian</a></li>-->
<!--</ul>-->
<div class="container">
    <div class="jumbotron text-center">
        <h1>Heart Risk Calculator</h1>
    </div>

    <div class="row">
        <div class="col-md-3 col-md-offset-2 text-center alert alert-success">
            <h1>
                <?php

                function risk1(){
                    $city = $_POST["city"];
                    $area = $_POST["area"];
                    $age = $_POST["age"];
                    $gender = $_POST["gender"];
                    $total = $_POST["total-chol"];
                    $HDL = $_POST["hdl"];
                    $SBPon = $_POST["sbp"];
                    $SBP = $_POST["dbp"];
                    $diabetes = $_POST["diabetes"];
                    $smoker = $_POST["smoker"];
                    if ($total == 0){
                        $total = 1;
                    }
                    if ($HDL == 0){
                        $HDL = 1;
                    }
                    if ($SBPon == 0){
                        $SBPon = 1;
                    }
                    if ($SBP == 0){
                        $SBP = 1;
                    }
                    if ($gender == 1){
                        $S10 = 0.88936;
                        $B1 = 3.06117;//Beta of age
                        $B2 = 1.12370;//Beta of total cholesterol
                        $B3 = -0.93263;//Beta of HDL cholesterol
                        $B4 = 1.99881;//Beta of SBP if not treat
                        $B5 = 1.99881;//Beta of SBP if treat
                        $B6 = 0.65451;//Smoking
                        $B7 = 0.57367;//Diabetes

                        $a = $B1*log($age) + $B2*log($total) + $B3*log($HDL) + $B4*log($SBPon) + $B5*log($SBP) + $B6*$diabetes + $B7*$smoker;
                        $b = abs($a - 24.3509);

                        $CVD = 1 - pow(($S10), exp($b));

                        $CVD = $CVD * 1000;
                        $CVD = round($CVD);
                        $CVD = $CVD / 10;

                        echo $CVD, "%";
                    }else{
                        $S10 = 0.95012;
                        $B1 = 2.32888;//Beta of age
                        $B2 = 1.20904;//Beta of total cholesterol
                        $B3 = -0.70833;//Beta of HDL cholesterol
                        $B4 = 2.76157;//Beta of SBP if not treat
                        $B5 = 2.82263;//Beta of SBP if treat
                        $B6 = 0.52873;//Smoking
                        $B7 = 0.69154;//Diabetes

                        $a = $B1*log($age) + $B2*log($total) + $B3*log($HDL) + $B4*log($SBPon) + $B5*log($SBP) + $B6*$diabetes + $B7*$smoker;
                        $b = abs($a - 26.1931);

                        $CVD = 1 - pow(($S10), exp($b));

                        $CVD = $CVD * 1000;
                        $CVD = round($CVD);
                        $CVD = $CVD / 10;

                        echo $CVD, "%";
                    }
                }

                risk1();
                ?>
            </h1>
            <p>10-year risk of heart disease or stroke</p>
            <p><a href="">Learn how you can track your risk.</a></p>
        </div>
        <div class="col-md-3 col-md-offset-2 text-center alert alert-success">
            <h1>
                <?php
                function risk2(){
                    $city = $_POST["city"];
                    $area = $_POST["area"];
                    $age = $_POST["age"];
                    $gender = $_POST["gender"];
                    $total = $_POST["total-chol"];
                    $HDL = $_POST["hdl"];
                    $SBPon = $_POST["sbp"];
                    $SBP = $_POST["dbp"];
                    $diabetes = $_POST["diabetes"];
                    $smoker = $_POST["smoker"];;
                    if ($gender == 1){
                        $point = 0;
                        if ($age > 20 && $age <= 34)
                            $point += -9;
                        else if($age <= 39)
                            $point += -4;
                        else if($age <= 44)
                            $point += 0;
                        else if ($age <= 49)
                            $point += 3;
                        else if ($age <= 54)
                            $point += 6;
                        else if ($age <= 59)
                            $point += 8;
                        else if($age <= 64)
                            $point += 10;
                        else if($age <= 69)
                            $point += 11;
                        else if ($age <= 74)
                            $point += 12;
                        else if ($age <= 79)
                            $point += 13;
                        if ($age >= 20 && $age <= 39){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 4;
                            else if ($total < 240)
                                $point += 7;
                            else if ($total < 280)
                                $point += 9;
                            else
                                $point += 11;
                        }
                        if ($age >= 40 && $age <= 49){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 3;
                            else if ($total < 240)
                                $point += 5;
                            else if ($total < 280)
                                $point += 6;
                            else
                                $point += 8;
                        }
                        if ($age >= 50 && $age <= 59){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 2;
                            else if ($total < 240)
                                $point += 3;
                            else if ($total < 280)
                                $point += 4;
                            else
                                $point += 5;
                        }
                        if ($age >= 60 && $age <= 69){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 1;
                            else if ($total < 240)
                                $point += 1;
                            else if ($total < 280)
                                $point += 2;
                            else
                                $point += 3;
                        }
                        if ($age >= 70 && $age <= 79){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 0;
                            else if ($total < 240)
                                $point += 0;
                            else if ($total < 280)
                                $point += 1;
                            else
                                $point += 1;
                        }
                        if ($smoker == 1){
                            if ($age >= 20 && $age <= 39){
                                $point += 8;
                            }
                            if ($age >= 40 && $age <= 49){
                                $point += 5;
                            }
                            if ($age >= 50 && $age <= 59){
                                $point += 3;
                            }
                            if ($age >= 60 && $age <= 69){
                                $point += 1;
                            }
                            if ($age >= 70 && $age <= 79){
                                $point += 1;
                            }
                        }
                        if ($HDL >= 60)
                            $point += -1;
                        else if ($HDL >= 50)
                            $point += 0;
                        else if($HDL >= 40)
                            $point += 1;
                        else
                            $point += 2;
                        if ($SBPon < 120)
                            $point += 0;
                        else if ($SBPon < 130)
                            $point += 0;
                        else if ($SBPon < 140)
                            $point += 1;
                        else if($SBPon < 160)
                            $point += 1;
                        else
                            $point += 2;
                        if ($SBP < 120)
                            $point += 0;
                        else if($SBP < 130)
                            $point += 1;
                        else if ($SBP < 140)
                            $point += 2;
                        else if ($SBP < 160)
                            $point += 2;
                        else
                            $point += 3;

                        if ($point == 0)
                            $risk = "<1%";
                        else if ($point <= 4)
                            $risk = "1%";
                        else if($point <= 6)
                            $risk = "2%";
                        else if ($point == 7)
                            $risk = "3%";
                        else if ($point == 8)
                            $risk = "4%";
                        else if ($point == 9)
                            $risk = "5%";
                        else if ($point == 10)
                            $risk = "6%";
                        else if ($point == 11)
                            $risk = "8%";
                        else if ($point == 12)
                            $risk = "10%";
                        else if ($point == 13)
                            $risk = "12%";
                        else if ($point == 14)
                            $risk = "16%";
                        else if ($point == 15)
                            $risk = "20%";
                        else if ($point == 16)
                            $risk = "25%";
                        else
                            $risk = ">30%";

                        echo $risk;
                    }else{
                        $point = 0;
                        if ($age > 20 && $age <= 34)
                            $point += -7;
                        else if($age <= 39)
                            $point += -3;
                        else if($age <= 44)
                            $point += 0;
                        else if ($age <= 49)
                            $point += 3;
                        else if ($age <= 54)
                            $point += 6;
                        else if ($age <= 59)
                            $point += 8;
                        else if($age <= 64)
                            $point += 10;
                        else if($age <= 69)
                            $point += 12;
                        else if ($age <= 74)
                            $point += 14;
                        else if ($age <= 79)
                            $point += 16;
                        if ($age >= 20 && $age <= 39){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 4;
                            else if ($total < 240)
                                $point += 8;
                            else if ($total < 280)
                                $point += 11;
                            else
                                $point += 13;
                        }
                        if ($age >= 40 && $age <= 49){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 3;
                            else if ($total < 240)
                                $point += 6;
                            else if ($total < 280)
                                $point += 8;
                            else
                                $point += 10;
                        }
                        if ($age >= 50 && $age <= 59){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 2;
                            else if ($total < 240)
                                $point += 4;
                            else if ($total < 280)
                                $point += 5;
                            else
                                $point += 7;
                        }
                        if ($age >= 60 && $age <= 69){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 1;
                            else if ($total < 240)
                                $point += 2;
                            else if ($total < 280)
                                $point += 3;
                            else
                                $point += 4;
                        }
                        if ($age >= 70 && $age <= 79){
                            if ($total < 160)
                                $point += 0;
                            else if ($total < 200)
                                $point += 1;
                            else if ($total < 240)
                                $point += 1;
                            else if ($total < 280)
                                $point += 2;
                            else
                                $point += 2;
                        }
                        if ($smoker == 160){
                            if ($age >= 20 && $age <= 39){
                                $point += 9;
                            }
                            if ($age >= 40 && $age <= 49){
                                $point += 7;
                            }
                            if ($age >= 50 && $age <= 59){
                                $point += 4;
                            }
                            if ($age >= 60 && $age <= 69){
                                $point += 2;
                            }
                            if ($age >= 70 && $age <= 79){
                                $point += 1;
                            }
                        }
                        if ($HDL >= 60)
                            $point += -1;
                        else if ($HDL >= 50)
                            $point += 0;
                        else if($HDL >= 40)
                            $point += 1;
                        else
                            $point += 2;
                        if ($SBPon < 120)
                            $point += 0;
                        else if ($SBPon < 130)
                            $point += 1;
                        else if ($SBPon < 140)
                            $point += 2;
                        else if($SBPon < 160)
                            $point += 5;
                        else
                            $point += 6;
                        if ($SBP < 120)
                            $point += 0;
                        else if($SBP < 130)
                            $point += 3;
                        else if ($SBP < 140)
                            $point += 4;
                        else if ($SBP < 160)
                            $point += 5;
                        else
                            $point += 6;

                        if ($point < 9)
                            $risk = "<1%";
                        else if ($point <= 12)
                            $risk = "1%";
                        else if($point <= 14)
                            $risk = "2%";
                        else if ($point == 15)
                            $risk = "3%";
                        else if ($point == 16)
                            $risk = "4%";
                        else if ($point == 17)
                            $risk = "5%";
                        else if ($point == 18)
                            $risk = "6%";
                        else if ($point == 19)
                            $risk = "8%";
                        else if ($point == 20)
                            $risk = "11%";
                        else if ($point == 21)
                            $risk = "14%";
                        else if ($point == 22)
                            $risk = "17%";
                        else if ($point == 23)
                            $risk = "22%";
                        else if ($point == 24)
                            $risk = "27%";
                        else
                            $risk = ">30%";

                        echo $risk;
                    }
                }

                risk2();
                ?>
            </h1>
            <p>Framingham Risk Score</p>
        </div>
    </div>

    <!-- In text description
    add some advise depends on risk and factor
    -->
    <div class="row">

        <div class="col-md-3 col-md-offset-1 alert alert-success">
            <p>about, factor <strong>what to do</strong> effact on</p>
        </div>

        <div class="col-md-3 col-md-offset-1 alert alert-success">
            <p>good news</p>
        </div>

        <div class="col-md-3 col-md-offset-1 alert alert-success">
            <p>Based on your age, your blood pressure is <strong>well-controlled</strong>.</p>
        </div>

    </div>

    <table class="table" style="table-layout: fixed">
        <tr>
            <th>Demography</th>
            <th>Cholesterol</th>
            <th>Blood pressure</th>
            <th>Risk factors</th>
        </tr>

        <tr>
            <td>Age: <?php
                echo $_POST["age"];
                ?></td>
            <td>Total: <?php
                echo $_POST["total-chol"];
                ?></td>
            <td>Systolic if not treat:  <?php
                echo $_POST["sbp"];
                ?></td>
            <td>Diabetes: <?php
                $diabetes = $_POST["diabetes"];
                if ($diabetes == 1) {echo "yes";}
                else{echo "no";}
                ?></td>
        </tr>

        <tr>
            <td>Gender:   <?php
                $gender = $_POST["gender"];
                if ($gender == 1) {echo "male";}
                else{echo "female";}
                ?></td>
            <td>HDL: <?php
                echo $_POST["hdl"];
                ?></td>
            <td>Systolic if treat: <?php
                echo $_POST["dbp"];
                ?></td>
            <td>Smoking:   <?php
                $smoker = $_POST["smoker"];
                if ($smoker == 1) {echo "yes";}
                else{echo "no";}
                ?></td>
        </tr>
    </table>

</div>
</body>
</html>
