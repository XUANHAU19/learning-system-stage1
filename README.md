# Review kiến thức System - Nguyễn Xuân Hậu

##1. SSH Key vs. Password (Cuộc chiến Chìa khóa & Ổ khóa)
*Vấn đề của Password:
- Dùng mật khẩu giống như ông giấu chìa khóa dưới thảm chùi chân. Hacker có thể đoán mò (Brute-force) hoặc nghe lén khi ông gõ phím gửi qua mạng.
*Giải pháp SSH Key:
- Nó hoạt động theo cặp: Private Key (Chìa khóa) và Public Key (Ổ khóa).
- Cơ chế: Ông giữ khư khư cái Chìa (Private) trong laptop (không bao giờ gửi đi đâu). Server chỉ giữ cái Ổ (Public).
- Kết quả: Khi kết nối, Server chỉ cần kiểm tra xem chìa có mở được ổ không. Không cần gửi mật khẩu qua mạng -> Hacker bó tay, không thể nghe lén, không thể đoán mò.

##2. Git Staging (Cái Giỏ Hàng thần thánh)
- Tại sao cần nó? Trong thư mục code của ông luôn tồn tại "Rác" (file log, file tạm, file cấu hình riêng của máy ông...).
- Cơ chế:
- Thư mục làm việc (Working Directory) = Cái Siêu thị (đủ thứ hầm bà lằng).
- Staging Area (git add) = Cái Giỏ hàng.
- Tác dụng: Ông chỉ nhặt những file code "xịn" bỏ vào Giỏ. Những thứ rác rưởi ông để lại trên kệ. Khi tính tiền (git commit), chỉ những gì trong Giỏ mới được lưu lại. Giúp lịch sử code sạch sẽ, không chứa rác.

##3. Security (Chiến thuật "Bình mới rượu cũ")
- Nguy cơ: GitHub là chốn công cộng. Nếu ông push file wp-config.php chứa mật khẩu DB_PASSWORD thật lên -> Hacker dùng bot quét được trong 1 nốt nhạc -> Bay màu Database.

* Giải pháp:

- Bước 1 (.gitignore): Ra lệnh cho Git "lơ" file wp-config.php thật đi (Giấu biến đi).

- Bước 2 (.sample): Tạo một file copy tên là wp-config.sample.php.

- Bước 3 (Tẩy trắng): Trong file sample, xóa sạch mật khẩu thật, thay bằng your_password_here.

- Ý nghĩa: File sample đóng vai trò là "Hướng dẫn sử dụng". Người khác tải về sẽ biết cấu trúc file cần điền, nhưng không bao giờ biết mật khẩu thật của ông.
