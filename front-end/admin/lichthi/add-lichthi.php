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
            updateClock();
        }

        function calculateEndTimeFromDuration(startDateTime, durationMinutes) {
            var startDateTimeObj = new Date(startDateTime);
            var endDateTime = new Date(startDateTimeObj.getTime() + durationMinutes * 60000); // Convert minutes to milliseconds
            return formatDateTime(endDateTime);
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
            document.getElementById('end_time_input').value = endTime;
            document.getElementById('end_time_span').innerText = endTime;
        }

        function updateClock() {
            // Countdown logic (if needed)
        }
    </script>
</head>
<body>
    <div class="content-boder-user">
        <div class="title-boder-top-user ">
            <p>Lịch thi</p>
        </div>

        <form id="registrationForm" action="?act=addlt" method="post" enctype="multipart/form-data">
            <h3>Thêm mới lịch thi</h3>
            <div>
                <label for="user">Tên kì thi:</label><br>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="mb-3">
            <label for="formFile" class="form-label">Hình ảnh</label>
            <input class="form-control" type="file" id="formFile" name="image_lt">
        </div>
            <div>
                <label for="time_start">Thời gian bắt đầu:</label><br>
                <input type="datetime-local" id="start_datetime" name="time_start" required onchange="calculateEndTime()" />
            </div>

            <div>
                <div>
                    <div class="address-user">
                        <label for="address">Thời gian làm bài:(tính theo phút)</label><br>
                        <input type="number" name="time" onchange="calculateEndTime()" id="duration" required>
        
                    </div>
                </div>
                <div>
                    <div class="address-user">
                        <label for="address">Thời gian kết thúc:</label><br>
                        <input type="text" name="time_end" id="end_time_input">
                    </div>
                </div>
                <div class="email">
                    <label for="email">Số lượng đề thi:</label><br>
                    <input type="number" name="so_de_thi" required>
                </div>
            </div> <br>

            <button name="btnSubmit">Thêm mới</button>
        </form>
    </div>

