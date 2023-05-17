@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="pb-5">
        <div class="row g-4">
            <div class="col-12 col-xxl-6">
                <div class="mb-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex mb-2">
                                <h3 class="me-auto">Total 50 User</h3>
                                <a title="Back" href="{{ route('user.create') }}" class="btn btn-sm btn-secondary">
                                    <span data-feather="plus"></span>
                                </a>
                            </div>
                       </div>
                        <div class="card-body">
                      <div id="tableExample2" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="table-responsive scrollbar">
                          <table class="table table-striped table-sm fs--1 mb-0">
                            <thead>
                              <tr>
                                <th class="sort border-top ps-3" data-sort="name">Image</th>
                                <th class="sort border-top ps-3" data-sort="name">Name</th>
                                <th class="sort border-top" data-sort="email">Email</th>
                                <th class="sort border-top" data-sort="age">status</th>
                                <th class="sort text-end align-middle pe-0 border-top" scope="col">ACTION</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                                 @foreach ($users as  $user)
                                <tr>
                                <td class="align-middle ps-3 name">
                                    <img style="width:50px;" src="{{ empty($user->image) ? asset("media/avatar_photo.jpg") : asset($user->image) }}" alt="user image">
                                </td>
                                <td class="align-middle ps-3 name">{{ $user->name }}</td>
                                <td class="align-middle email">{{ $user->email }}</td>
                                <td class="align-middle status">
                                     @if ($user->status == 1)
                                        <div class="badge bg-success">Enable</div>
                                        @else
                                        <div class="badge bg-danger">Disable</div>
                                    @endif
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2 bg-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="text-white"> Manage</span></button>
                                         <div class="dropdown-menu dropdown-menu-end py-2">
                                             <a class="dropdown-item " href="{{ route('user.edit', $user->slug) }}"> <span data-feather="edit"></span>Edit</a>
                                             <a id="delete" class="dropdown-item" href="{{ route('user.delete', $user->slug) }}"><span data-feather="trash"></span>Delete</a>
                                               <div class="dropdown-divider"></div>
                                             <a class="dropdown-item text-{{ $user->status ? 'danger' : 'success' }}" href="{{ route('user.status',$user->slug) }}">{{ $user->status ? 'Disable' : 'Enable' }}</a>
                                        </div>
                                    </div>
                               </td>
                              </tr>
                             @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                          <ul class="mb-0 pagination"><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li></ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                        </div>
                      </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
