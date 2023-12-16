<div class="container content-boder-user">
    <div class="title-boder-top-user">
        <p>
            Cập Nhật Lịch thi
        </p>
    </div>
    <form action="?act=editlt" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $olddata['id']; ?>">

           <div>
            <label for="user">Tên kì thi:</label><br>
            <input type="text" name="name" id="name" required value="<?php echo $olddata['name'] ?>">
        </div>
        <div>
            <label for="time_start">Thời gian bắt đầu:</label><br>
            <input type="datetime-local" id="time_start" name="time_start" required value="<?php echo $olddata['time_start'] ?>">
        </div>

        <div>
            <label>Thời gian kết thúc:</label><br>
            <input type="datetime-local" name="time_end" required value="<?php echo $olddata['time_end'] ?>">
        </div>
        <div>
            <div class="address-user">
                <label for="address">Thời gian làm bài:(tính theo phút)</label><br>
                <input type="number" name="time" required value="<?php echo $olddata['time'] ?>">
            </div>
        </div>
        <div>
            <div class="email">
                <label for="email">Số lượng đề thi:</label><br>
                <input type="number" name="so_de_thi" required value="<?php echo $olddata['so_de_thi'] ?>">
            </div>
        </div> <br>

        <button name="btnSubmit">Cập Nhật</button>
    </form>
</div>