<?php

// Data from the image
$data = [
    ['No Urut' => 1, 'Poin' => 75, 'Siswa' => 'Adi'],
    ['No Urut' => 2, 'Poin' => 80, 'Siswa' => 'Joni'],
    ['No Urut' => 3, 'Poin' => 65, 'Siswa' => 'Jihan'],
    ['No Urut' => 4, 'Poin' => 70, 'Siswa' => 'Aya'],
    ['No Urut' => 5, 'Poin' => 85, 'Siswa' => 'Ita'],
    ['No Urut' => 6, 'Poin' => 90, 'Siswa' => 'Budi'],
    ['No Urut' => 7, 'Poin' => 95, 'Siswa' => 'Tini'],
    ['No Urut' => 8, 'Poin' => 65, 'Siswa' => 'Sari'],
];

    // Display the name and score of the student with the given number
    function displayStudentByNumber($number, $data) {
        foreach ($data as $student) {
            if ($student['No Urut'] == $number) {
                echo "<p>Nama siswa dengan nomor urut $number adalah <strong>" . $student['Siswa'] . "</strong> dengan poin <strong>" . $student['Poin'] . "</strong></p>";
                    break;
            }
         }
    }

    // Display the names of all students with the given score
    function displayStudentsByScore($score, $data) {
         $students = [];
        foreach ($data as $student) {
            if ($student['Poin'] == $score) {
                    $students[] = $student['Siswa'];
            }
        }
        if (count($students) > 0) {
            echo "<p>Nama siswa yang memiliki poin $score adalah <strong>" . implode(', ', $students) . "</strong></p>";
        } else {
                echo "<p>Tidak ada siswa yang memiliki poin $score</p>";
        }
    }

    // Display the data
    displayStudentByNumber(5, $data);
    displayStudentsByScore(90, $data);
    displayStudentsByScore(100, $data);

    ?>