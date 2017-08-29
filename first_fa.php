<!DOCTYPE html>
<html lang="fa">
<head>
    <title>Heart Risk Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fontweb.ir/css/B Nazanin={fontweb.ir}.css"/>
    <style>
        .font{ font-family:B Nazanin,'B Nazanin',tahoma; font-size:17px;}
    </style>
</head>
<body>


<ul class="top font">
    <li><a href="#" class="about">درباره محاسبه ریسک حملات قلبی بیشتر بدانیم</a></li>
    <li class="hover"><a href="first_fa.php">فارسی</a></li>
    <li class="hover"><a href="first_en.php">انگلیسی</a></li>
</ul>
<div id="main" class="container font">
    <div class="jumbotron text-center">
        <h1>محاسبه ریسک حملات قلبی</h1>
    </div>
    <div class="row">
        <script>
            function check() {
                var age = document.getElementById("age").value;
                if (age < 40 || age > 79){
                    alert("سن در بازه ی 40 تا 79 می باشد.");
                    return false;
                }
                var total = document.getElementById("total-chol").value;
                if (total < 130 || total > 320){
                    alert("چربی خون در بازه ی 130 تا 320 می باشد.");
                    return false;
                }
                var hdl = document.getElementById("hdl").value;
                if (hdl < 20 || hdl > 100){
                    alert("چربی خوب در بازه ی 20 تا 100 می باشد.");
                    return false;
                }
                var sbp = document.getElementById("sbp").value;
                if (sbp < 90 || sbp > 200){
                    alert("فشار خون حداکثر در بازه ی 90 تا 200 می باشد.");
                    return false;
                }
                var dbp = document.getElementById("dbp").value;
                if (dbp < 30 || dbp > 140){
                    alert("فشار خون حداقل در بازهی 30 تا 140 می باشد.");
                    return false;
                }
                return true;
            }
        </script>
        <table class="col-md-12 well table" align="right" dir="rtl" style="direction:rtl;text-align:right;">
            <form action="second_page_fa.php" method="post" onsubmit="return check()">
                <!-- Listbox city-->
                <tr dir="rtl">
                    <td>
                        <b><label class="col-md-6 control-label" for="city">استان</label></b>
                    </td>
                    <td>
                        <select class="col-md-4" dir="rtl" id="city" name="city">
                            <option value="tehran">تهران</option>
                            <option value="isfahan">اصفهان</option>
                            <option value="west_azarbayejan">آذربایجان غربی</option>
                            <option value="east_azarbayejan">آذربایجان شرقی</option>
                            <option value="ardabial">اردبیل</option>
                            <option value="kurdistan">کردستان</option>
                            <option value="zanjan">زنجان</option>
                            <option value="gilan">گیلان</option>
                            <option value="mazandaran">مازندران</option>
                            <option value="ghazvin">قزوین</option>
                            <option value="hamedan">همدان</option>
                            <option value="kermanshah">کرمانشاه</option>
                            <option value="markazi">مرکزی</option>
                            <option value="khorramabad">خرم آباد</option>
                            <option value="ilam">ایلام</option>
                            <option value="qom">قم</option>
                            <option value="golestan">گلستان</option>
                            <option value="semnan">سمنان</option>
                            <option value="north_khorasan">خراسان شمالی</option>
                            <option value="shahrekord">شهرکرد</option>
                            <option value="khuzestan">خوزستان</option>
                            <option value="khorasan_razavi">خراسان رضوی</option>
                            <option value="yazd">یزد</option>
                            <option value="kugluyeh_boyirahmad">گهگیوله و بویراحمد</option>
                            <option value="bushehr">بوشهر</option>
                            <option value="fars">فارس</option>
                            <option value="south_khorasan">خراسان جنوبی</option>
                            <option value="kerman">کرمان</option>
                            <option value="bandar_abas">بندعباس</option>
                            <option value="sistan_blochestan">سیستان و بلوچستان</option>
                        </select>
                    </td>
                </tr>
                <!-- Multiple Radios Area -->
                <tr dir="rtl">
                    <td>
                        <b><label class="col-md-6 control-label" for="area">منطقه</label></b>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="area-0">
                                    <input type="radio" name="area" id="area-0" value="1" checked="checked">&ensp;&ensp;&ensp;شهری
                                </label>
                            </div>
                            <div class="radio">
                                <label for="area-1">
                                    <input type="radio" name="area" id="area-1" value="0">&ensp;&ensp;&ensp;روستایی
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Text input Age-->
                <tr dir="rtl">
                    <td>
                        <b><label class="col-md-6 control-label" for="age">سن (سال)</label></b>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <input id="age" name="age" type="number" placeholder="40-79" class="form-control input-md" data-range="[40, 79]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Multiple Radios Gender -->
                <tr dir="rtl">
                    <td>
                        <b><label class="col-md-6 control-label" for="gender">جنسیت</label></b>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="gender-0">
                                    <input type="radio" name="gender" id="gender-0" value="1" checked="checked">
                                    &ensp;&ensp;&ensp;مذکر
                                </label>
                            </div>
                            <div class="radio">
                                <label for="gender-1">
                                    <input type="radio" name="gender" id="gender-1" value="0">
                                    &ensp;&ensp;&ensp;مونث
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Text input cholesterol-->
                <tr dir="rtl">
                    <td>
                        <b><label class="col-md-6 control-label" for="total-chol">چربی خون (mg/dL)</label></b>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <input id="total-chol" name="total-chol" type="number" placeholder="130-320" class="form-control input-md" data-range="[130, 320]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Text input HDL-->
                <tr dir="rtl">
                    <td>
                        <b><label class="col-md-6 control-label" for="hdl">چربی خوب (mg/dL)</label></b>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <input id="hdl" name="hdl" type="number" placeholder="20-100" class="form-control input-md" data-range="[20, 100]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Text input SBP not treat-->
                <tr dir="rtl">
                    <td>
                        <b><label class="col-md-6 control-label" for="sbp">فشار خون حداکثر (mmHg)</label></b>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <input id="sbp" name="sbp" type="number" placeholder="90-200" class="form-control input-md" data-range="[90, 200]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Text input SBP treat-->
                <tr dir="rtl">
                    <td>
                        <b><label class="col-md-6 control-label" for="sbp">فشار خون حداقل (mmHg)</label></b>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <input id="dbp" name="dbp" type="number" placeholder="30-140" class="form-control input-md" data-range="[30, 140]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Multiple Radios Diabetes-->
                <tr dir="rtl">
                    <td>
                        <label class="col-md-6 control-label" for="diabetes">دیابت</label>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="diabetes-0">
                                    <input type="radio" name="diabetes" id="diabetes-0" value="0" checked="checked">
                                    &ensp;&ensp;&ensp;خیر
                                </label>
                            </div>
                            <div class="radio">
                                <label for="diabetes-1">
                                    <input type="radio" name="diabetes" id="diabetes-1" value="1">
                                    &ensp;&ensp;&ensp;بله
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Multiple Radios -->
                <tr dir="rtl">
                    <td>
                        <label class="col-md-6 control-label" for="smoker">سیگاری</label>
                    </td>
                    <td>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="smoker-0">
                                    <input type="radio" name="smoker" id="smoker-0" value="0" checked="checked">
                                    &ensp;&ensp;&ensp;خیر
                                </label>
                            </div>
                            <div class="radio">
                                <label for="smoker-1">
                                    <input type="radio" name="smoker" id="smoker-1" value="1">
                                    &ensp;&ensp;&ensp;بله
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- button -->
                <tr>
                    <td colspan="2">
                        <div class="row col-md-offset-4 col-md-4">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">محاسبه</button>
                        </div>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>

<?php


echo "سلام";
?>

</body>
</html>