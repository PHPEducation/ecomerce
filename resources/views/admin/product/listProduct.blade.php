@extends('master_admin')
@section('content')
<div id="wrapper">
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.Product') }}
                        <small>{{ trans('home_admin.List') }}</small>
                    </h1>
                    <a href="{{ route('addProduct') }}" class="a_add">Add Product</a>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>{{ trans('home_admin.ID') }}</th>
                            <th>{{ trans('home_admin.Name') }}</th>
                            <th>{{ trans('home_admin.Category_id') }}</th>
                            <th>{{ trans('home_admin.Description') }}</th>
                            <th>{{ trans('home_admin.Price') }}</th>
                            <th>{{ trans('home_admin.Promotion_Price') }}</th>
                            <th>{{ trans('home_admin.Image') }}</th>
                            <th>{{ trans('home_admin.Unit') }}</th>
                            <th>{{ trans('home_admin.Delete') }}</th>
                            <th>{{ trans('home_admin.Edit') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->promotion_price }}</td>
                            <td><img class="img_ava" src="{{ asset("storage/img/products/$product->image" ) }}"></td>
                            <td>{{ $product->unit }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/product/delete/{{ $product->id }}"> {{ trans('home_admin.Delete') }}</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/product/editProduct/{{ $product->id }}">{{ trans('home_admin.Edit') }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <div class="paginate">
            {{ $products->links() }}
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
