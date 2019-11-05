<div class="container">
    <h3>ลบกิจกรรม</h3><br>

    <div class="row">
        <div class="col-md-12">
            <form action = "<?php echo base_url('activity/index'); ?>">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>ชื่อกิจกรรม</label>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>วันที่เริ่มกิจกรรม</label>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>วันที่สิ้นสุดกิจกรรม</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">ยืนยัน</button>
                        <button type="button" class="btn btn-primary">ยกเลิก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>