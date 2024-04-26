<div class="col">
    <form method="post" action="bookProcess.php">
        <h4>BOOK <span>APPOINTMENT</span></h4>
        <div class="form-row">
            <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name</label>
                <input type="text" name="inputPatientName" class="form-control" id="inputPatientName" placeholder="">
            </div>
            <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="inputDoctorName" class="form-control wide" id="inputDoctorName">
                    <option value="" disabled selected>Select Doctor</option>
                    <?php 
                        include "bookArrays.php";
                        for ($i = 0; $i < count($doctorNames); $i++) {
                            echo "<option value=\"$doctorNames[$i]\">$doctorNames[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="inputDepartmentName" class="form-control wide" id="inputDepartmentName">
                    <option value="" disabled selected>Select Department</option>
                    <?php
                        include "bookArrays.php";
                        foreach ($departments as $department) {
                            echo "<option value=\"$department\">$department</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX" name="inputPhone" required>
            </div>
            <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" class="form-control" id="inputSymptoms" placeholder="" name="inputSymptoms" required>
            </div>
            <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date</label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                    <input type="text" class="form-control" name="inputDate" readonly value="Pick a Date" required>
                    <span class="input-group-addon date_icon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <button type="submit" class="btn">Submit Now</button>
        </div>
    </form>
</div>

