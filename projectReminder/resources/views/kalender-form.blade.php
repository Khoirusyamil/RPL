<x-modal-action action="{{ $action }}">
        @if ($data->id)
            @method('put')
        @endif
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <input type="date" name="start_date" value="{{ $data->start_date ?? request()->start_date }}" class="form-control">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <input type="date" name="end_date" value="{{ $data->end_date ?? request()->end_date }}" class="form-control">            
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <textarea name="title" class="form-control">{{ $data->title }}</textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="delete" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Delete</label>
                </div>
            </div>
        </div>
    </div>
</x-modal-action>