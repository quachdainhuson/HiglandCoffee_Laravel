<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.1-dist/css/bootstrap.min.css')}}">
    <title>Admin Coffee Shop</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>Coffee</span>Shop</div>
        </a>
        <ul class="side-menu">
            <li><a href="{{route('dashboard.dashboard')}}"><i class='bx bxs-home' ></i></i>Dashboard</a></li>
            <li><a href="{{route('orders.order')}}"><i class='bx bxs-cart-add'></i>Đặt Hàng</a></li>
            <li><a href="{{route('products.product')}}"><i class='bx bx-store-alt'></i>Sản Phẩm</a></li>
            <li><a href="{{route('users.user')}}"><i class='bx bx-group'></i>Người Dùng</a></li>
            <li><a href="{{route('customers.customer')}}"><i class='bx bx-group'></i>Khách Hàng</a></li>
            <li class="active"><a href="{{route('categories.category')}}"><i class='bx bxs-category'></i></i>Danh Mục</a></li>
            <li><a href="{{route('receipts.receipt')}}"><i class='bx bxs-receipt'></i>Đơn Hàng</a></li>
            <li><a href="{{route('tables.table_management')}}"><i class='bx bx-table' ></i></i>Quản Lý Bàn</a></li>

        </ul>
        <ul class="side-menu">
            <li>
                <a href="{{route('user.logout')}}" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Đăng Xuất
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <p>{{$current_employee->employee_name}}</p>
            <a href="#" class="profile">
                <img src="{{asset('image/user_image.jpg')}}">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Danh Mục</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Analytics
                            </a></li>
                        /
                        <li><a href="#" >Shop</a></li>
                    </ul>
                </div>

            </div>

            <!-- Insights -->
            <div class="row" style="margin-left:30px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">
                                <!-- ERROR -->

                                <form role="form"  enctype="multipart/form-data" method="post" action="{{ route('categories.store_category')}}">
                                    @csrf
                                    <div style="margin-bottom: 10px;">
                                        <label>Tên danh mục:</label>
                                        <input  type="text" name="cate_name" class="form-control"
                                            placeholder="Tên danh mục...">
                                        @if(
                                        $errors->has('cate_name')) <span
                                            class="text-danger">{{ $errors->first('cate_name') }}</span>
                                        @endif
                                    </div>
                                    <input type="submit" name="sbm" value="Thêm Danh Mục" class="btn btn-success"></input>
                                    <button type="reset" class="btn btn-default">Làm mới</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </main>

    </div>

    <script src="../../../../public/js/admin.js"></script>
</body>

</html>
