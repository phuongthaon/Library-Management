# Web App Quản lý thư viện - DEADLIB
Ứng dụng quản lý thư viện số để giúp nhân viên thư viện thao tác với cơ sở dữ liệu một cách thuận tiện, đồng thời giúp bạn đọc thao tác mượn, trả sách.

Link web: https://deadlib.herokuapp.com/

Báo cáo: https://bit.ly/bao-cao-btl hoặc https://bit.ly/bao-cao-btl-du-phong-1

Tài khoản demo:

**Admin:**

username: admin

pass: test@123

**Bạn đọc:**

username: ecchi123

pass: 123456

**Lưu ý**

Khi vào trang web, mặc định sẽ là màn hình đăng nhập dành cho người đọc. Nếu admin muốn truy cập vào trang dành cho admin cần nhấn vào liên kết 'Sign in as Admin?'.

Admin không thể tạo tài khoản mà chỉ có người đọc được tự tạo tài khoản.

## Yêu cầu chức năng
**Đối tượng sử dụng:** 
+ Cán bộ nhân viên thư viện
+ Người đọc

**Yêu cầu chức năng:**

_Về phía cán bộ nhân viên thư viện:_
+ Đăng nhập với tư cách admin
+ Có các chức năng chính trong quản lý sách, quản lý bạn đọc: thêm, sửa, xóa, xem thông tin.
+ Quan sát được danh sách các hoạt động mượn trả
+ Quan sát được danh sách các thẻ 
+ Tìm kiếm thông tin trong các bảng.
+ Thống kê số lượng sách, số lượng người đọc còn đang hoạt động, số lượng người đọc không còn hoạt động, thống kê số lượng sách đang được mượn.

_Về phía bạn đọc:_
+ Đăng ký/ đăng nhập vào với tư cách bạn đọc
+ Tìm kiếm, tra cứu sách, xem thông tin sách (tên, tác giả, nhà xuất bản, thời hạn mượn,...) và mượn sách nếu đủ điều kiện (còn sách) và cảnh báo nếu không đủ điều kiện.
+ Trả sách
+ Thông báo gia hạn thẻ nếu thẻ hết hạn. (khi đăng nhập)
+ Xem và chỉnh sửa thông tin cá nhân
