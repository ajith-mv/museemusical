<!--begin::Variations-->
<div class="card card-flush py-4">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>Filter Variations</h2>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Input group-->
        <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
            <!--begin::Label-->
            <label class="form-label">Add Product Filter Variations</label>
            <!--end::Label-->
            <!--begin::Repeater-->
            <div id="kt_ecommerce_add_product_options">
                <!--begin::Form group-->
                <div class="form-group">
                    <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                        <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                            <!--begin::Select2-->
                            <div class="w-100 w-md-200px">
                                <select class="form-select" name="product_option" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option">
                                    <option></option>
                                    <option value="color">Color</option>
                                    <option value="size">Size</option>
                                    <option value="material">Material</option>
                                    <option value="style">Style</option>
                                </select>
                            </div>
                            <!--end::Select2-->
                            <!--begin::Input-->
                            <input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Values" />
                            <!--end::Input-->
                            <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
                                        <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                        </div>
                    </div>
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group mt-5">
                    <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Add another variation</button>
                </div>
                <!--end::Form group-->
            </div>
            <!--end::Repeater-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Card header-->
</div>
<!--end::Variations-->