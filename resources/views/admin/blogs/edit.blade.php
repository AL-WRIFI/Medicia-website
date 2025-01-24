@extends('layouts/layoutMaster')

@section('title', 'تحديث المقالة - التطبيقات')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/quill/typography.scss',
  'resources/assets/vendor/libs/quill/katex.scss',
  'resources/assets/vendor/libs/quill/editor.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/dropzone/dropzone.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/quill/katex.js',
  'resources/assets/vendor/libs/quill/quill.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/dropzone/dropzone.js',
  'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/tagify/tagify.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-product-add.js'
])
@endsection

@section('content')
<div class="app-ecommerce">

  <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
    <div class="d-flex flex-column justify-content-center">
      <h4 class="mb-1">تحديث المقالة</h4>
      <p class="mb-0">تحديث المقالة الحالية</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xl mb-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">تحديث المقالة</h5>
          <small class="text-muted float-end">تحديث</small>
        </div>
        <div class="card-body">
          <form action="{{ route('blogs.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
              <label class="form-label" for="basic-default-fullname">عنوان المقالة</label>
              <input type="text" class="form-control" id="basic-default-fullname" name="title" placeholder="عنوان المقالة" value="{{ $post->title }}" required>
            </div>
            <div class="mb-6">
              <label class="form-label" for="basic-default-upload-file">صورة المقالة</label>
              <input type="file" class="form-control" name="image" id="basic-default-upload-file" accept="image/*"/>
              @if ($post->image_url)
                <img src="{{ $post->image_url }}" alt="صورة المقالة" width="100" class="mt-2">
              @endif
            </div>
            <div class="mb-6">
              <label class="form-label" for="basic-default-message">وصف المقالة</label>
              <textarea id="basic-default-message" class="form-control" name="description" placeholder="وصف المقالة" required>{{ $post->description }}</textarea>
            </div>
            <div class="mb-6">
              <label class="form-label" for="basic-default-status">حالة المقالة</label>
              <select class="form-select" id="basic-default-status" name="status" required>
                <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>منشور</option>
                <option value="0" {{ $post->status == 0 ? 'selected' : '' }}>غير منشور</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">تحديث</button>
          </form>
        </div>
      </div>
    </div>
  </div>  
    
</div>

@endsection