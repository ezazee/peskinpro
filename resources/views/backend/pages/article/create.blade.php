@extends('backend.master.master-app')
@section('title', 'Add Article')
@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Tittle</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div id="snow-editor" style="height: 300px;">
                            </div>
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
                                <input type="file" id="simpleinput" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Tags</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="active"
                                        checked=''>
                                    <label class="form-check-label">
                                        Publish
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="inactive">
                                <label class="form-check-label">
                                    Sheduled
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="start-date" class="form-label text-dark">Date</label>
                                <input type="date" name="start_date" class="form-control flatpickr-input active"
                                    placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="end-date" class="form-label text-dark">Time</label>
                                <input type="time" name="end_date" class="form-control flatpickr-input active"
                                    placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top">
                    <button class="btn btn-primary" type="submit">Create Article</button>
                </div>
            </div>
        </div>
    </div>
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

</script>
@endsection
