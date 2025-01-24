@extends('layouts/layoutMaster')

@section('title', 'إضافة مقالة جديدة - التطبيقات')

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

@section('content')
<div class="app-ecommerce">

  <!-- Add Blog -->
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
    <div class="d-flex flex-column justify-content-center">
      <h4 class="mb-1">إضافة مقالة جديدة</h4>
      <p class="mb-0">إدارة المقالات المنشورة على موقعك</p>
    </div>
    <div class="d-flex align-content-center flex-wrap gap-4">
      <div class="d-flex gap-4">
        <button class="btn btn-label-secondary">إلغاء</button>
        <button class="btn btn-label-primary">حفظ كمسودة</button>
      </div>
      <button type="submit" form="blog-form" class="btn btn-primary">نشر المقالة</button>
    </div>
  </div>

  <!-- Form -->
  <form id="blog-form" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="image_path" id="image-path"> 

    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-tile mb-0">معلومات المقالة</h5>
          </div>
          <div class="card-body">
            <div class="mb-6">
              <label class="form-label" for="blog-title">عنوان المقالة</label>
              <input type="text" class="form-control" id="blog-title" placeholder="عنوان المقالة" name="title" aria-label="عنوان المقالة" required>
            </div>
            <div class="mb-6">
              <label class="form-label" for="basic-default-upload-file">صورة المقالة</label>
              <input type="file" class="form-control" name="image" id="basic-default-upload-file" accept="image/*" required/>
            </div>
            {{-- <div class="mb-6">
              <label class="form-label" for="blog-summary">ملخص المقالة</label>
              <textarea class="form-control" id="blog-summary" placeholder="ملخص المقالة" name="summary" aria-label="ملخص المقالة"></textarea>
            </div> --}}
            <div class="mb-6">
              <label class="form-label" for="blog-description">وصف المقالة</label>
              <textarea class="form-control" id="blog-description" placeholder="وصف المقالة" name="description" aria-label="وصف المقالة"></textarea>
            </div>
            <div class="mb-6">
              <label class="form-label" for="blog-status">حالة المقالة</label>
              <select class="form-select" id="blog-status" name="status" required>
                <option value="1">منشور</option>
                <option value="0">غير منشور</option>
              </select>
            </div>
          </div>
        </div>
        <!-- /Blog Information -->
      </div>
      <!-- /First column -->

      <!-- Second column -->
     
      <!-- /Second column -->
    </div>

    <!-- Save Button -->
    {{-- <div class="text-end mt-4">
      <button type="submit" class="btn btn-primary">حفظ المقالة</button>
    </div> --}}
  </form>
  <!-- /Form -->
</div>

<script>
  'use strict';

  // Dropzone
  const previewTemplate = `<div class="dz-preview dz-file-preview">
    <div class="dz-details">
      <div class="dz-thumbnail">
        <img data-dz-thumbnail>
        <span class="dz-nopreview">No preview</span>
        <div class="dz-success-mark"></div>
        <div class="dz-error-mark"></div>
        <div class="dz-error-message"><span data-dz-errormessage></span></div>
        <div class="progress">
          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
        </div>
      </div>
      <div class="dz-filename" data-dz-name></div>
      <div class="dz-size" data-dz-size></div>
    </div>
  </div>`;

  const dropzoneBasic = document.querySelector('#dropzone-basic');
  if (dropzoneBasic) {
    const myDropzone = new Dropzone(dropzoneBasic, {
      url: "{{ route('blogs.store') }}", // Route الخاص برفع الصور
      paramName: "image", // اسم الحقل الذي سيتم إرسال الصورة عبره
      maxFilesize: 5, // الحد الأقصى لحجم الملف
      acceptedFiles: '.jpg,.jpeg,.png,.gif', // أنواع الملفات المقبولة
      addRemoveLinks: true, // إظهار رابط لإزالة الملف
      maxFiles: 1, // الحد الأقصى لعدد الملفات
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // إضافة CSRF Token
      },
      init: function () {
        this.on("success", function (file, response) {
          console.log("File uploaded successfully:", response);
          // تخزين مسار الصورة في الحقل المخفي
          document.getElementById('image-path').value = response.path;
        });
        this.on("error", function (file, errorMessage) {
          console.error("Error uploading file:", errorMessage);
        });
      }
    });
  }
</script>

@endsection