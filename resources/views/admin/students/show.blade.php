@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.student.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.students.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.id') }}
                        </th>
                        <td>
                            {{ $student->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.full_name') }}
                        </th>
                        <td>
                            {{ $student->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.address') }}
                        </th>
                        <td>
                            {{ $student->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.post_code') }}
                        </th>
                        <td>
                            {{ $student->post_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.contact_no') }}
                        </th>
                        <td>
                            {{ $student->contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.email') }}
                        </th>
                        <td>
                            {{ $student->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.date_of_birth') }}
                        </th>
                        <td>
                            {{ $student->date_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.ni_no') }}
                        </th>
                        <td>
                            {{ $student->ni_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.date_of_entry') }}
                        </th>
                        <td>
                            {{ $student->date_of_entry }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.referred_by') }}
                        </th>
                        <td>
                            {{ $student->referred_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.employment_status') }}
                        </th>
                        <td>
                            {{ App\Models\Student::EMPLOYMENT_STATUS_SELECT[$student->employment_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.campus') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $student->campus ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.course_applying_for') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $student->course_applying_for ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.course_title') }}
                        </th>
                        <td>
                            {{ $student->course_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.course_time_table') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $student->course_time_table ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.sessions') }}
                        </th>
                        <td>
                            {{ App\Models\Student::SESSIONS_RADIO[$student->sessions] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.previous_study') }}
                        </th>
                        <td>
                            {{ $student->previous_study }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.availibility') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $student->availibility ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.qualifications') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $student->qualifications ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.emergency_contact_name') }}
                        </th>
                        <td>
                            {{ $student->emergency_contact_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.emergency_contact_phone') }}
                        </th>
                        <td>
                            {{ $student->emergency_contact_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.emergency_contact_relation') }}
                        </th>
                        <td>
                            {{ $student->emergency_contact_relation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.documents') }}
                        </th>
                        <td>
                            @foreach($student->documents as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.references') }}
                        </th>
                        <td>
                            {{ $student->references }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.students.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection