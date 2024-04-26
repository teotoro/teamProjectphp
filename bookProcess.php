<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $patientName = isset($_POST['inputPatientName']) ? htmlspecialchars($_POST['inputPatientName']) : '';
    $doctorName = isset($_POST['inputDoctorName']) ? htmlspecialchars($_POST['inputDoctorName']) : '';
    $departmentName = isset($_POST['inputDepartmentName']) ? htmlspecialchars($_POST['inputDepartmentName']) : '';
    $phoneNumber = isset($_POST['inputPhone']) ? htmlspecialchars($_POST['inputPhone']) : '';
    $symptoms = isset($_POST['inputSymptoms']) ? htmlspecialchars($_POST['inputSymptoms']) : '';
    $date = isset($_POST['inputDate']) ? htmlspecialchars($_POST['inputDate']) : '';

    // Redirect to new page with filled information
    header("Location: bookDetails.php?patientName=$patientName&doctorName=$doctorName&departmentName=$departmentName&phoneNumber=$phoneNumber&symptoms=$symptoms&date=$date");
    exit();
} else {
    echo "Form not submitted.";
}
?>