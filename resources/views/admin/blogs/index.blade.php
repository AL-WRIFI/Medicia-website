@extends('layouts/layoutMaster')

@section('title', 'قائمة المدونات - التطبيقات')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-product-list.js'
])

<script>
  var createBlogRoute = "{{ route('blogs.create') }}";
</script>
@endsection

@section('content')

<div class="card mb-6">
  <div class="card-widget-separator-wrapper">
    <div class="card-body card-widget-separator">
      <div class="row gy-4 gy-sm-1">
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-4 pb-sm-0">
            <div>
              <p class="mb-1">المقالات المنشورة</p>
              <h4 class="mb-1">{{ $publishedBlogsCount }}</h4>
              <p class="mb-0"><span class="me-2">في آخر 30 يومًا</span><span class="badge bg-label-success">+{{ $publishedBlogsPercentage }}%</span></p>
            </div>
            <span class="avatar me-sm-6">
              <span class="avatar-initial rounded"><i class="ti-28px ti ti-file-text text-heading"></i></span>
            </span>
          </div>
          <hr class="d-none d-sm-block d-lg-none me-6">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-4 pb-sm-0">
            <div>
              <p class="mb-1">إجمالي المشاهدات</p>
              <h4 class="mb-1">{{ $totalViews ?? 76}}</h4>
              <p class="mb-0"><span class="me-2">في آخر 30 يومًا</span><span class="badge bg-label-success">+{{ $viewsPercentage  ?? 26}}%</span></p>
            </div>
            <span class="avatar p-2 me-lg-6">
              <span class="avatar-initial rounded"><i class="ti-28px ti ti-eye text-heading"></i></span>
            </span>
          </div>
          <hr class="d-none d-sm-block d-lg-none">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start border-end pb-4 pb-sm-0 card-widget-3">
            <div>
              <p class="mb-1">المقالات المعلقة</p>
              <h4 class="mb-1">{{ $pendingBlogsCount }}</h4>
              <p class="mb-0">في انتظار المراجعة</p>
            </div>
            <span class="avatar p-2 me-sm-6">
              <span class="avatar-initial rounded"><i class="ti-28px ti ti-clock text-heading"></i></span>
            </span>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <p class="mb-1">المقالات المحذوفة</p>
              <h4 class="mb-1">{{ $deletedBlogsCount ?? 22 }}</h4>
              <p class="mb-0"><span class="me-2">في آخر 30 يومًا</span><span class="badge bg-label-danger">-{{ $deletedBlogsPercentage ?? 45 }}%</span></p>
            </div>
            <span class="avatar p-2">
              <span class="avatar-initial rounded"><i class="ti-28px ti ti-trash text-heading"></i></span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h5 class="card-title">تصفية المقالات</h5>
    <div class="d-flex justify-content-between align-items-center row pt-4 gap-6 gap-md-0">
      <div class="col-md-4 blog_status"></div>
      <div class="col-md-4 blog_visibility"></div>
    </div>
  </div>
  <div class="card-header d-flex flex-wrap py-0 flex-column flex-sm-row">
    <div>
        <div id="DataTables_Table_0_filter" class="dataTables_filter me-3 mb-sm-6 mb-0 ps-0"><label><input
                    type="search" class="form-control ms-0" placeholder="Search Category"
                    aria-controls="DataTables_Table_0"></label></div>
    </div>
    <div class="d-flex justify-content-center justify-content-md-end align-items-baseline">
        <div
            class="dt-action-buttons d-flex justify-content-center flex-md-row align-items-baseline pt-0">
            <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                        name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                        class="form-select ms-0">
                        <option value="7">7</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="70">70</option>
                        <option value="100">100</option>
                    </select></label></div>
            <div class="dt-buttons btn-group flex-wrap"><button
                    class="btn btn-secondary add-new btn-primary ms-2 waves-effect waves-light"
                    tabindex="0" aria-controls="DataTables_Table_0" type="button" onclick="window.location='{{ route('blogs.create') }}'"><span><i
                            class="ti ti-plus ti-xs me-0 me-sm-2"></i><span
                            class="d-none d-sm-inline-block">{{__('Add Sub Category')}}</span></span></button> </div>
        </div>
    </div>
</div>
  <div class="card-datatable table-responsive">
    <table class="datatables-blogs table border-top">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>المقال</th>
          <th>الحالة</th>
          <th>تاريخ النشر</th>
          <th>الإجراءات</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($blogs as $blog)
          <tr>
            <td></td>
            <td><input type="checkbox" class="form-check-input"></td>
            <td>
              <div class="d-flex justify-content-start align-items-center blog-name">
                <div class="avatar-wrapper">
                  <div class="avatar avatar me-4 rounded-2 bg-label-secondary">
                    @if ($blog->image_url)
                      <img src="{{ $blog->image_url }}" alt="Blog-{{ $blog->id }}" class="rounded-2">
                    @else
                      <span class="avatar-initial rounded-2 bg-label-primary">{{ substr($blog->title, 0, 2) }}</span>
                    @endif
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <h6 class="text-nowrap mb-0">{{ $blog->title }}</h6>
                  <small class="text-truncate d-none d-sm-block">{{ Illuminate\Support\Str::limit($blog->description, 50) }}</small>
                </div>
              </div>
            </td>
            <td>
              @if ($blog->status == 1)
                <span class="badge bg-label-success">منشور</span>
              @elseif ($blog->status == 0)
                <span class="badge bg-label-warning">معلق</span>
              @elseif ($blog->status == 2)
                <span class="badge bg-label-danger">محذوف</span>
              @endif
            </td>
            <td>{{ $blog->created_at->format('d M Y') }}</td>
            <td>
              <div class="d-inline-block text-nowrap">
                <button class="btn btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ti ti-edit" onclick="window.location='{{ route('blogs.edit', $blog->id) }}'"></i></button>
                <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></button>
                <div class="dropdown-menu dropdown-menu-end m-0">
                  {{-- <a href="javascript:0;" class="dropdown-item">عرض</a> --}}
                  {{-- <a href="javascript:0;" class="dropdown-item">تعليق</a> --}}
                  <a href="{{ route('blogs.destroy', $blog->id)}}" class="dropdown-item">حذف</a>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection