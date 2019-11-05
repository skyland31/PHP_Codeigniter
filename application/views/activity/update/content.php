<div class="container">
    <h3>แก้ไขกิจกรรม</h3><br>

    <div class="row">
        <div class="col-md-12">
            <form action = "<?php echo base_url('activity/save'); ?>" method = "POST">
            <input type="hidden" class="form-control" name = "activity_id" value = "<?php echo $activity_data->activity_id ?>">   
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" name = "activity_name" value = "<?php echo $activity_data->activity_name ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label>วันที่เริ่มกิจกรรม</label>
                        <input type="text" class="form-control" placeholder="วันที่เริ่มกิจกรรม" name = "start_date" value = "<?php echo $activity_data->start_date ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label>วันที่สิ้นสุดกิจกรรม</label>
                        <input type="text" class="form-control" placeholder="วันที่สิ้นสุดกิจกรรม" name = "end_date" value = "<?php echo $activity_data->end_date ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <button type="button" class="btn btn-primary">ยกเลิก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>