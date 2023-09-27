<?php
function averageGrades($studentGrades) {

    $averageGrades = array();

    foreach ($studentGrades as $student => $grades) {
        $average = array_sum($grades) / count($grades);
        $averageGrades[$student] = $average;
    }

    foreach ($averageGrades as $student => $average) {
        echo "Average grade of {$student}: $average <br>";
    }
}

$studentGrades = array(
    'Student1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student3' => ['Math' => 75, 'English' => 80, 'Science' => 85]
);

averageGrades($studentGrades);
?>
