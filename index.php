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
</head>
<body>
<nav class="navbar bg-dark" data-bs-theme="dark" navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-4">   </div>
            <div class="col-4 form">
                <h2> แบบฟอร์มวันที่และคำนวณเกรด</h2>
                    <form class = "form" action="showData.php" method="POST"> <!--ส่งค่า--->
                        <div class="form-outline">
                            <label  label class="font-xsmall"for="formGroupExampleInput2">ชื่อ-สกุล</label>
                            <input style type="text" class="form-control" id="formGroupExampleInput2" name="name">
                        </div>
                        <br>
                            <label for="day">กรุณาใส่วันที่ (11/3/2565)</label>
                            <input type="text" name="day" class="form-control">
                        <br>
                        <div class="form-group" >
                            <label class=""for="formGroupExampleInput2">คะแนน (0-100 คะแนน)</label>
                            <input style type="text" class="form-control" id="formGroupExampleInput2" name="num" size="20" maxlength="100" >
                        </div>
                        <center>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary btn-sm">คำนวณ</button>
                        </center>
                    </form>
            </div>
            <div class="col-4">   </div>
        </div>
    </div>
</body>
</html>
