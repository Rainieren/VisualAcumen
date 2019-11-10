@extends('layouts.sidebar')

@section('content')
{{--    <div class="container">--}}
        <h4>Admin preferences</h4>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @for($i = 0; $i < 6; $i++)
                                <div class="col-md-6 my-2">
                                    <a href="">
                                        <div class="card card-shadow">
                                            <div class="card-body text-center">
                                                <i class="fal fa-window-maximize mb-4" style="font-size: 42px;"></i>
                                                <p class="m-0">General Settings</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <form method="POST" action="{{ route('saveSidebar') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group form-row p-3">
                                        <div class="col-10">
                                            <h3>Enable custom sidebar</h3>
                                            <small class="m-0">Enable customization of the sidebar</small>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-end">
                                            <select name="sidebar_customization" class="form-control" id="sidebar_customization">
                                                <option selected>No</option>
                                                <option value="">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 form-row p-3">
                                        <div class="col-10">
                                            <h4>Color</h4>
                                            <small class="m-0">Change the color of your company sidebar</small>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-end">
                                            <input name="background_color" class="form-control" type="text" value="{{ Auth::user()->company->sidebar->background_color }}" placeholder="#00000">
                                        </div>
                                    </div>
                                    <div class="form-group form-row p-3">
                                        <div class="col-10">
                                            <h4>Text color</h4>
                                            <small class="m-0">Change the color of the text + icons</small>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-end">
                                            <input name="text_color" class="form-control" type="text" value="{{ Auth::user()->company->sidebar->text_color }}" placeholder="#00000">
                                        </div>
                                    </div>
                                    <div class="form-group form-row p-3">
                                        <div class="col-10">
                                            <h4>Item active background</h4>
                                            <small class="m-0">Change the background color of the active state</small>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-end">
                                            <input name="active_background" class="form-control" type="text" value="{{ Auth::user()->company->sidebar->active_background }}" placeholder="#00000">
                                        </div>
                                    </div>

                                    <div class="form-group form-row p-3">
                                        <div class="col-10">
                                            <h4>Item hover background</h4>
                                            <small class="m-0">Change the background color on hover</small>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-end">
                                            <input name="hover_background" class="form-control" type="text" value="{{ Auth::user()->company->sidebar->hover_background }}" placeholder="#00000">
                                        </div>
                                    </div>

                                    <div class="form-group p-3">
{{--                                        <small>These settings are being saved on the blablabla relevant information to make it look smart</small>--}}
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
{{--    </div>--}}
@endsection
