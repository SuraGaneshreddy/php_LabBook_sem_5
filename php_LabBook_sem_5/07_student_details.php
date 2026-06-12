<?php
function studentDetails($name, $enrollment, $semester) {
    echo "Student Name: $name<br>";
    echo "Enrollment Number: $enrollment<br>";
    echo "Semester: $semester<br>";
}

studentDetails("John", "BCA12345", 5);
?>