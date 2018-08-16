@extends('master_admin')
@section('content')
<div id="wrapper">
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.Category') }}
                        <small>{{ trans('home_admin.List') }}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>{{ trans('home_admin.ID') }}</th>
                            <th>{{ trans('home_admin.Name') }}</th>
                            <th>{{ trans('home_admin.Slug') }}</th>
                            <th>{{ trans('home_admin.Delete') }}</th>
                            <th>{{ trans('home_admin.Edit') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX" align="center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="center">
                                <i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('home_admin.Delete') }}</a>
                            </td>
                            <td class="center">
                                <i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('home_admin.Edit') }}</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX" align="center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="center">
                                <i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('home_admin.Delete') }}</a>
                            </td>
                            <td class="center">
                                <i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('home_admin.Edit') }}</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX" align="center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="center">
                                <i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('home_admin.Delete') }}</a>
                            </td>
                            <td class="center">
                                <i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('home_admin.Edit') }}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
