@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.student.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.students.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="full_name">{{ trans('cruds.student.fields.full_name') }}</label>
                <input class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}" type="text" name="full_name" id="full_name" value="{{ old('full_name', '') }}" required>
                @if($errors->has('full_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('full_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.full_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.student.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address') }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="post_code">{{ trans('cruds.student.fields.post_code') }}</label>
                <input class="form-control {{ $errors->has('post_code') ? 'is-invalid' : '' }}" type="text" name="post_code" id="post_code" value="{{ old('post_code', '') }}" required>
                @if($errors->has('post_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('post_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.post_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_no">{{ trans('cruds.student.fields.contact_no') }}</label>
                <input class="form-control {{ $errors->has('contact_no') ? 'is-invalid' : '' }}" type="text" name="contact_no" id="contact_no" value="{{ old('contact_no', '') }}" required>
                @if($errors->has('contact_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.student.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_birth">{{ trans('cruds.student.fields.date_of_birth') }}</label>
                <input class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" type="text" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}">
                @if($errors->has('date_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.date_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ni_no">{{ trans('cruds.student.fields.ni_no') }}</label>
                <input class="form-control {{ $errors->has('ni_no') ? 'is-invalid' : '' }}" type="text" name="ni_no" id="ni_no" value="{{ old('ni_no', '') }}">
                @if($errors->has('ni_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ni_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.ni_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_entry">{{ trans('cruds.student.fields.date_of_entry') }}</label>
                <input class="form-control date {{ $errors->has('date_of_entry') ? 'is-invalid' : '' }}" type="text" name="date_of_entry" id="date_of_entry" value="{{ old('date_of_entry') }}">
                @if($errors->has('date_of_entry'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_entry') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.date_of_entry_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="referred_by">{{ trans('cruds.student.fields.referred_by') }}</label>
                <input class="form-control {{ $errors->has('referred_by') ? 'is-invalid' : '' }}" type="text" name="referred_by" id="referred_by" value="{{ old('referred_by', '') }}">
                @if($errors->has('referred_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('referred_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.referred_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.student.fields.employment_status') }}</label>
                <select class="form-control {{ $errors->has('employment_status') ? 'is-invalid' : '' }}" name="employment_status" id="employment_status">
                    <option value disabled {{ old('employment_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Student::EMPLOYMENT_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('employment_status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('employment_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employment_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.employment_status_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('campus') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="campus" value="0">
                    <input class="form-check-input" type="checkbox" name="campus" id="campus" value="1" {{ old('campus', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="campus">{{ trans('cruds.student.fields.campus') }}</label>
                </div>
                @if($errors->has('campus'))
                    <div class="invalid-feedback">
                        {{ $errors->first('campus') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.campus_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('course_applying_for') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="course_applying_for" value="0">
                    <input class="form-check-input" type="checkbox" name="course_applying_for" id="course_applying_for" value="1" {{ old('course_applying_for', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="course_applying_for">{{ trans('cruds.student.fields.course_applying_for') }}</label>
                </div>
                @if($errors->has('course_applying_for'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_applying_for') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.course_applying_for_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_title">{{ trans('cruds.student.fields.course_title') }}</label>
                <input class="form-control {{ $errors->has('course_title') ? 'is-invalid' : '' }}" type="text" name="course_title" id="course_title" value="{{ old('course_title', '') }}">
                @if($errors->has('course_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.course_title_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('course_time_table') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="course_time_table" value="0">
                    <input class="form-check-input" type="checkbox" name="course_time_table" id="course_time_table" value="1" {{ old('course_time_table', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="course_time_table">{{ trans('cruds.student.fields.course_time_table') }}</label>
                </div>
                @if($errors->has('course_time_table'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_time_table') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.course_time_table_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.student.fields.sessions') }}</label>
                @foreach(App\Models\Student::SESSIONS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('sessions') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="sessions_{{ $key }}" name="sessions" value="{{ $key }}" {{ old('sessions', '') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="sessions_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('sessions'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sessions') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.sessions_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="previous_study">{{ trans('cruds.student.fields.previous_study') }}</label>
                <input class="form-control {{ $errors->has('previous_study') ? 'is-invalid' : '' }}" type="text" name="previous_study" id="previous_study" value="{{ old('previous_study', '') }}">
                @if($errors->has('previous_study'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_study') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.previous_study_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('availibility') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="availibility" value="0">
                    <input class="form-check-input" type="checkbox" name="availibility" id="availibility" value="1" {{ old('availibility', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="availibility">{{ trans('cruds.student.fields.availibility') }}</label>
                </div>
                @if($errors->has('availibility'))
                    <div class="invalid-feedback">
                        {{ $errors->first('availibility') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.availibility_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('qualifications') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="qualifications" value="0">
                    <input class="form-check-input" type="checkbox" name="qualifications" id="qualifications" value="1" {{ old('qualifications', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="qualifications">{{ trans('cruds.student.fields.qualifications') }}</label>
                </div>
                @if($errors->has('qualifications'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qualifications') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.qualifications_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emergency_contact_name">{{ trans('cruds.student.fields.emergency_contact_name') }}</label>
                <input class="form-control {{ $errors->has('emergency_contact_name') ? 'is-invalid' : '' }}" type="text" name="emergency_contact_name" id="emergency_contact_name" value="{{ old('emergency_contact_name', '') }}">
                @if($errors->has('emergency_contact_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emergency_contact_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.emergency_contact_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emergency_contact_phone">{{ trans('cruds.student.fields.emergency_contact_phone') }}</label>
                <input class="form-control {{ $errors->has('emergency_contact_phone') ? 'is-invalid' : '' }}" type="text" name="emergency_contact_phone" id="emergency_contact_phone" value="{{ old('emergency_contact_phone', '') }}">
                @if($errors->has('emergency_contact_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emergency_contact_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.emergency_contact_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emergency_contact_relation">{{ trans('cruds.student.fields.emergency_contact_relation') }}</label>
                <input class="form-control {{ $errors->has('emergency_contact_relation') ? 'is-invalid' : '' }}" type="text" name="emergency_contact_relation" id="emergency_contact_relation" value="{{ old('emergency_contact_relation', '') }}">
                @if($errors->has('emergency_contact_relation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emergency_contact_relation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.emergency_contact_relation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="documents">{{ trans('cruds.student.fields.documents') }}</label>
                <div class="needsclick dropzone {{ $errors->has('documents') ? 'is-invalid' : '' }}" id="documents-dropzone">
                </div>
                @if($errors->has('documents'))
                    <div class="invalid-feedback">
                        {{ $errors->first('documents') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.documents_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="references">{{ trans('cruds.student.fields.references') }}</label>
                <textarea class="form-control {{ $errors->has('references') ? 'is-invalid' : '' }}" name="references" id="references">{{ old('references') }}</textarea>
                @if($errors->has('references'))
                    <div class="invalid-feedback">
                        {{ $errors->first('references') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.references_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var uploadedDocumentsMap = {}
Dropzone.options.documentsDropzone = {
    url: '{{ route('admin.students.storeMedia') }}',
    maxFilesize: 40, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 40
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="documents[]" value="' + response.name + '">')
      uploadedDocumentsMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentsMap[file.name]
      }
      $('form').find('input[name="documents[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($student) && $student->documents)
          var files =
            {!! json_encode($student->documents) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="documents[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection