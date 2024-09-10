<?php
$team1 = "France";
$team2 = "Germany";
$score1 = 2;
$score2 = 1;

if ($score1 > $score2) {
    echo "ทีมที่ชนะคือ: " . $team1;
} elseif ($score2 > $score1) {
    echo "ทีมที่ชนะคือ: " . $team2;
} else {
    echo "ผลการแข่งขันเสมอกัน";
}
?>

<?php
$month = "March";


$thirtyDays = array("April", "June", "September", "November");
$thirtyOneDays = array("January", "March", "May", "July", "August", "October", "December");

if (in_array($month, $thirtyDays)) {
    echo $month . " มี 30 วัน";
} elseif (in_array($month, $thirtyOneDays)) {
    echo $month . " มี 31 วัน";
} elseif ($month === "February") {
    echo $month . " มี 28 หรือ 29 วัน (ขึ้นอยู่กับปีอธิกสุรทิน)";
} else {
    echo "เดือนที่ระบุไม่ถูกต้อง";
}
?>
