<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>QUẢN LÝ ĐÁP ÁN</p>
    </div>
    <br>
    <div class="add-user">
        <a href="?act=addda">
            Nhập thêm
        </a>
    </div>
    <div class="main-user">
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nội dung đáp án</td>
                    <td>Image</td>
                    <td>Kết quả (Đúng/Sai)</td>
                    <td>ID câu hỏi</td>
                    <td>Chức Năng</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>

            </tbody>
        </table>
        <script>
            function hoixoa(id) {
                let ok = confirm("Bạn có thực sự muốn xóa hay không.");
                if (ok) {
                    window.location.href = "?act=deleteda&idda= " + id;
                }
            }
        </script>
        </script>
    </div>
</div>