<?php
$nav = [

    [
        "label" => "Dashboard",
        "icon" => "fas fa-tachometer-alt",
        "route" => "dashboard",
        "badge" => "",
        "child" => []
    ],
    [
        "label" => "Branch",
        "icon" => "fas fa-store",
        "route" => "branches.index",
        "badge" => "",
        "child" => []
    ],
    [
        "label" => "Driver",
        "icon" => "fas fa-truck",
        "route" => "drivers.index",
        "badge" => "",
        "child" => []
    ],

    [
        "label" => "Order",
        "icon" => "fas fa-shopping-cart",
        "route" =>"orders.index",
        "badge" => "",
        "child" => []
    ],
    [
        "label" => "Customers",
        "icon" => "fas fa-user-tag",
        "route" =>'customers.index',
        "badge" => "",
        "child" => [
            [
                "label" => "Customers",
                "icon" => "",
                "route" =>'customers.index',
                "badge" => "",
            ],
           /* [
                "label" => "Customer Address",
                "icon" => "",
                "route" =>'customer-address.index',
                "badge" => "",
            ],*/
        ]
    ],

    [
        "label" => "Catalog",
        "icon" => "fas fa-list",
        "route" => "products.index",
        "badge" => "",
        "child" => [
            [
                "label" => "Products",
                "icon" => "",
                "route" =>'products.index',
                "badge" => "",
            ],
            [
                "label" => "Category",
                "icon" => "",
                "route" =>'categories.index',
                "badge" => "",
            ],
        ]
    ],
    [
        "label" => "Stock",
        "icon" => "fas fa-folder",
        "route" =>'product-stocks.index',
        "badge" => "",
        "child" => [
            [
                "label" => "Product Stock",
                "icon" => "",
                "route" =>'product-stocks.index',
                "badge" => "",
            ],
            [
                "label" => "Cylinder Stocks",
                "icon" => "",
                "route" =>'cylinder-stocks.index',
                "badge" => "",
            ],
        ]
    ],
    [
        "label" => "Administration",
        "icon" => "far fa-user",
        "route" => "admins.index",
        "badge" => "",
        "child" => [
            [
                "label" => "Admin",
                "icon" => "",
                "route" =>'users.index',
                "badge" => "",
            ],
            [
                "label" => "Role",
                "icon" => "",
                "route" =>"roles.index",
                "badge" => "",
            ],
            [
                "label" => "Permission",
                "icon" => "",
                "route" =>"permissions.index",
                "badge" => "",
            ],
        ]
    ],

    [
        "label" => "Setting",
        "icon" => "fas fa-cogs",
        "route" => "setting.index",
        "child" => [

            [
                "label" => "Payment Method",
                "icon" => "",
                "route" => "payment-methods.index",
                "badge" => "",
            ],
            [
                "label" => "API Key",
                "icon" => "",
                "route" => "api-keys",
                "badge" => "",
            ],
        ],
        "badge" => "",
    ]

];


$navs = $nav;

use Illuminate\Support\Facades\Route;

$route = Route::currentRouteName();
?>


<!-- Sidebar Menu -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{!! asset('assets/admin/dist/img/AdminLTELogo.png') !!}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{!! asset('assets/admin/dist/img/user2-160x160.jpg') !!}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach($nav as $item)
                    @if(empty($item['child']))

                        <li class="nav-item">
                            <a href="{!! (\Illuminate\Support\Facades\Route::has($item['route']))? route($item['route']):'#' !!}" class="nav-link">
                                <i class="nav-icon {!! $item['icon'] !!}"></i>
                                <p>
                                    {!! $item['label'] !!}
                                </p>
                            </a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a href="{!! (\Illuminate\Support\Facades\Route::has($item['route']))? route($item['route']):'#' !!}" class="nav-link ">
                                <i class="nav-icon {!! $item['icon'] !!}"></i>
                                <p>
                                    {!! $item['label'] !!}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @foreach($item['child'] as $itemChild)
                                    <li class="nav-item">
                                        <a href="{!! (\Illuminate\Support\Facades\Route::has($itemChild['route']))? route($itemChild['route']):'#' !!}" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{!! $itemChild['label'] !!}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
