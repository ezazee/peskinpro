@extends('backend.master.master-app')
@section('title', 'Edit Article')
@section('content')
<div class="container-xxl">
    <form action="{{ route('article.update', $articles->id) }} " method="POST" enctype="multipart/form-data" id="contentForm">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Title</label>
                                    <input type="text" name="tittle" class="form-control" value="{{ old('tittle', $articles->tittle) }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div id="snow-editor" style="height: 550px;"></div>
                                <input type="hidden" id="editor-content" name="content" value="{{ old('content', $articles->content) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Images</label>
                                    <input type="file" name="images" class="form-control">
                                    <img src="front-image-preview" alt="" class="img-fluid rounded bg-light">
                                    <img id="back-image-preview" src="{{ asset('storage/'.$articles->images) }}" alt="" class="img-fluid rounded bg-light" style="display: block;">
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Tags</label>
                                    <input type="text" name="tags" class="form-control" value="{{ isset($articles) ? implode(',', $articles->tag->pluck('nama_tags')->toArray()) : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6" id="date-field" style="display: none;">
                                <div class="mb-3">
                                    <label for="start-date" class="form-label text-dark">Date</label>
                                    <input type="date" name="start_date" class="form-control flatpickr-input active" value="{{ old('start_date', $articles->start_date) }}">
                                </div>
                            </div>
                            <div class="col-lg-6" id="time-field" style="display: none;">
                                <div class="mb-3">
                                    <label for="end-date" class="form-label text-dark">Time</label>
                                    <input type="time" name="start_time" class="form-control flatpickr-input active" value="{{ old('start_time', $articles->start_time) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <button class="btn btn-success" type="submit">Update Article</button>
                        <a href="{{ route('article.list') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h4 class="card-title">Seo</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Keyword</label>
                                    <input type="text" name="keyword" class="form-control" value="{{ old('keyword', $articles->keyword) }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Deskriptions</label>
                                <input type="text" name="description" class="form-control"  value="{{ old('description', $articles->description) }}">
                            </div>
                        </div>
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
            'toolbar': [
                ['bold', 'italic', 'underline', 'strike'],
                [{
                    'color': []
                }, {
                    'background': []
                }],
                [{
                    'script': 'super'
                }, {
                    'script': 'sub'
                }],
                [{
                    'header': [false, 1, 2, 3, 4, 5, 6]
                }, 'blockquote', 'code-block'],
                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }, {
                    'indent': '-1'
                }, {
                    'indent': '+1'
                }],
                ['direction', {
                    'align': []
                }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        },
    });

    var existingContent = document.getElementById('editor-content').value;
    quill.clipboard.dangerouslyPasteHTML(existingContent);

    document.getElementById('contentForm').addEventListener('submit', function() {
        var editorContent = document.querySelector('#snow-editor .ql-editor').innerHTML;

        document.getElementById('editor-content').value = editorContent;
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dateField = document.getElementById('date-field');
        const timeField = document.getElementById('time-field');
        const publicRadio = document.getElementById('status-public');
        const scheduledRadio = document.getElementById('status-scheduled');

        function toggleScheduledFields() {
            if (scheduledRadio.checked) {
                dateField.style.display = 'block'; 
                timeField.style.display = 'block'; 
            } else {
                dateField.style.display = 'none'; 
                timeField.style.display = 'none'; 
            }
        }

        toggleScheduledFields();
        publicRadio.addEventListener('change', toggleScheduledFields);
        scheduledRadio.addEventListener('change', toggleScheduledFields);
    });
</script>
@endsection