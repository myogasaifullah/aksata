@extends('layouts.master')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Users</h6>
        </nav>
        
            <ul class="navbar-nav  justify-content-end">
                

                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            Payment successfully completed
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Authors table</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="col-6 text-start ps-3">
            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#addUserModal">
              <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah User
            </button>
          </div>
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $user->created_at->format('d/m/Y') }}</span>
                  </td>
                  <td class="align-middle d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-link text-dark px-3 mb-0 edit-user-btn"
                      data-bs-toggle="modal" data-bs-target="#editUserModal"
                      data-id="{{ $user->id }}"
                      data-name="{{ $user->name }}"
                      data-email="{{ $user->email }}">
                      <i class="material-icons text-sm me-2">edit</i>Edit
                    </button>
                    <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0 delete-user-btn"
                      data-id="{{ $user->id }}">
                      <i class="material-icons text-sm me-2">delete</i>Delete
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add User Modal -->
  <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="{{ route('admin.users.store') }}">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="userName">Name</label>
              <input type="text" class="form-control" id="userName" name="name" required autofocus>
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="userEmail">Email</label>
              <input type="email" class="form-control" id="userEmail" name="email" required>
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="userPassword">Password</label>
              <input type="password" class="form-control" id="userPassword" name="password" required>
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="userPasswordConfirmation">Confirm Password</label>
              <input type="password" class="form-control" id="userPasswordConfirmation" name="password_confirmation" required>
            </div>
            <div class="form-check form-check-info text-start ps-0 mb-3">
              <input class="form-check-input" type="checkbox" value="" id="termsCheck" checked>
              <label class="form-check-label" for="termsCheck">
                I agree to the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
              </label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editUserForm" method="POST" action="">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="input-group input-group-outline mb-3">
            <label class="form-label" for="editUserName">Name</label>
            <input type="text" class="form-control" id="editUserName" name="name" required autofocus>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label" for="editUserEmail">Email</label>
            <input type="email" class="form-control" id="editUserEmail" name="email" required>
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label" for="editUserPassword">Password (leave blank to keep current)</label>
            <input type="password" class="form-control" id="editUserPassword" name="password">
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label" for="editUserPasswordConfirmation">Confirm Password</label>
            <input type="password" class="form-control" id="editUserPasswordConfirmation" name="password_confirmation">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update User</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="deleteUserForm" method="POST" action="">
        @csrf
        @method('DELETE')
        <div class="modal-header">
          <h5 class="modal-title" id="deleteUserModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this user?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const editUserModal = document.getElementById('editUserModal');
    const editUserForm = document.getElementById('editUserForm');
    const deleteUserForm = document.getElementById('deleteUserForm');

    document.querySelectorAll('.edit-user-btn').forEach(button => {
      button.addEventListener('click', function() {
        const userId = this.getAttribute('data-id');
        const userName = this.getAttribute('data-name');
        const userEmail = this.getAttribute('data-email');

        editUserForm.action = `/users/${userId}`;
        editUserForm.querySelector('#editUserName').value = userName;
        editUserForm.querySelector('#editUserEmail').value = userEmail;
        editUserForm.querySelector('#editUserPassword').value = '';
        editUserForm.querySelector('#editUserPasswordConfirmation').value = '';
      });
    });

    // Delete user button handler
    document.querySelectorAll('.delete-user-btn').forEach(button => {
      button.addEventListener('click', function() {
        const userId = this.getAttribute('data-id');
        deleteUserForm.action = `/users/${userId}`;
        const deleteUserModal = new bootstrap.Modal(document.getElementById('deleteUserModal'));
        deleteUserModal.show();
      });
    });
  });
</script>

@endsection