@extends('admin.layout')
@push('css')
@endpush

@push('js')
@endpush

@section('title')
    <title>Trang quản trị</title>
@endsection

@section('content')
<div class="d-flex align-items-center mb-3">
    <div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang</a></li>
            <li class="breadcrumb-item active">Sản phẩm</li>
        </ul>
        <h1 class="page-header mb-0">Danh sách sản phẩm</h1>
    </div>
    <div class="ml-auto">
        <a href="#" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i> Thêm mới sản phẩm</a>
    </div>
</div>
<div class="mb-sm-4 mb-3 d-sm-flex">
    <div class="mt-sm-0 mt-2"><a href="#" class="text-dark text-decoration-none"><i
                    class="fa fa-download fa-fw mr-1 text-muted"></i> Xuất</a></div>
    <div class="ml-sm-4 mt-sm-0 mt-2"><a href="#" class="text-dark text-decoration-none"><i
                    class="fa fa-upload fa-fw mr-1 text-muted"></i> Nhập</a></div>
    <div class="ml-sm-4 mt-sm-0 mt-2 dropdown-toggle">
        <a href="#" data-toggle="dropdown" class="text-dark text-decoration-none">More Actions</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
    </div>
</div>
<div class="card">
    <ul class="nav nav-tabs nav-tabs-v2 px-4">
        <li class="nav-item mr-3"><a href="#allTab" class="nav-link active px-2" data-toggle="tab">Tất cả</a>
        </li>
        <li class="nav-item mr-3"><a href="#publishedTab" class="nav-link px-2"
                                     data-toggle="tab">Được xuất bản</a></li>
        <li class="nav-item mr-3"><a href="#expiredTab" class="nav-link px-2" data-toggle="tab">Bị ẩn</a>
        </li>
    </ul>
    <div class="tab-content p-4">
        <div class="tab-pane fade show active" id="allTab">

            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Filter products &nbsp;</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <div class="flex-fill position-relative">
                    <div class="input-group">
                        <div class="input-group-prepend position-absolute top-0 bottom-0"
                             style="z-index: 1020;">
										<span class="input-group-text bg-none border-0 pr-0"><i
                                                    class="fa fa-search opacity-5"></i></span>
                        </div>
                        <input type="text" class="form-control pl-35px" placeholder="Search products" />
                    </div>
                </div>
            </div>


            <div class="table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th class="border-bottom-0 border-top-0 pt-0 pb-2"></th>
                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Product</th>
                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Inventory</th>
                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Type</th>
                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Vendor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product1">
                                <label class="custom-control-label" for="product1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100" src="./admin/assets/img/product/product-6.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Force Majeure White T Shirt</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">83 in stock for 3 variants</td>
                        <td class="align-middle">Cotton</td>
                        <td class="align-middle">Force Majeure</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product2">
                                <label class="custom-control-label" for="product2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100" src="./admin/assets/img/product/product-7.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Eco-friendly fashion, organic cotton, slow fashion polo
                                        shirts</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">79 in stock for 3 variants</td>
                        <td class="align-middle">Cotton</td>
                        <td class="align-middle">Polo</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product3">
                                <label class="custom-control-label" for="product3"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100" src="./admin/assets/img/product/product-8.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Nike Shoes (Red Color)</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">19 in stock for 1 variants</td>
                        <td class="align-middle">Sports</td>
                        <td class="align-middle">Nike</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product4">
                                <label class="custom-control-label" for="product4"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100" src="./admin/assets/img/product/product-9.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Nike Air Max (Blue Color)</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">19 in stock for 1 variants</td>
                        <td class="align-middle">Sports</td>
                        <td class="align-middle">Nike</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product5">
                                <label class="custom-control-label" for="product5"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100"
                                         src="./admin/assets/img/product/product-10.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Skate Sneaker (Orange Color)</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">19 in stock for 1 variants</td>
                        <td class="align-middle">Sports</td>
                        <td class="align-middle">Skate</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product6">
                                <label class="custom-control-label" for="product6"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100"
                                         src="./admin/assets/img/product/product-11.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Teen Fashion T-shirt (Black)</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">30 in stock for 4 variants</td>
                        <td class="align-middle">T-Shirt</td>
                        <td class="align-middle">Tulsa</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product7">
                                <label class="custom-control-label" for="product7"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100"
                                         src="./admin/assets/img/product/product-12.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Levis Blue Jeans</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">49 in stock for 8 variants</td>
                        <td class="align-middle">Jeans</td>
                        <td class="align-middle">Levis</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product8">
                                <label class="custom-control-label" for="product8"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100"
                                         src="./admin/assets/img/product/product-13.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Boots (White Color)</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">19 in stock for 1 variants</td>
                        <td class="align-middle">Sports</td>
                        <td class="align-middle">Nike</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product9">
                                <label class="custom-control-label" for="product9"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100"
                                         src="./admin/assets/img/product/product-14.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Hiking Boots</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">94 in stock for 1 variants</td>
                        <td class="align-middle">Sports</td>
                        <td class="align-middle">Skate</td>
                    </tr>
                    <tr>
                        <td class="width-10 align-middle">
                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                <input type="checkbox" class="custom-control-input" id="product5">
                                <label class="custom-control-label" for="product5"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div
                                        class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                    <img class="mw-100 mh-100"
                                         src="./admin/assets/img/product/product-15.jpg" />
                                </div>
                                <div class="ml-3">
                                    <a href="#">Dress (Pink)</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">23 in stock for 5 variants</td>
                        <td class="align-middle">Dress</td>
                        <td class="align-middle">Sktoe</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-md-flex align-items-center">
                <div class="mr-md-auto text-md-left text-center mb-2 mb-md-0">
                    Showing 1 to 10 of 57 entries
                </div>
                <ul class="pagination mb-0 justify-content-center">
                    <li class="page-item disabled"><a class="page-link">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
