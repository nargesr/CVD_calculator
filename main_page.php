<!DOCTYPE html>
<html lang="en">
<head>
  <title>Heart Risk Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div id="main" class="container">
    <div class="jumbotron text-center">
        <h1>Heart Risk Calculator</h1>
    </div>
    <div class="row">
        <div class="col-md-8 well">
            <form id="calc-form" class="form-horizontal" action="second_page.php" method="get" data-validate="parsley">
                <fieldset>
                    <!-- Listbox city-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="city">City</label>
                        <div class="col-md-4">
                            <select id="city" name="city">
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
                        </div>
                    </div>
                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="area">Area</label>
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
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="age">Age (years)</label>
                        <div class="col-md-4">
                            <input id="age" name="age" type="number" placeholder="40-79" class="form-control input-md" data-range="[40, 79]" required="required">
                        </div>
                    </div>
                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="gender">Gender</label>
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
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="total-chol">Total cholesterol (mg/dL)</label>
                        <div class="col-md-4">
                            <input id="total-chol" name="total-chol" type="number" placeholder="130-320" class="form-control input-md" data-range="[130, 320]" required="required">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="hdl">HDL cholesterol (mg/dL)</label>
                        <div class="col-md-4">
                            <input id="hdl" name="hdl" type="number" placeholder="20-100" class="form-control input-md" data-range="[20, 100]" required="required">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sbp">Systolic blood pressure if not treat (mmHg)</label>
                        <div class="col-md-4">
                            <input id="sbp" name="sbp" type="number" placeholder="90-200" class="form-control input-md" data-range="[90, 200]" required="required">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sbp">Systolic blood pressure if treat (mmHg)</label>
                        <div class="col-md-4">
                            <input id="dbp" name="dbp" type="number" placeholder="30-140" class="form-control input-md" data-range="[30, 140]" required="required">
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="diabetes">Diabetes</label>
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
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="smoker">Smoker</label>
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
                    </div>

                    <div class="row col-md-offset-4 col-md-4">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Calculate</button>
                        <!--<button type="submit" class="btn btn-block btn-lg btn-primary">Calculate</button>-->
                    </div>
                </fieldset>

            </form>
        </div>
        <div class="col-md-4">
            <p class="lead">Calculate your 10-year risk of heart disease or stroke using the ASCVD algorithm published in <a href="http://circ.ahajournals.org/content/early/2013/11/11/01.cir.0000437741.48606.98">2013 ACC/AHA Guideline on the Assessment of Cardiovascular Risk</a>. </p>
            <p>This calculator assumes that you have not had a prior heart attack or stroke. If you have, generally it is recommended that you discuss with your doctor about starting aspirin and a statin. Furthermore, if you have an LDL-cholesteral (bad cholesterol) greater than 190, it is also generally recommended that you discuss with your doctor about starting aspirin and a statin.</p>
            <p>Unfortunately, there is insufficient data to reliably predict risk for those less than 40 years of age or greater than 79 years of age and for those with total cholesterol greater than 320.</p>
            <p>UPDATE (6/30/16) -- The calculator has been vetted against the <a href="http://www.uspreventiveservicestaskforce.org/Page/Document/UpdateSummaryFinal/aspirin-to-prevent-cardiovascular-disease-and-cancer">final guidelines from the USPSTF</a> for initiating aspirin therapy.</p>
            <p>UPDATE (9/18/15) -- The calculator now also incorporates <a href="http://www.uspreventiveservicestaskforce.org/Page/Document/draft-recommendation-statement/aspirin-to-prevent-cardiovascular-disease-and-cancer">draft guidelines from the USPSTF</a> for initiating aspirin therapy.</p>
            <p>UPDATE (5/26/14) -- The calculator now also incorporates <a href="http://jama.jamanetwork.com/article.aspx?articleid=1791497">guidelines from JNC-8</a> for blood pressure management.</p>
            <p>An <a href="http://static.heart.org/ahamah/risk/Omnibus_Risk_Estimator.xls">excel spreadsheet</a> is also available for download.</p>
        </div>
    </div>
</div>
</body>
</html>
