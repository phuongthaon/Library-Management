# Web App Quản lý thư viện - DEADLIB
Ứng dụng quản lý thư viện số để giúp nhân viên thư viện thao tác với cơ sở dữ liệu một cách thuận tiện, đồng thời giúp bạn đọc thao tác mượn, trả sách.

## Yêu cầu chức năng
**Đối tượng sử dụng:** 
+ Cán bộ nhân viên thư viện
+ Người đọc

**Yêu cầu chức năng:**

_Về phía cán bộ nhân viên thư viện:_
+ Đăng nhập với tư cách admin
+ Có các chức năng chính trong quản lý sách, quản lý bạn đọc, quản lý mượn trả: thêm, sửa, xóa, xem thông tin.
+ Thống kê số lượng sách, số lượng người đọc còn đang hoạt động, số lượng người đọc không còn hoạt động, thống kê số lượng sách đang được mượn.

_Về phía bạn đọc:_
+ Đăng ký/ đăng nhập vào với tư cách bạn đọc
+ Tìm kiếm, tra cứu sách và mượn sách nếu đủ điều kiện (còn sách, thẻ còn hạn) và cảnh báo nếu không đủ điều kiện.
+ Thông báo gia hạn thẻ nếu thẻ hết hạn.
+ Thống kê số sách đang mượn, đã mượn, đã trả, chưa trả.
+ Chỉnh sửa thông tin cá nhân
+ Đổi mật khẩu tài khoản (nếu là lần đầu thì yêu cầu phải đổi vì mật khẩu lúc đầu được tạo mặc định cho các tài khoản)

## Cơ sở dữ liệu:

![Library Model Database](https://github.com/ecchi1234/-CSDL-WebApp-Library-Management/blob/master/libmodel.png)
