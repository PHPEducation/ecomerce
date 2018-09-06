@extends('master_admin')
@section('content')
<div id="wrapper">
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.User') }}
                        <small>{{ trans('home_admin.List') }}</small>
                    </h1>
                    <a href="{{ route('addUser') }}" class="a_add">Add User</a>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>{{ trans('home_admin.ID') }}</th>
                            <th>{{ trans('home_admin.Username') }}</th>
                            <th>{{ trans('home_admin.Email') }}</th>
                            <th>{{ trans('home_admin.Phone') }}</th>
                            <th>{{ trans('home_admin.Address') }}</th>
                            <th>{{ trans('home_admin.Note') }}</th>
                            <th>{{ trans('home_admin.Role') }}</th>
                            <th>{{ trans('home_admin.Avatar') }}</th>
                            <th>{{ trans('home_admin.Delete') }}</th>
                            <th>{{ trans('home_admin.Edit') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->note }}</td>
                            <td>{{ $user->role }}</td>
                            <td><img class="img_ava" src="{{ asset("storage/img/users/$user->avatar" ) }}"></td>
                               {{--  @if($user->role == 1)
                                    {{ "Admin" }}
                                @else
                                {{ "Member" }}
                                @endif
                            <td>{{ $user->avatar }}</td> --}}
                            <td class="center">
                                <i class="fa fa-trash-o  fa-fw"></i>
                                <a href="javascript:;" onclick="confirmRemove('{{ route('deleteUser', ['id' => $user->id]) }}')">{{ trans('home_admin.Delete') }}</a>
                            </td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/users/editUser/{{ $user->id }}">{{ trans('home_admin.Edit') }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <div class="paginate">
            {{ $users->links() }}
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
