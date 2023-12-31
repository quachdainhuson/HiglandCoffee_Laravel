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
        <li class="active"><a href="{{route('customers.customer')}}"><i class='bx bx-group'></i>Khách Hàng</a></li>
        <li><a href="{{route('categories.category')}}"><i class='bx bxs-category'></i></i>Danh Mục</a></li>
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
                <h1>Người Dùng</h1>
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

        <form role="form"  enctype="multipart/form-data" method="post" action="{{ route('customers.update_customer', $customer) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-1"></div>
                <div class="col-7">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Họ và Tên</label>
                            <input type="text" name="customer_name" required class="form-control"  placeholder="" value="{{ $customer['customer_name'] }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" required class="form-control"  placeholder="" value="{{ $customer['email'] }}">
                        </div>
                        @if($errors->has('email'))
                            {{$errors->first('email')}}
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Số Điện thoại</label>
                            <input type="text" name="customer_phone" required class="form-control"  placeholder="" value="{{ $customer['customer_phone'] }}">
                        </div>
                        @if($errors->has('customer_phone'))
                            {{$errors->first('customer_phone')}}
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input type="text" name="customer_address" required class="form-control"  placeholder="" value="{{ $customer['customer_address'] }}">
                        </div>
                        @if($errors->has('customer_address'))
                            {{$errors->first('customer_address')}}
                        @endif
                    </div>
                    <br>
                    <div class="button">
                        <button type="submit" name="submit" class="btn btn-primary">Sửa Thông Tin</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>

        </form>

    </main>

</div>

<script src="../../../../public/js/admin.js"></script>
</body>

</html>
