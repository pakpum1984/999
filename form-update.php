<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('php/connect.php');
    if(!isset($_GET['id'])){
        header("location: ./");
        exit();
    }
    $sql = "SELECT * FROM products WHERE id = '".mysqli_real_escape_string($conn, $_GET['id'])."' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQLi Procedural style CRUD </title>
    <!-- favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <!-- Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #F5F8FF;
        }
    </style>
</head>
<body>
<div class="flex-container">
    <div class="container">
        <div class="shadow rounded p-5 bg-body h-100">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5"> PHP MySQLi Procedural style CRUD (From Submit) </h1>
                    <h3>แก้ไขรายการสินค้า</h3>
                    <form class="row gy-4" action="php/update.php" method="POST">
                        <div class="col-md-12">
                            <label for="name" class="form-label">ชื่อสินค้า</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อสินค้า" value="<?php echo $row['name'] ?>"required>
                        </div>
                        <div class="col-md-12">
                            <label for="detail" class="form-label">รายละเอียด</label>
                            <textarea type="text" class="form-control" id="detail" name="detail" rows="5" placeholder="รายละเอียด" required><?php echo $row['detail'] ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="form-label">ราคา</label>
                            <input type="number" class="form-control" id="price" name="price" min="0" max="999999" placeholder="ราคา" value="<?php echo $row['price'] ?>"required>
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="form-label">จำนวน</label>
                            <input type="number" class="form-control" id="amount" name="amount" min="0" max="999999" placeholder="จำนวน" value="<?php echo $row['amount'] ?>"required>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                        </div>
                    </form>
                    <a href="./">ย้อนกลับ</a>
                </div>  
            </div>
        </div>
        <p class="fw-bolder text-secondary text-center">
            ผู้เขียน: Yothin Sapsamran <span class="text-danger fs-3" style="vertical-align: sub;">♥️</span> 
            <a class="border-bottom border-2 border-primary text-decoration-none" href="https://appzstory.dev"> Jame AppzStory Studio</a>
        </p>
    </div>
</div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>