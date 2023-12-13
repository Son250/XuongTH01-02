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
        <div class="thoi-gian" id="thoiGian">
            <p>Thời gian còn lại: <span>29:59</span> </p>
        </div>
    </div>
    <div class="content-thi">
        <div class="box-left" id="fixedBoxLeft">
            <div class="box-title">
                <p class="bold">Câu hỏi</p>
            </div>
            <div class="box-content">
                <div class="row-cauhoi">
                    <?php foreach ($list_cauhoi as $keych => $listch) : ?>
                        <div>
                            <a href="#<?= $keych+1 ?>" data-question-id="question<?= $keych + 1 ?>"><?= $keych + 1 ?></a>
                        </div>
                    <?php endforeach; ?>
                    <!-- <div>
                        <a href="#" data-question-id="question2">2</a>
                    </div> -->

                </div>
                <form action="">
                    <button type='submit' name="btnNopbai">Nộp bài</button>
                </form>
            </div>
        </div>

        <div class="box-center" id="fixedBoxCenter">
            <div class="box-title" align='center'>
                <p class="bold"><?= $list_trangthi['ten_de'] ?></p>
            </div>
            <div class="box-content">
            
                <!--Câu hỏi mà có hình ảnh  -->
                <?php foreach ($list_cauhoi as $keych => $listch) :
                    $hinhanh = "../uploads/" . $listch['image'];
                    if (is_file($hinhanh)) {
                        $img_path = "<img src='" . $hinhanh . "' width='80px'>";
                    } else {
                        $img_path = "";
                    }
                ?>
                    <div class="box-cauhoi">
                        <div class="content-cauhoi">
                            <p class='bold' id="<?= $keych+1 ?>" >Câu <?= $keych + 1 ?>: <?= $listch['content'] ?></p>
                            <div class="img-cauhoi">
                                <!-- <img src="../assets/img/banner0.webp" alt=""> -->
                                <?= $img_path ?>
                            </div>
                        </div>

                        <div class="box-dapan">
                            <?php
                            $list_dapan = load_dapan($listch['id_cauhoi']);
                            foreach ($list_dapan as $keyda => $dapan) :
                                $hinh = "../uploads/" . $dapan['image'];
                                if (is_file($hinh)) {
                                    $img = "<img src='" . $hinh . "' width='100px'>";
                                } else {
                                    $img = "";
                                }
                            ?>

                                <div>
                                    <input type="radio" name="content-dapan-<?php echo $keych + 1  ?>" id="dapan<?= $keych + 1 ?>_<?= $keyda + 1 ?>" value="" data-question-id="question<?= $keych + 1 ?>">
                                    <label for="dapan<?= $keych + 1 ?>_<?= $keyda + 1 ?>" data-question-id="question<?= $keych + 1 ?>"><?php echo $dapan['content_dapan'] ?></label> <br>
                                    <!-- <img src="../assets/img/banner0.webp" alt=""> -->
                                    <?= $img ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<script>
    // Js của Sơn - cấm đụng 
    // document.addEventListener('DOMContentLoaded', function() {
    //     var labels = document.querySelectorAll('label[data-question-id]');

    //     labels.forEach(function(label) {
    //         label.addEventListener('click', function() {
    //             var questionId = this.getAttribute('data-question-id');
    //             var questionNumber = questionId.replace('question', '');
    //             var correspondingQuestion = document.querySelector('.box-left [data-question-id="' + questionId + '"]');
    //             // Thêm class 'done' vào câu hỏi tương ứng
    //             correspondingQuestion.classList.add('done');
    //         });
    //     });

    // });
    document.addEventListener('DOMContentLoaded', function() {
        var labels = document.querySelectorAll('label[data-question-id]');
        var inputs = document.querySelectorAll('input[data-question-id]');

        labels.forEach(function(label) {
            label.addEventListener('click', markAsDone);
        });

        inputs.forEach(function(input) {
            input.addEventListener('click', markAsDone);
        });

        function markAsDone() {
            var questionId = this.getAttribute('data-question-id');
            var correspondingQuestion = document.querySelector('.box-left [data-question-id="' + questionId + '"]');
            correspondingQuestion.classList.add('done');
        }
    });
</script>



<script>
    // Js cuộn trang fixed box left
    window.addEventListener('scroll', function() {
        const boxLeft = document.getElementById('fixedBoxLeft');
        const scrollPosition = window.scrollY;
        const boxCenter = document.getElementById('fixedBoxCenter');
        const thoiGian = document.getElementById('thoiGian');

        if (scrollPosition > 0) {
            boxLeft.classList.add('fixed');
            boxCenter.classList.add('ml-270');
            thoiGian.classList.add('fixedTg');
        } else {
            boxLeft.classList.remove('fixed');
            boxCenter.classList.remove('ml-270');
            thoiGian.classList.remove('fixedTg');

        }
    });
</script>