<div class="row align-items-center">
    <div class="col-lg-8 order-last">
        <ul class="list-unstyled mb-4">
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-user text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $popup->full_name }} </h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-mail text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $popup->zip }}</h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-mail text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $popup->email }}</h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-phone text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $popup->mobile }}</h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-phone text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $popup->part_name }}</h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-device-desktop text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">
                    <label class="fw-bold me-1">IP Address:</label>
                    {{ !empty($popup->ip_address) ? $popup->ip_address : 'NA' }}
                </h6>
            </li>
        </ul>
    </div>
</div>
