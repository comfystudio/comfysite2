@extends('layouts.admin')

@section('content')
    <!-- Page content -->
    <div id="page-content">
        <!-- Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Work</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li><a href="/admin/works/">Work</a></li>
                            <li>@if(isset($works)) Edit @else Add @endif</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- General Elements Block -->
        <div class="block">
            <!-- General Elements Title -->
            <div class="block-title">
                <h2>@if(isset($works)) Edit @else Add @endif Work</h2>
            </div>
            <!-- END General Elements Title -->
            @include('partials.admin.error-form')

            @include('partials.admin.success')
            <!-- General Elements Content -->
            <form action="/admin/works/{{isset($works) ? 'edit/'.$works->id : 'create'}}" method="POST" class="form-horizontal form-bordered">
                {{ csrf_field() }}

                <div class="form-group @if($errors->has('title')) error @endif">
                    <label class="col-md-2 control-label" for="name">Title <span class="text-danger">*</span></label>
                    <div class="col-md-5">
                        <input type="text" id="title" name="title" class="form-control" value="@if(old('title')){{old('title')}} @elseif(isset($works->title)){{$works->title}}@endif">
                    </div>
                </div>

                <div class="form-group @if($errors->has('text')) error @endif">
                    <label class="col-md-2 control-label" for="headline">Text <span class="text-danger">*</span></label>
                    <div class="col-md-5">
                        <textarea id="text" name="text" rows="7" class="ckeditor" >@if(old('text')){{old('text')}} @elseif(isset($works->text)){{$works->text}}@endif</textarea>
                    </div>
                </div>

                <div class="form-group @if($errors->has('client')) error @endif">
                    <label class="col-md-2 control-label" for="name">Client Name <span class="text-danger">*</span></label>
                    <div class="col-md-5">
                        <input type="text" id="client" name="client" class="form-control" value="@if(old('client')){{old('client')}} @elseif(isset($works->client)){{$works->client}}@endif">
                    </div>
                </div>

                <div class="form-group @if($errors->has('link')) error @endif">
                    <label class="col-md-2 control-label" for="name">Site Link</label>
                    <div class="col-md-5">
                        <input type="text" id="link" name="link" class="form-control" value="@if(old('link')){{old('link')}} @elseif(isset($works->link)){{$works->link}}@endif">
                    </div>
                </div>

                <div class="form-group @if($errors->has('date')) error @endif">
                    <label class="col-md-2 control-label" for="date">Date Completed</label>
                    <div class="col-md-5">
                        <input type="text" id="date" name="date" class="form-control input-datepicker" data-date-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" value="@if(old('date')){{old('date')}} @elseif(isset($works->date)){{$works->date}}@endif">
                    </div>
                </div>

                <div class="form-group @if($errors->has('meta_title')) error @endif">
                    <label class="col-md-2 control-label" for="name">Meta Title</label>
                    <div class="col-md-5">
                        <input type="text" id="meta_title" name="meta_title" class="form-control" value="@if(old('meta_title')){{old('meta_title')}} @elseif(isset($works->meta_title)){{$works->meta_title}}@endif">
                    </div>
                </div>

                <div class="form-group @if($errors->has('meta_description')) error @endif">
                    <label class="col-md-2 control-label" for="headline">Meta Description</label>
                    <div class="col-md-5">
                        <textarea id="text" name="meta_description" rows="7" class="ckeditor" >@if(old('meta_description')){{old('meta_description')}} @elseif(isset($works->meta_description)){{$works->meta_description}}@endif</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="is_active">Is Active</label>
                    <input type="hidden" name="is_active" value="0">
                    <div class="col-md-5">
                        <div class="checkbox">
                            <label for="is_active" class="switch switch-primary"><input type="checkbox" name="is_active" id="is_active" value="1" @if((old('is_active') && old('is_active') != 0)  || (isset($works->is_active) && $works->is_active != 0) || (!isset($works->id))) checked = "checked" @endif><span></span></label>
                        </div>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-5 col-md-offset-2">
                        <input type="submit" name="save" class="btn btn-effect-ripple btn-primary loader" value="@if(isset($works)) Update @else Save @endif">
                        <a href = "{{ URL::previous() }}" type="submit" name="cancel" class="btn btn-effect-ripple btn-danger loader">Cancel</a>
                    </div>
                </div>
            </form>
            <!-- END General Elements Content -->
        </div>
        <!-- END General Elements Block -->
    </div>
    <!-- END Page Content -->
@stop