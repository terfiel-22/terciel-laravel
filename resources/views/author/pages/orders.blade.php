@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Orders</h1><a class="badge bg-primary ms-2"
                href="https://adminkit.io/pricing/" target="_blank">Pro
                Component <i class="fas fa-fw fa-external-link-alt"></i></a>
        </div>

        <div class="card">
            <div class="card-header pb-0">
                <div class="card-actions float-end">
                    <div class="dropdown position-relative">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="align-middle" data-feather="more-horizontal"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Orders</h5>
            </div>
            <div class="card-body">
                <table id="datatables-orders" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Billing Name</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>#0001</strong></td>
                            <td>Brian Smith</td>
                            <td>2021-12-04</td>
                            <td>$353.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-mastercard me-1"></i> Mastercard</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0002</strong></td>
                            <td>Patrick Babcock</td>
                            <td>2021-12-05</td>
                            <td><s>$939.00</s></td>
                            <td><span class="badge badge-danger-light">Chargeback</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0003</strong></td>
                            <td>Ronald Woods</td>
                            <td>2021-12-12</td>
                            <td><s>$965.00</s></td>
                            <td><span class="badge badge-warning-light">Refunded</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0004</strong></td>
                            <td>Morris Evans</td>
                            <td>2021-12-21</td>
                            <td>$247.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-mastercard me-1"></i> Mastercard</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0005</strong></td>
                            <td>Kirk Batts</td>
                            <td>2022-01-05</td>
                            <td>$187.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0006</strong></td>
                            <td>Mark Lebron</td>
                            <td>2022-01-11</td>
                            <td>$784.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-mastercard me-1"></i> Mastercard</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0007</strong></td>
                            <td>Waylon Atkinson</td>
                            <td>2022-02-01</td>
                            <td>$258.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-mastercard me-1"></i> Mastercard</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0008</strong></td>
                            <td>David Larose</td>
                            <td>2022-02-26</td>
                            <td><s>$933.00</s></td>
                            <td><span class="badge badge-danger-light">Chargeback</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0009</strong></td>
                            <td>Shawn Rapp</td>
                            <td>2022-03-09</td>
                            <td>$928.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0010</strong></td>
                            <td>Chad Smith</td>
                            <td>2022-03-17</td>
                            <td><s>$715.00</s></td>
                            <td><span class="badge badge-warning-light">Refunded</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0011</strong></td>
                            <td>Kenneth Garcia</td>
                            <td>2022-04-06</td>
                            <td>$534.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-mastercard me-1"></i> Mastercard</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0012</strong></td>
                            <td>Charles Trombly</td>
                            <td>2022-04-19</td>
                            <td><s>$334.00</s></td>
                            <td><span class="badge badge-warning-light">Refunded</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0013</strong></td>
                            <td>Carlton Dillow</td>
                            <td>2022-05-09</td>
                            <td>$874.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-mastercard me-1"></i> Mastercard</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0014</strong></td>
                            <td>Hubert Ezell</td>
                            <td>2022-05-14</td>
                            <td>$963.00</td>
                            <td><span class="badge badge-success-light">Paid</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#0015</strong></td>
                            <td>Paul Banks</td>
                            <td>2022-06-03</td>
                            <td><s>$898.00</s></td>
                            <td><span class="badge badge-warning-light">Refunded</span></td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
@endsection

@section('scripts')
@vite(['resources/js/datatables.js']);

<script>
    document.addEventListener("DOMContentLoaded", function() {
			// Datatables Orders
			$("#datatables-orders").DataTable({
				responsive: true,
				aoColumnDefs: [{
					bSortable: false,
					aTargets: [-1]
				}]
			});
		});
</script>
@endsection