<div class="container">
    <h3>เพิ่มกิจกรรม</h3><br>

    <div class="row">
        <div class="col-md-12">
        <?php echo validation_errors(); ?>
            <?php echo form_open('activity/save','method = "POST"'); ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" placeholder="ชื่อกิจกรรม" name = "activity_name" required value= <?php echo set_value('activity_name'); ?> >
                    </div>
                    <div class="col-md-3 form-group">
                        <label>วันที่เริ่มกิจกรรม</label>
                        <input type="text" class="form-control" placeholder="วันที่เริ่มกิจกรรม" id = "start_date" name = "start_date" required value= <?php echo set_value('start_date'); ?> >
                    </div>
                    <div class="col-md-3 form-group">
                        <label>วันที่สิ้นสุดกิจกรรม</label>
                        <input type="text" class="form-control" placeholder="วันที่สิ้นสุดกิจกรรม" id ="end_date" name = "end_date" required value= <?php echo set_value('end_date'); ?> >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <button type="button" class="btn btn-primary">ยกเลิก</button>
                    </div>
                </div>
        </div>
    </div>