@extends('backend.layout')

@section('template')
    <x-breadcrumb :breadcrumb="$breadcrumb" />
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="mt-20">
            <div class="row">
                <div class="col-lg-5">
                    <div class="panel-body">
                        <h2>General Information</h2>
                        <p class="text-14">- Enter the general information of the user</p>
                        <p class="text-14">- Note: Field marked with <span class="text-danger">(*)</span> are required </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row mb-15">
                                <div class="col-lg-6">
                                    <x-input :label="'Email'" :name="'email'" :value="''" :require="true" />
                                </div>
                                <div class="col-lg-6">
                                    <x-input :label="'Fullname'" :name="'name'" :value="''" :require="true" />
                                </div>
                            </div>
                            <div class="row mb-15">
                                <div class="col-lg-6">
                                    <x-select :name="'user_catalogue_id'" :options="$userCatalogues" :root="'Select User Group'" :label="'User Group'" />
                                </div>
                                <div class="col-lg-6">
                                    <x-input :label="'Phone'" :name="'phone'" :value="''" :require="true" />
                                </div>
                            </div>
                            <div class="row mb-15">
                                <div class="col-lg-6">
                                    <x-input :label="'Password'" :name="'password'" :value="''" :require="true" :type="'password'" />
                                </div>
                                <div class="col-lg-6">
                                    <x-input :label="'Re Password'" :name="'re_password'" :value="''" :require="true" :type="'password'" />
                                </div>
                              
                            </div>
                            <div class="row mb-15">
                                <div class="col-lg-12">
                                    <x-input :label="'Address'" :name="'address'" :value="''" />
                                </div>
                            </div>
                            <div class="row mb-15">
                                <div class="col-lg-12">
                                    <x-input :label="'Image'" :name="'image'" :value="''" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-left mb-15">
                        <button type="submit" name="send" value="send" class="btn btn-success text-13">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection