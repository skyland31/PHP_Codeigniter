<div class="container">
    <h3>บันทึกกิจกรรม</h3><br>
    <?php
        echo change_date_format('1992-01-19'); 
    ?>
    <div class="row">
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ชื่อกิจกรรม" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
            <div class="input-group-append" id="button-addon4">
                <button class="btn btn-info" type="button">ค้นหา</button>
                <a href="<?php echo base_url('activity/insert/');?>" class="btn btn-info" type="button">เพิ่มกิจกรรม</a>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">ชื่อกิจกรรม</th>
                <th scope="col">วันที่ทำกิจกรรม</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($activity_data as $index => $obj) {

                ?>
                <tr>
                    <th scope="row"><?php echo $index+1;?></th>
                    <td><?php echo $obj->activity_name;?></td>
                    <td><?php echo change_date_format($obj->start_date)." - ".change_date_format($obj->end_date)?></td>
                    <td>
                        <a href="<?php echo base_url('activity/update/'.$obj->activity_id);?>" class="btn btn-warning" type="button">แก้ไข</a>
                        <a href="<?php echo base_url('activity/delete/'.$obj->activity_id);?>"
                         onclick ="return confirm('Are you sure you want to delete this item ?');" class="btn btn-danger" type="button">ลบ</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
            </table>
            </div>
        </div>