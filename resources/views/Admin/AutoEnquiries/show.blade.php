<div class="row align-items-center">
    <div class="col-lg-8 order-last">
        <ul class="list-unstyled mb-4">

            <!-- Full Name -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-user text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Name:</label> {{ $autoenquiry->full_name }}
                </h6>
            </li>

            <!-- Email -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-mail text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Email:</label> {{ $autoenquiry->email }}
                </h6>
            </li>

            <!-- Mobile -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-device-mobile text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Mobile:</label> {{ $autoenquiry->mobile }}
                </h6>
            </li>

            <!-- ZIP Code -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-map-pin text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">ZIP Code:</label> {{ $autoenquiry->zip }}
                </h6>
            </li>

            <!-- Vehicle Model -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-car text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Vehicle Model:</label> {{ $autoenquiry->vehicle_model }}
                </h6>
            </li>

            <!-- Vehicle Year -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-calendar-event text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Vehicle Year:</label> {{ $autoenquiry->vehicle_year }}
                </h6>
            </li>

            <!-- Part Name -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-tools text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Part Name:</label> {{ $autoenquiry->part_name }}
                </h6>
            </li>

            <!-- Part Condition -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-flag text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Make:</label> {{ $autoenquiry->make }}
                </h6>
            </li>
            <!-- VIN -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-id text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">VIN:</label>
                    {{ !empty($autoenquiry->vin) ? $autoenquiry->vin : 'NA' }}
                </h6>
            </li>

            <!-- Purchase Planning -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-clock text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Purchase Planning:</label>
                    {{ !empty($autoenquiry->purchase_time) ? $autoenquiry->purchase_time : 'NA' }}
                </h6>
            </li>

            
            <!-- Enquiry Type -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-tag text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Enquiry Type:</label>
                    {{ !empty($autoenquiry->form_name) ? $autoenquiry->form_name : 'NA' }}
                </h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-device-desktop text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">IP Address:</label>
                    {{ !empty($autoenquiry->ip_address) ? $autoenquiry->ip_address : 'NA' }}
                </h6>
            </li>

            <!-- Note -->
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-notes text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">Note:</label>
                    {{ !empty($autoenquiry->notes) ? $autoenquiry->notes : 'NA' }}
                </h6>
            </li>
        </ul>
    </div>
</div>
