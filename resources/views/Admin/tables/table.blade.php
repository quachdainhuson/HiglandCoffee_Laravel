<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.1-dist/css/bootstrap.min.css') }}">

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
            <li><a href="{{route('categories.category')}}"><i class='bx bxs-category'></i></i>Danh Mục</a></li>
            <li><a href="{{route('receipts.receipt')}}"><i class='bx bxs-receipt'></i>Đơn Hàng</a></li>
            <li class="active"><a href="{{route('tables.table_management')}}"><i class='bx bx-table' ></i></i>Quản Lý Bàn</a></li>

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
                    <h1>Quản Lý Bàn</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Analytics
                            </a></li>
                        /
                        <li><a href="#" >Quản Lý Bàn</a></li>
                    </ul>

                </div>
                <a href="{{route('tables.table_management')}}" class="report">
                    <span>Khu Vực Quản Lý Bàn</span>
                </a>
            </div>

            <!-- Insights -->
            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">

                        <table class="table table-striped">
                            <div>
                                <ul class="tables m-0">
                                    @foreach($tables as $table)
                                    <li class="item-table">
                                        <button id="btn-table">{{$table->table_name}}</button>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>

                        </table>

                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </main>

    </div>

    <script src="../../../../public/js/admin.js"></script>
    <!-- <script>
         document.getElementById("btn-table").onclick = function(){
            document.getElementById('btn-table').style.backgroundColor="rgb(69, 146, 69)";

        }

    </script> -->
</body>

</html>
