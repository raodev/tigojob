@extends('front.layouts.master' . $ajax_view )
@section('content')
    <div id="page-content" class="container-fluid p-t-30" data-title="{{ __('Post new job') }}">
        <div id="app-post-job" class="content-wrapper">
            <div class="row">
                <div class="col s3">

                </div>
                <div class="col s9">
                    <div class="row">
                        <div class="card white">
                            <div class="card-content ">
                                <div class="row">
                                    <div class="col s12">
                                        <h3 class="uppercase card-title center-align">
                                            Đăng tin tuyển dụng
                                        </h3>
                                    </div>
                                    <div class="col s12">
                                        <vue-form :state="formstate">
                                            <validate class="input-field col s12">
                                                <input
                                                        placeholder="{{ __('Enter job title') }}"
                                                        id="job_title"
                                                        type="text"
                                                        required
                                                        v-model="data.title"
                                                        name="job_title"
                                                        class="validate">
                                                <label for="job_title">
                                                    Tiêu đề tuyển dụng
                                                    <span class="red-text">*</span>
                                                </label>
                                                <field-messages name="job_title">
                                                    <div slot="required">
                                                        <span class="error red-text">
                                                            {{ __('This field is required') }}
                                                        </span>
                                                    </div>
                                                </field-messages>
                                            </validate>
                                            <div class="row">
                                                <div class="input-field col s3">
                                                    <r-select :options="resources.industries"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.industry_ids">

                                                    </r-select>
                                                    <label>
                                                        Chọn ngành nghề ( <small>Tối đa 3</small> )
                                                    </label>
                                                </div>
                                                <div class="input-field col s3">
                                                    <r-select :options="resources.job_levels"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.job_level_ids">

                                                    </r-select>
                                                    <label>
                                                        Vị trí tuyển dụng
                                                    </label>
                                                </div>
                                                <div class="input-field col s3">
                                                    <r-select :options="resources.job_types"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.job_type_ids">

                                                    </r-select>
                                                    <label>
                                                       Cấp bậc tuyển dụng
                                                    </label>
                                                </div>
                                                <div class="input-field col s3">
                                                    <r-select :options="resources.job_types"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.job_type_ids">

                                                    </r-select>
                                                    <label>
                                                        Hình thức làm việc
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s3 m-t-20">
                                                    <r-select :options="resources.industries"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.industry_ids">

                                                    </r-select>
                                                    <label>
                                                       Phương thức áp dụng lương
                                                    </label>
                                                </div>
                                                <div class="input-field col s3 m-t-20">
                                                    <r-select :options="resources.job_levels"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.job_level_ids">

                                                    </r-select>
                                                    <label>
                                                       Đơn vị áp dụng lương
                                                    </label>
                                                </div>

                                                <div class="col s6">
                                                    <div class="row">
                                                        <div class="col s6">
                                                            <label for="salary_from">
                                                                Mức lương giao động từ
                                                            </label>
                                                            <input
                                                                    placeholder="{{ __('Enter job title') }}"
                                                                    id="salary_from"
                                                                    type="text"
                                                                    required
                                                                    v-model="data.title"
                                                                    name="job_title"
                                                                    class="validate">
                                                        </div>

                                                        <div class="col s6">
                                                            <label for="salary_from">
                                                                Mức lương giao động từ
                                                            </label>
                                                            <input
                                                                    placeholder="{{ __('Enter job title') }}"
                                                                    id="salary_from"
                                                                    type="text"
                                                                    required
                                                                    v-model="data.title"
                                                                    name="job_title"
                                                                    class="validate">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="input-field col s3">
                                                    <r-select :options="resources.industries"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.industry_ids">

                                                    </r-select>
                                                    <label>
                                                        Chọn ngành nghề ( <small>Tối đa 3</small> )
                                                    </label>
                                                </div>
                                                <div class="input-field col s3">
                                                    <r-select :options="resources.job_levels"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.job_level_ids">

                                                    </r-select>
                                                    <label>
                                                        Vị trí tuyển dụng
                                                    </label>
                                                </div>
                                                <div class="input-field col s3">
                                                    <r-select :options="resources.job_types"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.job_type_ids">

                                                    </r-select>
                                                    <label>
                                                        Cấp bậc tuyển dụng
                                                    </label>
                                                </div>
                                                <div class="input-field col s3">
                                                    <r-select :options="resources.job_types"
                                                              multiple
                                                              placeholder="{{ __('Select forcus industries') }}"
                                                              v-model="data.job_type_ids">

                                                    </r-select>
                                                    <label>
                                                        Hình thức làm việc
                                                    </label>
                                                </div>
                                            </div>

                                        </vue-form>
                                    </div>
                                </div>

                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@if( $ajax )
    <script src="{{ asset('resources/js/pages/post-job.js')  }}"></script>
@else
@section('script')
    <script src="{{ asset('resources/js/pages/post-job.js')  }}"></script>
@stop
@endif