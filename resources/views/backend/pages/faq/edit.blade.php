@extends('backend.master.master-app')
@section('title', 'Edit FAQ')
@section('content')
<div class="container-xxl">
    <form action="{{ route('faq.update', $faq->id) }}" method="POST" id="faqForm">
        @csrf
        @method('PUT') <!-- HTTP method override to PUT for update -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $faq->title) }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div id="snow-editor" style="height: 300px;">{!! old('description', $faq->description) !!}</div>
                                <input type="hidden" id="editor-content" name="description" value="{{ old('description', $faq->description) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- New category input -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="new-category" class="form-label">Add New Category</label>
                                    <input type="text" id="new-category" name="new_kategori_faq" class="form-control" placeholder="Enter new category" value="">
                                </div>
                            </div>
                        
                            <!-- Existing category select -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="existing-category" class="form-label">Or Choose Existing Category</label>
                                    <select name="kategori_faq" id="existing-category" class="form-control">
                                        <option value="" disabled>Select an existing category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" 
                                                @if($faq->kategori_faq_id == $category->id) selected @endif>
                                                {{ $category->nama_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <button class="btn btn-primary" type="submit">Update FAQ</button>
                        <a href="{{ route('faq.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<script>
    var quill = new Quill('#snow-editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'script': 'super' }, { 'script': 'sub' }],
                [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
                ['direction', { 'align': [] }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        },
    });

    document.getElementById('faqForm').addEventListener('submit', function () {
        var editorContent = document.getElementById('snow-editor').getElementsByClassName('ql-editor')[0]
            .innerHTML;
        document.getElementById('editor-content').value = editorContent;
    });
</script>
@endsection
