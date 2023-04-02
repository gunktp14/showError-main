<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/Style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
try {
    echo "";
} catch (DivisionByZeroError $e) {
    echo "Oops I divided by zero!";
} catch (Exception $e) { //Throwable
    echo $e->getMessage();
} finally {

    ?>
        <script>
          Swal.fire({
            icon: 'success',
            title: 'SUCSSED',
            width: 600,
            padding: '3em',
            color: '#716add',
            background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
            backdrop: `
              rgba(0,0,123,0.4)
              url("https://sweetalert2.github.io/images/nyan-cat.gif")
              left top
              no-repeat
            `
        })
        </script>

    <?php
}
$name = $_POST['name'];
// echo $name;
$DR = array(
    "Sunday" => "อาทิตย์",
    "Monday" => "จันทร์",
    "Tuesday" => "อังคาร",
    "Wednesday" => "พุธ",
    "Thursday" => "พฤหัสบดี",
    "Friday" => "ศุกร์",
    "Saturday" => "เสาร์",

);
$day = $_POST['day'];
// echo $DR[date('l', strtotime($day))];
// echo ("ที่" . " " . $day);
$num = $_POST['num'];
?>
<center>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<div class="card" style="width: 25rem; high: 25rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo ("ชื่อ : ".$name); ?></h5>
    <h5 class="card-title"><?php
    echo ("วัน" . $DR[date('l', strtotime($day))] ."ที่" . " " . $day);
    ?></h5>
    <h5 class="card-title"><?php
    if (($num > 100) || ($num < 0)) {
        print "เกรดที่ได้  : ไม่สามารถคิดเกรดได้ คะแนนเกิน" . '<br>';
    } else if (($num >= 79.5) && ($num <= 100)) {
        print "เกรดที่ได้  :  A  <font color=\"Yellow\"> ผ่าน" . '';
    } else if (($num >= 74.5) && ($num <= 79.4)) {
        print "เกรดที่ได้  :  B+  <font color=\"Yellow\"> ผ่าน" . '';
    } else if (($num >= 69.5) && ($num <= 74.4)) {
        print "เกรดที่ได้  :  B  <font color=\"Yellow\"> ผ่าน" . '';
    } else if (($num >= 64.5) && ($num <= 69.4)) {
        print "เกรดที่ได้  :  C+  <font color=\"Yellow\"> ผ่าน" . '';
    } else if (($num >= 59.5) && ($num <= 64.4)) {
        print "เกรดที่ได้  :  C  <font color=\"Yellow\"> ผ่าน" . '';
    } else if (($num >= 54.5) && ($num = 59.4)) {
        print "เกรดที่ได้  :  D+  <font color=\"Yellow\"> ผ่าน" . '';
    } else if (($num >= 49.5) && ($num <= 54.4)) {
        print "เกรดที่ได้  :  D  <font color=\"Yellow\"> ผ่าน" . '';
    } else if ($num <= 49.4) {
        print "เกรดที่ได้  :  E หรือ F   <font color=\"red\"> ไม่ผ่านจร้าา" . '';
    }
    ?>
    </h5>
  </div>
</div>
</div>
</center>
</body>
</html>