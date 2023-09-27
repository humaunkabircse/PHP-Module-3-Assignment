<?php
// Task 4: Multidimensional Array
// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

$studentGrades = [
    [ "Math" => 95, "English" => 90, "Science" => 80 ],
    [ "Math" => 63, "English" => 67, "Science" => 80 ],
    [ "Math" => 98, "English" => 96, "Science" => 80 ]  
];

function avarageGrade($studentGrades){
    foreach($studentGrades as $student){
        $total = 0;
        foreach($student as $grade){
            $total += $grade;
        }
        $average = $total / count($student);

        if($average >= 90){
            echo "Grade A" . PHP_EOL;
        }
        elseif($average >= 80){
            echo "Grade B" . PHP_EOL;
        }
        elseif($average >= 70){
            echo "Grade C" . PHP_EOL;
        }
        elseif($average >= 60){
            echo "Grade D" . PHP_EOL;
        }
        else{
            echo "Grade F" . PHP_EOL;
        }


    }
}
avarageGrade($studentGrades);