@extends('admin.template')
 @section('content')
 <!-- Main Container -->
 <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    
                    <div class="row">
                        
                        <div class="col-md-7 col-xl-12">
                            <!-- Message List -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <div class="block-title">
                                        <strong>1-10</strong> from <strong>23</strong>
                                    </div>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option">
                                            <i class="si si-arrow-left"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option">
                                            <i class="si si-arrow-right"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Messages Options -->
                                    <div class="push">
                                        <button type="button" class="btn btn-rounded btn-alt-secondary float-right">
                                            <i class="fa fa-times text-danger mx-5"></i>
                                            <span class="d-none d-sm-inline"> Delete</span>
                                        </button>
                                        <button type="button" class="btn btn-rounded btn-alt-secondary">
                                            <i class="fa fa-archive text-primary mx-5"></i>
                                            <span class="d-none d-sm-inline"> Archive</span>
                                        </button>
                                        <button type="button" class="btn btn-rounded btn-alt-secondary">
                                            <i class="fa fa-star text-warning mx-5"></i>
                                            <span class="d-none d-sm-inline"> Star</span>
                                        </button>
                                    </div>
                                    <!-- END Messages Options -->

                                    <!-- Messages -->
                                    <!-- Checkable Table (.js-table-checkable class is initialized in Codebase() -> uiHelperTableToolsCheckable()) -->
                                    <table class="js-table-checkable table table-hover table-vcenter">
                                        <tbody>
                                        @inject('indonesian_date', 'App\Http\Controllers\SentItemController')
                                        @foreach($sentitems as $sentitem)
                                            <tr>
                                                <td class="text-center" style="width: 40px;">
                                                    <label class="css-control css-control-primary css-checkbox">
                                                        <input type="checkbox" class="css-control-input">
                                                        <span class="css-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-w600" style="width: 140px;">Wayne Garcia</td>
                                                <td>
                                                    <div class="text-muted mt-5">{{str_limit($sentitem->TextDecoded, 50)}}</div>
                                                </td>
                                                <td class="d-none d-xl-table-cell font-w600 font-size-sm text-muted" style="width: 250px;">{{$indonesian_date->indonesian_date($sentitem->SendingDateTime)}}</td>
                                            </tr>
                                            
                                                
                                        @endforeach    
                                        </tbody>
                                    </table>
                                    <!-- END Messages -->
                                </div>
                            </div>
                            <!-- END Message List -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
@endsection            

