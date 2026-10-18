# Kết quả kiểm thử M3

## Môi trường

- PHP CLI 8.3.6, Linux; Laravel Framework 12.70.0 từ composer.lock của project.
- SQLite in-memory; MariaDB 10.11.14 dùng InnoDB và database kiểm thử riêng.
- Máy Windows/XAMPP PHP 8.5.11 của người dùng chưa được chạy trực tiếp trong môi trường này.

## Kết quả

| Kiểm tra | Kết quả |
| --- | --- |
| Toàn bộ bộ test, SQLite | 31 tests, 284 assertions, đạt |
| Toàn bộ bộ test, MariaDB | 31 tests, 284 assertions, đạt |
| Hai tiến trình đồng thời tạo suất 18:00–20:00 và 19:00–21:00 cùng phòng | 1 thành công; 1 bị chặn lỗi trùng lịch |
| Biên dịch toàn bộ Blade (`php artisan view:cache`) | Đạt |
| Chuẩn định dạng PHP các file M3 | Đã chạy Laravel Pint |

15 bài kiểm thử M3 mới cùng 16 bài của nền tảng M1. Kiểm tra có: render tất cả trang quản trị M3 bằng HTTP test; Admin/User/khách; CRUD rạp; chặn xóa rạp có phòng; số ghế/VIP và giới hạn đầu vào; thêm/sửa/xóa/sinh lại ghế; chặn truy cập ghế sai phòng; bảo vệ phòng có suất; giá từng loại và loại trừ ghế ngừng sử dụng; trùng lịch một phần/bao trùm/cùng giờ/qua nửa đêm; lịch tiếp giáp và khác phòng; sửa loại trừ chính suất, chuyển phòng; chặn sửa/xóa khi có giữ/bán/vé; dữ liệu sai giờ, thời lượng, giá, nội dung; suất hủy; lọc và phân trang.

Kịch bản đồng thời gọi trực tiếp service bằng hai tiến trình PHP cùng database MariaDB, mở cổng chờ chung trước khi ghi. Đây là kiểm tra transaction/khóa hàng, chưa phải kiểm thử tải lớn.

## Giới hạn và việc cần kiểm tra trên máy bạn

- Trình duyệt headless không khởi chạy được vì môi trường không hỗ trợ socket mà Chromium cần. Đã kiểm tra phản hồi HTTP và Blade; chưa xác nhận trực quan toàn bộ trang desktop/mobile bằng trình duyệt.
- Iframe Google Maps có đúng URL và địa chỉ mã hóa trong HTML, nhưng việc bản đồ bên ngoài tải và xác định vị trí thật cần Internet trên máy demo.
- M4/M5 chưa tích hợp: chưa kiểm thử đặt vé/hoàn vé/thanh toán hoàn chỉnh hoặc AJAX giữ ghế từ code các thành viên đó.
- Không merge repo hoặc gắn tag bản nộp khi chưa có repo nhóm và các module còn lại.
- Không tạo file PowerPoint riêng: có nội dung ba slide và kịch bản demo trong THUYET-TRINH-M3.md để đưa vào template nhóm.
