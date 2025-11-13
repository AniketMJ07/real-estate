@extends('layouts.master')
@section('title')
    Pages
@endsection
@section('main_content')
    @include('widgets.loader')
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin Area</a></li>
                                <li class="breadcrumb-item" aria-current="page">Pages</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Pages</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Pages</h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#createPageModal">
                                    <i class="feather icon-plus"></i> Create Page
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach($pages as $page)
                                            <tr>
                                                <td>{{ $page->title }}</td>
                                                <td>{{ $page->slug }}</td>
                                                <td>{{ $page->created_at->format('Y-m-d h:i A') }}</td>
                                                <td>{{ $page->updated_at->format('Y-m-d h:i A') }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary editPageBtn" data-bs-toggle="modal"
                                                        data-bs-target="#createPageModal" data-id="{{ $page->id }}"
                                                        data-data="{{ json_encode($page) }}">
                                                        <i class="feather icon-edit"></i>
                                                    </button>
                                                    <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </form>
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
        </div>
    </div>
@endsection
@push('modals')
    <div class="modal fade" id="createPageModal" tabindex="-1" aria-labelledby="createPageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="createPageModalLabel">Create New Page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.pages.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="id" id="pageId">
                        <div class="mb-3">
                            <label for="pageTitle" class="form-label">Page Title</label>
                            <input type="text" class="form-control" id="pageTitle" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="pageSlug" class="form-label">Page Slug</label>
                            <input type="text" class="form-control" id="pageSlug" name="slug" required>
                        </div>
                        <div class="mb-3">
                            <label for="pageContent" class="form-label">Page Content</label>
                            <textarea id="content" name="content" class="tox-target"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="metaTitle" class="form-label">Meta Title</label>
                            <input type="text" class="form-control" id="metaTitle" name="meta_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="metaDescription" class="form-label">Meta Description</label>
                            <textarea class="form-control" id="metaDescription" name="meta_description" rows="3"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="metaKeywords" class="form-label">Meta Keywords</label>
                            <textarea class="form-control" id="metaKeywords" name="meta_keywords" rows="3"
                                required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="createPageBtn">Create Page</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush
@push('scripts')
    <script src="{{ asset('assets/js/plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            tinymce.init({
                height: '400',
                selector: '#content',
                content_style: 'body { font-family: "Inter", sans-serif; }',
                menubar: false,
                toolbar: [
                    'styleselect fontselect fontsizeselect',
                    'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                    'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'
                ],
                plugins: 'advlist autolink link image lists charmap print preview code'
            });

            $(document).on('click', '.editPageBtn', function () {
                var pageData = $(this).data('data');
                $('#createPageModal').find('#createPageModalLabel').text("Edit Page: " + pageData.title);
                $('#createPageModal').find('#pageId').val(pageData.id);
                $('#createPageModal').find('#pageTitle').val(pageData.title);
                $('#createPageModal').find('#pageSlug').val(pageData.slug);
                tinymce.get('content').setContent(pageData.content);
                $('#createPageModal').find('#metaTitle').val(pageData.meta_title);
                $('#createPageModal').find('#metaDescription').val(pageData.meta_description);
                $('#createPageModal').find('#metaKeywords').val(pageData.meta_keywords);
                $('#createPageModal').find('form').attr('action', '{{ route('admin.pages.update', ':id') }}'.replace(':id', pageData.id));
                $('#createPageModal').find('form').append('<input type="hidden" name="_method" value="PUT">');
                $('#createPageModal').find('#createPageBtn').text('Update Page');
            });

            $('#createPageModal').on('hidden.bs.modal', function () {
                $(this).find('form')[0].reset();
                tinymce.get('content').setContent('');
                $('#createPageModal').find('#createPageModalLabel').text("Create New Page");
                $(this).find('form').attr('action', '{{ route("admin.pages.store") }}');
                $('#createPageModal').find('#createPageBtn').text('Create Page');
                $('#createPageModal').find('form').find('input[name="_method"]').remove();
            });
        });
    </script>
@endpush