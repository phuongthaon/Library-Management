<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <title>Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./front-end/asset/css/reader.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../front-end/asset/css/common.css">
</head>

<body>
    <!--Heading-->
    <div class="header">
        <!--Logo-->
        <div class="logo">
            <div class="iconbar"></div>
            <div class="logotext">DEADLIB</div>
        </div>
        <!--User-->
        <div class="user">
            <div class="username">Nguyễn Ngọc Chi</div>
            <i class="fa fa-user-circle-o"></i>
            <i class="fa fa-caret-down"></i>
        </div>
    </div>

    <!--Menu-->
    <div class="menu">
        <!--MenuItem-->
        <div class="menu-content">
            <!--Reader-->
            <div class="menu-item">
                <div class="menu-item-icon-reader"></div>
                <div class="menu-item-text-reader">Quản lý độc giả</div>
            </div>
            <!--Thủ thư-->
            <div class="menu-item">
                <div class="menu-item-icon-keeper"></div>
                <div class="menu-item-text-keeper">Quản lý thủ thư</div>
            </div>
            <!--Tài liệu-->
            <div class="menu-item">
                <div class="menu-item-icon-doc"></div>
                <div class="menu-item-text-doc">Quản lý tài liệu</div>
            </div>
            <!--Kho sách-->
            <div class="menu-item">
                <div class="menu-item-icon-kho"></div>
                <div class="menu-item-text-kho">Quản lý kho sách</div>
            </div>
            <!--Mượn trả-->
            <div class="menu-item">
                <div class="menu-item-icon-muontra"></div>
                <div class="menu-item-text-muontra">Quản lý mượn trả</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-icon-nxb"></div>
                <div class="menu-item-text-nxb">Quản lý NXB</div>
            </div>
            <!--Mượn sách-->
            <div class="menu-item">
                <div class="menu-item-icon-borrow"></div>
                <div class="menu-item-text-borrow">Mượn sách</div>
            </div>
            <!--Trợ giúp-->
            <div class="menu-item">
                <div class="menu-item-icon-help"></div>
                <div class="menu-item-text-help">Trợ giúp</div>
            </div>
        </div>
    </div>
    <!--Content-->
    <div class="content">
        <!--Content heading-->
        <div class="content-header">
            <!--Khung Họ và tên-->
            <form>
                <input type="text" class="header-input-name" placeholder="Tìm kiếm">
                <select id="tag">
                    <option value="name">Tên</option>
                    <option value="address">Địa chỉ</option>
                    <option value="gender">Giới tính</option>
                    <option value="cardNumber">Số thẻ</option>
                    <option value="email">Email</option>
                    <option value="mobile">Số điện thoại</option>
                </select>
                <!--Button Tìm kiếm-->
                <button type="submit" class="btnfind"><i class="fa fa-search"></i></button>
            </form>
            <!--Button Thêm-->
            <button class="btnadd"><i class="fa fa-plus"></i>Thêm</button>
        </div>
        <!--Content body-->
        <div class="content-body">
            <table border="1" cellpadding="0">
                <thead>
                    <tr>
                        <th>
                            <h3>Họ và tên</h3></th>
                        <th>
                            <h3>Ngày sinh</h3></th>
                        <th>
                            <h3>Giới tính</h3></th>
                        <th>
                            <h3>Email</h3></th>
                        <th>
                            <h3>Mã thẻ</h3></th>
                        <th>
                            <h3>Thao tác</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>14/08/2000</td>
                        <td>Nam</td>
                        <td>nta@gmail.com</td>
                        <td>1456474956</td>
                        <td class="thaotac">
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-pencil"></i>
                            <i class="fa fa-eye"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--Content Foot-->
        <div class="content-footer"></div>
    </div>
</body>

</html>