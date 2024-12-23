@extends('backend.master.master-app')
@section('title', 'Add Article')
@section('content')
<div class="container-xxl">
    <form action="{{ route('article.add') }}" method="POST" enctype="multipart/form-data" id="contentForm">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Title</label>
                                    <input type="text" name="tittle" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div id="snow-editor" style="height: 300px;"></div>
                                <input type="hidden" id="editor-content" name="content">
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
                                    <input type="file" name="images" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Tags</label>
                                    <input type="text" name="tags" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <button class="btn btn-primary" type="submit">Create Article</button>
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
                                    <input type="text" name="keyword" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Deskriptions</label>
                                <input type="text" name="description" class="form-control">
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

    document.getElementById('contentForm').addEventListener('submit', function () {
        var editorContent = document.getElementById('snow-editor').getElementsByClassName('ql-editor')[0]
            .innerHTML;
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
