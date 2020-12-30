{transports}
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-{colors} shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-{colors} text-uppercase mb-1">{model}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-700"><span class="badge bg-{colors} text-gray-800" id="transport_{id}">{count}</span>&nbsp;{name}</div>
                    </div>
                    <div class="col-auto">
                        <a data-toggle="modal" data-target="{noparse}#transportModal{/noparse}" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit {name}" class="btn btn-dark btn-circle" data-number="{number}" data-tclass="{transport_class}"><i class="far fa-edit text-gray-200"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/transports}