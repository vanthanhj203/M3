# Nội dung thuyết trình M3 — Văn Thành

Đây là nội dung để đưa vào template PowerPoint chung của nhóm.

## Slide 1 — Mục tiêu, phạm vi, công nghệ (khoảng 1 phút)

- Mục tiêu: quản lý cơ sở rạp và sắp lịch chiếu chính xác, chuẩn bị ghế/giá cho module đặt vé.
- Phạm vi M3: rạp, phòng, ghế, suất chiếu, Google Maps, tích hợp Git.
- Laravel 12, MySQL/MariaDB, Eloquent quan hệ 1–n, eager loading, Blade, Validation, Transaction và lockForUpdate.
- Dùng schema 12 bảng do M1 triển khai; M3 tập trung dia_diem, phong_chieu, ghe_ngoi, suat và phối hợp ghe_theo_suat.

## Slide 2 — Chức năng chính (khoảng 1 phút)

- CRUD rạp/phòng/suất; tìm kiếm, lọc, phân trang.
- Tự sinh ghế theo hàng × ghế/hàng, phân loại thường/VIP.
- Tạo ghế theo suất với giá vé riêng; sơ đồ quản trị và thống kê trạng thái ghế.
- Bản đồ rạp, quyền truy cập chỉ dành cho Admin.

## Slide 3 — Chức năng nổi bật (khoảng 1 phút)

- Chặn trùng khoảng thời gian trong cùng phòng, kể cả suất qua nửa đêm.
- Transaction và khóa phòng giúp tránh hai thao tác tạo lịch đồng thời cùng thành công.
- Bảo vệ phòng/ghế/suất đã có dữ liệu; không sửa/xóa suất đang giữ/bán ghế hoặc có vé.
- Ghế phòng tách khỏi ghế theo suất: một ghế có trạng thái bán khác nhau trong mỗi suất.

## Demo khoảng 3 phút

- 0:00–0:40: tạo rạp, mở bản đồ địa chỉ.
- 0:40–1:20: tạo phòng 5 × 10 ghế, xem hàng VIP.
- 1:20–2:10: tạo suất và xem giá từng loại ghế.
- 2:10–2:45: tạo lịch chồng lấn để thấy bị chặn, thử suất tiếp giáp được chấp nhận.
- 2:45–3:00: chỉ ra khóa sơ đồ và chặn xóa suất có vé.

## Câu hỏi vấn đáp cần nắm

1. Vì sao unique phòng + giờ bắt đầu chưa đủ? Hai suất 18:00–20:00 và 19:00–21:00 khác giờ bắt đầu nhưng vẫn chồng lấn.
2. Điều kiện giao nhau? Bắt đầu cũ < kết thúc mới và kết thúc cũ > bắt đầu mới.
3. Vì sao khóa phòng thay vì chỉ khóa suất? Phòng chưa có suất thì không có hàng suất nào để khóa; khóa phòng giúp tuần tự hóa tạo lịch.
4. Eager loading dùng ở đâu? Danh sách phòng tải diaDiem; danh sách suất tải noiDung và phongChieu.diaDiem để tránh N+1.
5. Vì sao không xóa ghế/phòng có lịch sử? Vé và ghế theo suất tham chiếu các bản ghi đó; xóa sẽ mất tính nhất quán và lịch sử.
6. Vì sao không lưu tổng số ghế vào cột mới? Có thể đếm ghế thực tế qua quan hệ, tránh số sức chứa bị lệch với sơ đồ.
