<div class="card mt-3 border-dark">{{-- accounts --}}
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h3>Account Information</h3>
                        </div>{{-- col --}}
                        <div class="col text-right">
                            <a href="/staff/{{ $staff->id }}/account" class="btn btn-outline-info">Update</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="offset-md-1 col-sm-11">
                            <h4 class="p-2">
                                <span class="lead">B.I.R. No.:</span>
                                {{ $staff->birNo }}
                            </h4>   

                            <h4 class="p-2">
                                <span class="lead">S.S.S. No:</span>
                                {{ $staff->sssNo }}
                            </h4>                   

                            <h4 class="p-2">
                                <span class="lead">Pagibig No.:</span>
                                {{ $staff->pagibigNo }}
                            </h4>

                            <h4 class="p-2">
                                <span class="lead">Philhealth No.:</span>
                                {{ $staff->philhealthNo }}
                            </h4>

                            <h4 class="p-2">
                                <span class="lead">Bank Account No.:</span>
                                {{ $staff->bankNo }}
                            </h4>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
                </div>{{-- card-body --}}
            </div>{{-- card --}}