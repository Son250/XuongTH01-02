# Quản lý thi trắc nghiệm online
# Actor
    Người dùng
    Admin
# Chức năng
    - Admin:
        + Quản lý người dùng - Hoàng
            - Thêm, sửa, xóa, hiển thị (CRUD)
            - Chức năng đăng ký ng dùng
        + Quản lý chuyên đề (môn học) - Thắm
            - Thêm, sửa, xóa, hiển thị (CRUD)
        + Quản lý câu hỏi - Thanh
            - Thuộc về 1 chuyên đề
            - Thêm, sửa, xóa, hiển thị (CRUD)
            - Quản lý hình ảnh
            - 1 loại (1 câu đúng)
            - quản lý câu trả lời đúng
        + Quản lý đáp án - Trang
            - Thuộc về 1 câu hỏi
            - Thêm, sửa, xóa, hiển thị (CRUD)
            - Quản lý hình ảnh

        + Quản lý lịch thi
            - Tên kỳ thi
            - Bắt đầu thi, Kết thúc thi (time)
            - Thời gian thi
            - Số lượng đề thi
            - Loại (chính thức | luyện tập)
        + Quản lý đề thi
            - Thêm, sửa, xóa, hiển thị (CRUD)
            - Quản lý câu hỏi
        + Quản lý kết quả
            - Thông kê (điểm TB kỳ thi)
            - Thông kê (1 đề => từng câu 1 (đúng/ sai))
            - Từng sinh viên (từng câu đúng sai)
            - Điểm cao nhất, thấp nhất

    - Người dùng
        + Đăng nhập/ đăng ký
        + Xem danh sách kỳ thi (thi thử, thi thật)
        + Thi trắc nghiệm (từng câu một)
        + Xem kết quả


3.Chia công việc ngày 1/11/2023
         + Quản lý chuyên đề (môn học)
            -Hiển thị, Thêm : Thắm
            -Sửa, xóa : Hoàng
        + Quản lý câu hỏi (có cả image)
            - Hiển thị, Thêm: Thanh
            - Sửa, Xóa: Trang
         + Validate: Sơn

         
3.2:Chia việc ngày 15/11/2023
        + CRUD kết quả thi: Thanh
        + Đăng nhập/Đăng ký người dùng: Trang
        + Giao diện người dùng: Hoàng
        + Giao diện người dùng: Thắm         

## Cơ sở dữ liệu
    tai_khoan:
        + id: PK
        + username: not null
        + password: not null (hash | md5)
        + fullname: not null
        + image : null
        + email: null
        + address / tel: null
        + role: 1 admin | default: 2 user
    
    chuyen_de:
        + id: PK
        + name: not null
    
    cau_hoi:
        + id: PK
        + content: not null
        + image: null

    dap_an:
        + id: PK
        + content: not null
        + image: null
        + right: 0 sai | 1 đúng
        + id_question: FK

    lich_thi:
        + id: PK
        + name: not null
        + time_start: not null (datetime)
        + time_end: not null (datetime)
        + time: not null (int)
        + so_de_thi: int
    
    de_thi
        + id: PK
        + bocauhoi:
        + id_lichthi: FK
    
    ketqua:
        + id: PK
        + boketqua:
        + id_ngdung
        + id_dethi
        + diem
