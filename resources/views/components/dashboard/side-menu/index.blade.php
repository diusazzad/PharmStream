<div class="navbar-header mb-2">
    <ul class="nav navbar-nav flex-row justify-content-between">
        <li class="nav-item me-auto">
            <a class="navbar-brand" href=" dashboard">
                <span class="brand-logo">
                    <img height="40" width="160" src="{{asset('auth/dashboard/2024-06-30-6680ea3f1392c.png')}}"
                        alt="Logo" />
                </span>
                <h4 class="brand-text"></h4>
            </a>
        </li>
        <li class="nav-item nav-toggle">
            <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                    data-ticon="disc"></i>
            </a>
        </li>
    </ul>
</div>

<div class="shadow-bottom"></div>
<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="active">
            <a class="title d-flex align-items-center" href=" dashboard">
                <i class="fa fa-tachometer"></i>
                <span class="menu-item text-truncate " data-i18n="List">
                    Dashboard
                </span>
            </a>
        </li>
        <li class=" nav-item  || ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-user-gear"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    User &amp; Role
                </span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" users/index">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Users
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" roles/index">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Roles &amp; Permissions
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" nav-item  || ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-gear"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Settings
                </span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href="settings">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            General Setting
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href="settings/email-setting">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Email Setting
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href="languages/index">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Language Setting
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" nav-item  || ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-users"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Customers
                </span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href="customers/create">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Customer Add
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" customers/index">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Customer List
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" nav-item ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-gear"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Expense
                </span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" expenses/create">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            New Expense
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" expenses/index">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Expense List
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" expense-categories/create">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            New Category
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" expense-categories/index">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Category List
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-pills"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Medicine Stock
                </span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/instock-medicine">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            In Stock
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/lowstock-medicine">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Low Stock
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/stockout-medicine">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Stockout
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/upcoming-expire-medicine">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Upcoming Expired
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/already-expire-medicine">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Already Expired
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Ecommerce Setup -->
        <li class=" nav-item ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-shopping-bag"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Ecommerce Management
                </span>
                <span class="badge bg-danger">Addon</span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="d-flex align-items-center" href=" ecommerce/setting">
                        <i class="fas fa-cogs"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Settings
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href=" ecommerce/pages">
                        <i class="fas fa-cogs"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Pages
                        </span>
                    </a>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" ecommerce/slider">
                        <i class="fas fa-images"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Slider
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href=" ecommerce/product-list">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Products
                        </span>
                    </a>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" ecommerce/product/instock">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Instock Product
                        </span>
                    </a>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" ecommerce/product-types">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Categories
                        </span>
                    </a>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" ecommerce/order">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Orders
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-list"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Reports
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="d-flex align-items-center" href=" ecommerce/report/top-sale-product">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Top Sale Product
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href=" ecommerce/report/sale">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate">
                                    Sales Report
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href=" ecommerce/report/profit-loss">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate">
                                    Profit &amp; Loss
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" ecommerce/customer">
                        <i class="fas fa-users"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Customers
                        </span>
                    </a>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" ecommerce/csv/export-import">
                        <i class="fas fa-cloud-upload"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Export &amp; Import
                        </span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- HRM -->
        <li class="nav-item ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-address-book"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Hr Management
                </span>
                <span class="badge bg-danger">Addon</span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="d-flex align-items-center" href=" hrm/department">
                        <i class="fas fa-user-graduate"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Departments
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href=" hrm/designation">
                        <i class="fas fa-user-cog"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Designations
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href=" hrm/employee">
                        <i class="fas fa-user-friends"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Employees
                        </span>
                    </a>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" hrm/attendance">
                        <i class="fas fa-user-check"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Attendance
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-pager"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Payroll
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="d-flex align-items-center" href=" hrm/payroll/benefit">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Benefits
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href=" hrm/payroll/salary-setup">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate">
                                    Salary Setup
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href=" hrm/payroll/salary-sheet/generate">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate">
                                    Salary Generate
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href=" hrm/payroll/salary-sheet">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate">
                                    Salary Sheet
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href=" hrm/expense">
                        <i class="fas fa-wallet"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Expense
                        </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class=" nav-item ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-bank"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Accounts
                </span>
                <span class="badge bg-danger">Addon</span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="d-flex align-items-center" href=" account-types">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Account Type
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href=" accounts">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Account
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href=" transactions">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Transaction
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="d-flex align-items-center" href=" reports/trail-balance">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Trail Balance
                        </span>
                    </a>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" reports/balance-sheet">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Balance Sheet
                        </span>
                    </a>
                </li>
                <li class=" || ">
                    <a class="d-flex align-items-center" href=" reports/income-statement">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            Income Statement
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" nav-item "><a class="d-flex align-items-center" href="#"><i
                    class="fa-solid fa-people-carry-box"></i><span class="menu-title text-truncate"
                    data-i18n="Invoice">Supplier</span></a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" supplier/add">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Supplier Add
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" supplier/list">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Supplier List
                        </span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Vendors Routes -->
        <li class=" nav-item ">
            <a class="d-flex align-items-center" href="#">
                <i class="fa-solid fa-store"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">Vendors</span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" vendor/create">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Vendor Add
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" vendor/list">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Vendor List
                        </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class=" nav-item  ||  ||  ||  ||  ||  || ">
            <a class="d-flex align-items-center" href="#"><i class="fas fa-pills"></i><span
                    class="menu-title text-truncate" data-i18n="Invoice">Medicine</span></a>
            <ul class="menu-content">

                <li class="">
                    <a class="title d-flex align-items-center" href=" medicines/add">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Medicine Add
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" medicines/list">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Mdicine List
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" medicines/categories">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Categories
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" medicines/unit">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Units
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" medicines/leaf">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Leaf
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" medicines/type">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Types
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" medicines/import">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Medicine Import
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" nav-item  ">
            <a class="d-flex align-items-center" href="#"><i class="fas fa-cart-shopping"></i><span
                    class="menu-title text-truncate" data-i18n="Invoice">Purchase</span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" purchase/create">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Add Purchase
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" purchase/index">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Purchase History
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" purchase/return-history">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Return History
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  || "><a class="d-flex align-items-center" href="#"><i
                    class="fa-solid fa-file-invoice"></i><span class="menu-title text-truncate"
                    data-i18n="Invoice">Sales</span></a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" pos">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            New Invoice
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" invoice/reports">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Invoice History
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" returned_history">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Return History
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" nav-item  ||  ||  ||  || ">
            <a class="d-flex align-items-center" href="#">
                <i class="fa-solid fa-chart-line"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Reports
                </span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/customer/due">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Customer Due
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/supplier/due">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Payable Manufacturer
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" reports">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Sells &amp; Purchase Reports
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/medicine/topsell">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Top Sell Medicine
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" profit">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Medicine Profit &amp; Loss
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" report/business/profit-loss">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Business Profit &amp; Loss
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" nav-item  ||  ||  || ">
            <a class="d-flex align-items-center" href="#">
                <i class="fas fa-prescription"></i>
                <span class="menu-title text-truncate" data-i18n="Invoice">
                    Prescription
                </span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="title d-flex align-items-center" href=" doctor">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Doctors
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" patient">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Patients
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" test">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Diagnosis &amp; Tests
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href=" prescription">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Prescriptions
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a class="title d-flex align-items-center" href=" payment_methdod">
                <i class="fas fa-circle"></i>
                <span class="menu-item text-truncate " data-i18n="List">
                    Payment Method
                </span>
            </a>
        </li>
    </ul>
</div>