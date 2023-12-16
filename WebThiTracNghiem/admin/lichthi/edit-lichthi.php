<script language="javascript">
    var timeout = null;

    function calculateEndTime() {
        // Lấy giá trị nhập vào
        var startDateTime = document.getElementById('start_datetime').value;
        var durationMinutes = parseInt(document.getElementById('duration').value);

        // Tính thời gian kết thúc
        var endTime = calculateEndTimeFromDuration(startDateTime, durationMinutes);

        // Hiển thị kết quả và bắt đầu đếm ngược
        updateResult(endTime);

        // Bắt đầu đếm ngược
        updateCountdown(endTime);
    }

    function calculateEndTimeFromDuration(startDateTime, durationMinutes) {
        var startDateTimeObj = new Date(startDateTime);
        var endDateTime = new Date(startDateTimeObj.getTime() + durationMinutes * 60000); // Convert minutes to milliseconds
        return endDateTime;
    }

    function formatDateTime(dateTime) {
        var year = dateTime.getFullYear();
        var month = dateTime.getMonth() + 1; // Month is zero-based
        var day = dateTime.getDate();
        var hours = dateTime.getHours();
        var minutes = dateTime.getMinutes();

        return year + '-' + formatTimeUnit(month) + '-' + formatTimeUnit(day) + ' ' + formatTimeUnit(hours) + ':' + formatTimeUnit(minutes);
    }

    function formatTimeUnit(unit) {
        return unit < 10 ? '0' + unit : unit;
    }

    function updateResult(endTime) {
        // Display the calculated end date and time
        document.getElementById('end_time_input').value = formatDateTime(endTime);
        document.getElementById('end_time_span').innerText = formatDateTime(endTime);
    }

    function updateCountdown(endTime) {
        // Update countdown every second
        timeout = setInterval(function() {
            var currentTime = new Date();
            var timeDifference = endTime - currentTime;

            // Check if the countdown has reached zero
            if (timeDifference <= 0) {
                clearInterval(timeout);
                document.getElementById('end_time_input').value = 'Hết giờ';
                document.getElementById('end_time_span').innerText = 'Hết giờ';
            } else {
                // Calculate hours, minutes, and seconds
                var hours = Math.floor(timeDifference / 3600000);
                var minutes = Math.floor((timeDifference % 3600000) / 60000);
                var seconds = Math.floor((timeDifference % 60000) / 1000);

                // Display the countdown
                document.getElementById('end_time_input').value = formatTimeUnit(hours) + ':' + formatTimeUnit(minutes) + ':' + formatTimeUnit(seconds);
                document.getElementById('end_time_span').innerText = formatTimeUnit(hours) + ':' + formatTimeUnit(minutes) + ':' + formatTimeUnit(seconds);
            }
        }, 1000);
    }
</script>
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
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label> <br>
            <?php
            if ($olddata['image_lt'] != "" && $olddata['image_lt'] != null) {
                echo "<img width='150' src='../uploads/{$olddata['image_lt']}'>";
            }

            ?>
            <input class="form-control" type="file" name="image_lt">
        </div>
        <div>
            <label for="time_start">Thời gian bắt đầu:</label><br>
            <input type="datetime-local" id="start_datetime" name="time_start" onchange="calculateEndTime()" required value="<?php echo $olddata['time_start'] ?>">
        </div>

        <div>
            <div class="address-user">
                <label for="address">Thời gian làm bài:(tính theo phút)</label><br>
                <input type="number" name="time" id="duration" required onchange="calculateEndTime()" value="<?php echo $olddata['time'] ?>">
            </div>
        </div>
        <div>
            <div>
                <div class="address-user">
                    <label for="address">Thời gian kết thúc:</label><br>
                    <input type="text" name="time_end" id="end_time_input" value="<?php echo $olddata['time_end'] ?>">
                </div>
            </div>
            <div class="email">
                <label for="email">Số lượng đề thi:</label><br>
                <input type="number" name="so_de_thi" required value="<?php echo $olddata['so_de_thi'] ?>">
            </div>
        </div> <br>

        <button name="btnSubmit">Cập Nhật</button>
    </form>
</div>