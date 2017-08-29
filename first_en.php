<!DOCTYPE html>
<html lang="en">
<head>
    <title>Heart Risk Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<ul class="top">
    <li><a href="#" class="about">get more information about Heart Risk Calculator</a></li>
    <li class="hover"><a href="first_en.php"> english</a></li>
    <li class="hover"><a href="first_fa.php">persian</a></li>
</ul>
<div id="main" class="container">
    <div class="jumbotron text-center">
        <h1>Heart Risk Calculator</h1>
    </div>
    <div class="row">
        <script>
            function check() {
                var age = document.getElementById("age").value;
                if (age < 40 || age > 79){
                    alert("age is between 40 and 79");
                    return false;
                }
                var total = document.getElementById("total-chol").value;
                if (total < 130 || total > 320){
                    alert("total cholesterol is between 130 and 320");
                    return false;
                }
                var hdl = document.getElementById("hdl").value;
                if (hdl < 20 || hdl > 100){
                    alert("HDL cholestrol is between 20 and 100");
                    return false;
                }
                var sbp = document.getElementById("sbp").value;
                if (sbp < 90 || sbp > 200){
                    alert("Systolic blood pressure if not treat is between 90 and 200");
                    return false;
                }
                var dbp = document.getElementById("dbp").value;
                if (dbp < 30 || dbp > 140){
                    alert("Systolic blood pressure if treat is between 30 and 140");
                    return false;
                }
                return true;
            }
        </script>
        <form action="second_page.php" method="post" onsubmit="return check()">
            <table class="col-md-8 well table">
                <!-- Listbox city-->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="city">City</label>
                    </th>
                    <td>
                        <select class="col-md-4" id="city" name="city" >
                            <option value="tehran">Tehran</option>
                            <option value="isfahan">Isfahan</option>
                            <option value="west_azarbayejan">West Azarbayejan</option>
                            <option value="east_azarbayejan">East Azarbayejan</option>
                            <option value="ardabial">Ardabial</option>
                            <option value="kurdistan">Kurdistan</option>
                            <option value="zanjan">Zanjan</option>
                            <option value="gilan">Gilan</option>
                            <option value="mazandaran">Mazandaran</option>
                            <option value="ghazvin">Ghazvin</option>
                            <option value="hamedan">Hamedan</option>
                            <option value="kermanshah">Kermanshah</option>
                            <option value="markazi">Markazi</option>
                            <option value="khorramabad">Khoramabad</option>
                            <option value="ilam">Ilam</option>
                            <option value="qom">Qom</option>
                            <option value="golestan">Golestan</option>
                            <option value="semnan">Semnan</option>
                            <option value="north_khorasan">Notrh Khorasan</option>
                            <option value="shahrekord">Sharhekord</option>
                            <option value="khuzestan">Khuzestan</option>
                            <option value="khorasan_razavi">Khorasan Razavi</option>
                            <option value="yazd">Yazd</option>
                            <option value="kugluyeh_boyirahmad">Kugluyeh and Boyirahmad</option>
                            <option value="bushehr">Bushehr</option>
                            <option value="fars">Fars</option>
                            <option value="south_khorasan">South Khorasan</option>
                            <option value="kerman">Kerman</option>
                            <option value="bandar_abas">Bandar Abas</option>
                            <option value="sistan_blochestan">Sistan and Blochestan</option>
                        </select>
                    </td>
                </tr>
                <!-- Multiple Radios Area -->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="area">Area</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="area-0">
                                    <input type="radio" name="area" id="area-0" value="1" checked="checked">
                                    Urban
                                </label>
                            </div>
                            <div class="radio">
                                <label for="area-1">
                                    <input type="radio" name="area" id="area-1" value="0">
                                    Rural
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Text input Age-->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="age">Age (years)</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <input id="age" name="age" type="number" placeholder="40-79" class="form-control input-md" data-range="[40, 79]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Multiple Radios Gender -->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="gender">Gender</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="gender-0">
                                    <input type="radio" name="gender" id="gender-0" value="1" checked="checked">
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <label for="gender-1">
                                    <input type="radio" name="gender" id="gender-1" value="0">
                                    Female
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Text input cholesterol-->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="total-chol">Total cholesterol (mg/dL)</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <input id="total-chol" name="total-chol" type="number" placeholder="130-320" class="form-control input-md" data-range="[130, 320]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Text input HDL-->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="hdl">HDL cholesterol (mg/dL)</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <input id="hdl" name="hdl" type="number" placeholder="20-100" class="form-control input-md" data-range="[20, 100]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Text input SBP not treat-->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="sbp">Systolic blood pressure if not treat (mmHg)</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <input id="sbp" name="sbp" type="number" placeholder="90-200" class="form-control input-md" data-range="[90, 200]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Text input SBP treat-->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="sbp">Systolic blood pressure if treat (mmHg)</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <input id="dbp" name="dbp" type="number" placeholder="30-140" class="form-control input-md" data-range="[30, 140]" required="required">
                        </div>
                    </td>
                </tr>
                <!-- Multiple Radios Diabetes-->
                <tr>
                    <th>
                        <label class="col-md-4 control-label" for="diabetes">Diabetes</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="diabetes-0">
                                    <input type="radio" name="diabetes" id="diabetes-0" value="0" checked="checked">
                                    No
                                </label>
                            </div>
                            <div class="radio">
                                <label for="diabetes-1">
                                    <input type="radio" name="diabetes" id="diabetes-1" value="1">
                                    Yes
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Multiple Radios -->
                <tr>
                    <th>
                        <label class="col-md-6 control-label" for="smoker">Smoker</label>
                    </th>
                    <td>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="smoker-0">
                                    <input type="radio" name="smoker" id="smoker-0" value="0" checked="checked">
                                    No
                                </label>
                            </div>
                            <div class="radio">
                                <label for="smoker-1">
                                    <input type="radio" name="smoker" id="smoker-1" value="1">
                                    Yes
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- button -->
                <tr>
                    <th colspan="2">
                        <div class="row col-md-offset-4 col-md-4">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Calculate</button>
                        </div>
                    </th>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>