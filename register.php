<?php include_once ("includes/header.php");?>
<?php include_once ("includes/navbar.php");?>
<?php include_once ("includes/script.php");?>

<div class="container my-3">
    <div class="card shadow">
        <div class="card-header bg-info">
        <h3>ระบบลงทะเบียนสมัครสมาชิก</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
        <div class="row d-flex justify-control-center">
                <div class="col-md6">
                    <div class="mb-3">
                        <label for="">ลงทะเบียนหน้าที่ ระบบสั่งจองอาหารออนไลน์</label>
                        <select name="role_as" class="form-control">
                            <option value="กรุณาเลือกหน้าที่"></option>
                            <option value="1">1.ผู้ดูแลร้านอาหาร</option> 1.manager
                             <option value="1">2.สมาชิกหรือลูกค้า</option>2.customer
                              <option value="1">3.ผู้ส่งอาหาร</option> 3.rider
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="fs-6">ชื่อ-สกุล</label>
                        <input type="text" name="name" class="form-control" require placeholder="กรุณากรอกชื่อ-สกุล">
                    </div>

                    <div class="mb-3">
                        <label class="fs-6">อีเมลล์</label>
                        <input type="text" name="email" class="form-control" require placeholder="กรุณาอีเมลล์">
                    </div>

                    <div class="mb-3">
                        <label class="fs-6">รหัสผ่าน</label>
                        <input type="text" name="password" class="form-control" require placeholder="กรุณากรอกรหัสผ่าน">
                    </div>

                    <div class="col-md-6">
                       <div class="mb-3">
                        <label class="fs-6">ยืนยันรหัสผ่าน</label>
                        <input type="text" name="confirm_password" class="form-control" require placeholder="กรุณายืนยันรหัสผ่าน">
                    </div>

                    <div class="mb-3">
                        <label class="fs-6">เบอร์โทรศัพท์</label>
                        <input type="text" name="phone" class="form-control" require placeholder="กรุณากรอกเบอร์โทร">
                    </div>

                    <div class="mb-3">
                        <label class="fs-6">รูปภาพ</label>
                        <input type="file" name="photo" class="form-control" require placeholder="กรุณาอัพโหลดรูปภาพ">
                    </div>

                    <div class="mb-3">
                        <label class="fs-6">ที่อยู่</label>
                        <textarea name="address" class="form-control"  rows="3"></textarea>
                    </div>
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="register_btn" value="ลงทะเบียน" class="btn btn-success" form-control>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once ("includes/script.php");?>
 <?php include_once ("includes/footer.php");?>