<?php include_once ("includes/header.php");?>
<?php include_once ("includes/navbar.php");?>
 
    <div class="contaoner my-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="text-info-emphasis">ล็อคอินเข้าสู่ระบบ</h4>
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3 bg-sucess">
                                <label class="fs-5">อีเมลล์</label>
                            <input type="text" name="email" class="form-control" require placeholder="Enter Your Email" >
                            </div>

                            <div class="mb-3">
                                <label  class="fs-5">รหัสผ่าน</label>
                                <input type="text" name="password" class="form-control-center" require placeholder="Enter Your password">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-info ">เข้าสู่ระบบ</button>
                            </div>
                        </form>
                    </div>
                </div>
               </div>
         </div>
    </div>

<?php include_once ("includes/footer.php");?>