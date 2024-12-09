<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>INSPINIA | Dashboard</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Toastr style -->
    <link href=" {{ asset('admin/css/plugins/toastr/toastr.min.css') }} " rel="stylesheet" />

    <!-- Gritter -->
    <link href=" {{ asset('admin/js/plugins/gritter/jquery.gritter.css') }} " rel="stylesheet" />

    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />

    {{-- DataTables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" />
    <link href="{{ asset('/admin/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet" />
</head>

<body>
    @include('admin.layout.header')
    <main>
        @yield('content')
    </main>
    @include('admin.layout.footer')

    <style>
        .ibox-title h5 {
            margin: 7px 0px 7px;
        }
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('/admin/js/plugins/dataTables/datatables.min.js') }}"></script>

    {{-- ----------------------------------------------- --}}
    {{-- ----------------------------------------------- --}}
    {{-- Functions build for the dashboard by Introps IT --}}
    {{-- ----------------------------------------------- --}}
    {{-- ----------------------------------------------- --}}

    <script>
        $(document).ready(function() {
            $(".dataTables-example").DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [ /* Your button configurations */ ],
            });

            loadProductData();

            $('#productTable').on('click', '.btn-edit', function(e) {
                e.preventDefault();
                const productId = $(this).data('id');
                window.location.href = `/product/edit/${productId}`;
            });

            $('#productTable').on('click', '.btn-delete', function(e) {
                e.preventDefault();
                const productId = $(this).data('id');

                if (confirm('Are you sure you want to delete this product?')) {
                    deleteProduct(productId);
                }
            });
        });

        function loadProductData() {
            $.ajax({
                url: '{{ route('product.get') }}',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    const tableBody = $('#productTable tbody');
                    tableBody.empty();

                    if (response.data && response.data.length > 0) {
                        response.data.forEach((product, index) => {
                            const row = `
                    <tr>
                        <td>${product.id}</td>
                        <td>${product.prod_name}</td>
                        <td>${product.price}</td>
                        <td>${product.category}</td>
                        <td>${product.is_popular ? 'Yes' : 'No'}</td>
                        <td>${product.status}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary btn-edit" data-id="${product.id}">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger btn-delete" data-id="${product.id}">Delete</a>
                        </td>
                    </tr>
                `;
                            tableBody.append(row);
                        });
                    } else {
                        tableBody.append('<tr><td colspan="8" class="text-center">No data available</td></tr>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error loading product data:', error);
                }
            });
        }

        function deleteProduct(productId) {
            $.ajax({
                url: '{{ route('product.delete') }}',
                type: 'POST',
                data: {
                    id: productId,
                    _token: '{{ csrf_token() }}', // CSRF token for security
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        loadProductData(); // Refresh the table data
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error deleting product:', error);
                    alert('Failed to delete the product. Please try again.');
                }
            });
        }
    </script>


    <!-- DataTables Bootstrap Integration -->
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    <!-- Mainly scripts -->
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Flot -->
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>

    <!-- Peity -->
    <script src="{{ asset('admin/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('admin/js/inspinia.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('admin/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- GITTER -->
    <script src="{{ asset('admin/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset('admin/js/demo/sparkline-demo.js') }}"></script>

    <!-- ChartJS-->
    <script src="{{ asset('admin/js/plugins/chartJs/Chart.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('admin/js/plugins/toastr/toastr.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var updatedFields = {};

            $('#messagesTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                columnDefs: [{
                    orderable: false,
                    targets: [0]
                }],
                dom: '<"top"f>rt<"bottom"p><"clear">'
            });

            $('#componentDropdown').on('change', function() {
                var componentId = $(this).val();

                if (componentId) {
                    console.log('Selected component ID:', componentId);

                    $.ajax({
                        url: '/get-component-fields/' + componentId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            console.log('Fields Data:', data);

                            var container = $('#componentFieldsContainer');
                            container.empty();

                            if (data.fields && data.fields.length > 0) {
                                $.each(data.fields, function(index, field) {
                                    var label = $('<label>', {
                                        class: 'col-lg-2 col-form-label',
                                        text: field.field_name,
                                    });

                                    var input = $('<input>', {
                                        type: 'text',
                                        class: 'col-lg-10 form-control',
                                        name: 'field[' + field.id + ']',
                                        value: field.value,
                                    });

                                    updatedFields[field.id] = field.value;

                                    var fieldDiv = $('<div>', {
                                            class: 'form-group row'
                                        })
                                        .append(label)
                                        .append(input);

                                    container.append(fieldDiv);

                                    input.on('change', function() {
                                        updatedFields[field.id] = $(this).val();
                                    });
                                });
                            } else {
                                container.append(
                                    '<p>No fields available for this component.</p>');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching fields:', error);
                        }
                    });
                } else {
                    $('#componentFieldsContainer').empty();
                }
            });

            $('#saveButton').on('click', function() {
                var componentId = $('#componentDropdown').val();

                if (componentId) {
                    $.ajax({
                        url: '/save-component-fields',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            component_id: componentId,
                            updated_fields: updatedFields
                        },
                        success: function(response) {
                            toastr.clear();
                            toastr.success('Changes saved successfully!');
                            $('#componentFieldsContainer').empty();
                            updatedFields = {};
                        },
                        error: function(xhr, status, error) {
                            console.error('Error saving fields:', error);
                            toastr.clear();
                            toastr.error('An error occurred while saving changes.');
                        }
                    });
                } else {
                    toastr.clear();
                    toastr.error('Please select a component.');
                }
            });
        });
    </script>
</body>

</html>
