<script language="javascript">
    var hours = null;
    var minutes = null;
    var seconds = null;
    var timeout = null;

    function calculateTimeDifference() {
        // Lấy giá trị nhập vào
        var startTime = document.getElementById('start_time').value;
        var endTime = document.getElementById('end_time').value;

        // Tính khoảng thời gian ở đơn vị giây
        var startTimeInSeconds = parseTimeToSeconds(startTime);
        var endTimeInSeconds = parseTimeToSeconds(endTime);

        var timeDifferenceInSeconds = endTimeInSeconds - startTimeInSeconds;

        // Chuyển đổi khoảng thời gian sang giờ, phút và giây
        var timeParts = splitTime(timeDifferenceInSeconds);

        hours = timeParts.hours;
        minutes = timeParts.minutes;
        seconds = timeParts.seconds;

        // Hiển thị kết quả và cập nhật giá trị cho đếm ngược
        updateResult();

        // Bắt đầu đếm ngược
        updateClock();
    }

    function parseTimeToSeconds(timeString) {
        var timeArray = timeString.split(":");
        return parseInt(timeArray[0]) * 3600 + parseInt(timeArray[1]) * 60;
    }

    function splitTime(totalSeconds) {
        var hours = Math.floor(totalSeconds / 3600);
        var remainingSeconds = totalSeconds % 3600;
        var minutes = Math.floor(remainingSeconds / 60);
        var seconds = remainingSeconds % 60;

        return {
            hours: hours,
            minutes: minutes,
            seconds: seconds
        };
    }

    function formatTimeUnit(unit) {
        return unit < 10 ? '0' + unit : unit;
    }

    function updateResult() {
        // Display the initial time
        document.getElementById('total_time').innerText = formatTimeUnit(hours) + ':' + formatTimeUnit(minutes) + ':' + formatTimeUnit(seconds);
    }

    function updateClock() {
        // Kiểm tra xem đếm ngược đã đạt đến không
        if (hours === 0 && minutes === 0 && seconds === 0) {
            clearTimeout(timeout);
            alert('Hết giờ');
        } else {
            // Cập nhật giá trị đếm ngược
            if (seconds > 0) {
                seconds--;
            } else {
                if (minutes > 0) {
                    minutes--;
                    seconds = 59;
                } else {
                    if (hours > 0) {
                        hours--;
                        minutes = 59;
                        seconds = 59;
                    }
                }
            }

            // Hiển thị giờ, phút, giây còn lại
            document.getElementById('total_time').innerText = formatTimeUnit(hours) + ':' + formatTimeUnit(minutes) + ':' + formatTimeUnit(seconds);

            // Tiếp tục đếm ngược
            timeout = setTimeout(updateClock, 1000);
        }
    }
</script>

<div class="container-thi">
    <div class='title'>
        <div class="title-thi">
            <h2>Thi thử THPT Quốc Gia 2024</h2>
        </div>
        <div class="thoi-gian">
            <p>Thời gian còn lại: <span>29:59</span> </p>
        </div>
    </div>
    <div class="content-thi">
        <div class="box-left">
            <div class="box-title">
                <p class="bold">Câu hỏi</p>
            </div>
            <div class="box-content">
                <div class="row-cauhoi">
                    <div>
                        <a href="#">1</a>
                    </div>
                    <div>
                        <a href="#">2</a>
                    </div>
                    <div>
                        <a href="#">3</a>
                    </div>
                    <div>
                        <a href="#">4</a>
                    </div>
                    <div>
                        <a href="#">5</a>
                    </div>
                </div>
                <div class="row-cauhoi">
                    <div>
                        <a href="#">6</a>
                    </div>
                    <div>
                        <a href="#">7</a>
                    </div>
                    <div>
                        <a href="#">8</a>
                    </div>
                    <div>
                        <a href="#">9</a>
                    </div>
                    <div>
                        <a href="#">10</a>
                    </div>
                </div>
                <div class="row-cauhoi">
                    <div>
                        <a href="#">1</a>
                    </div>
                    <div>
                        <a href="#">2</a>
                    </div>
                    <div>
                        <a href="#">3</a>
                    </div>
                    <div>
                        <a href="#">4</a>
                    </div>
                    <div>
                        <a href="#">5</a>
                    </div>
                </div>
                <div class="row-cauhoi">
                    <div>
                        <a href="#">6</a>
                    </div>
                    <div>
                        <a href="#">7</a>
                    </div>
                    <div>
                        <a href="#">8</a>
                    </div>
                    <div>
                        <a href="#">9</a>
                    </div>
                    <div>
                        <a href="#">10</a>
                    </div>
                </div>

                <form action="">
                    <button type='submit' name="btnNopbai">Nộp bài</button>
                </form>
            </div>
        </div>
        <?php
        $ds_dt = loadAll_dethi($id_lichthi);
        if ($ds_dt) {
            // Lấy một ID đề thi ngẫu nhiên từ danh sách
            $random_id = $ds_dt[array_rand($ds_dt)];
            // Tiếp tục xử lý hoặc hiển thị trang với $random_id
        } else {
            echo "Không tìm thấy đề thi nào.";
        }
        ?>
        <div class="box-center">
            <div class="box-title" align='center'>
                <p class="bold"><?= $random_id['ten_de'] ?></p>
            </div>
            <div class="box-content">
                <div class="box-cauhoi">
                    <div class="content-cauhoi">
                        <p class='bold'>Câu 1: 1 + 1 = ?</p>

                    </div>
                    <div class="box-dapan">
                        <div>
                            <input type="radio" name="content-dapan" id="dapan" value="">
                            <label for="dapan">2</label> <br>
                        </div>
                        <div>
                            <input type="radio" name="content-dapan" id="dapan" value="">
                            <label for="dapan">3</label> <br>
                        </div>
                        <div>
                            <input type="radio" name="content-dapan" id="dapan" value="">
                            <label for="dapan">7</label> <br>
                        </div>
                        <div>
                            <input type="radio" name="content-dapan" id="dapan" value="">
                            <label for="dapan">5</label> <br>
                        </div>
                    </div>

                </div>
            

                <!--Câu hỏi mà có hình ảnh  -->
                <div class="box-cauhoi">
                    <div class="content-cauhoi">
                        <p class='bold'>Câu 3: 6 + 1 = ?</p>
                        <div class="img-cauhoi">
                            <img src="../assets/img/banner0.webp" alt="">
                        </div>
                    </div>
                    <div class="box-dapan">
                        <div>
                            <input type="radio" name="content-dapan" id="dapan" value="">
                            <label for="dapan">2</label> <br>
                            <img src="../assets/img/banner0.webp" alt="">
                        </div>
                        <div>
                            <input type="radio" name="content-dapan" id="dapan" value="">
                            <label for="dapan">3</label> <br>
                            <img src="../assets/img/banner1.webp" alt="">
                        </div>
                        <div>
                            <input type="radio" name="content-dapan" id="dapan" value="">
                            <label for="dapan">7</label> <br>
                            <img src="../assets/img/banner2.webp" alt="">
                        </div>
                        <div>
                            <input type="radio" name="content-dapan" id="dapan" value="">
                            <label for="dapan">5</label> <br>
                            <img src="../assets/img/banner3.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>